<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;

class TicketController extends Controller
{
    public function index()
    {
        return view('ticket.buy');
    }
    public function create(Request $request)
    {
        $request->validate([
            'goi' => 'required',
            'soluongve' => 'required',
            'ngaysd' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',  
            'email' => 'required',
        ],
    [
        // 'loinhan.required' => 'Nhập đầy đủ các trường thông tin',
    ]);
        Ticket::create($request->all());
        DB::table('tickets')->where('hoten',$request->hoten)->update(
            ['sotien' => 100000*$request->soluongve,
            'date' => now()->toDateString(),
            ]
        );
        DB::table('tickets')->where('date', now()->toDateString())->update(
            ['sove' => DB::table('tickets')->where('date', now()->toDateString())->sum('soluongve')]
        );
        $a = DB::table('tickets')->where('hoten',$request->hoten)->first();
        return view('ticket.pay',compact('a'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([

            'sothe' => 'required',
            'hotenchuthe' => 'required',
            'ngayhethan' => 'required',
            'cvv' => 'required',
        ],
    [
        // 'loinhan.required' => 'Nhập đầy đủ các trường thông tin',
    ]);
    $y = "DS".now()->toDateString().$id;
    DB::table('tickets')->where('id', $id)->update(
        [
            'sothe' => $request->sothe,
            'hotenchuthe' => $request->hotenchuthe,
            'ngayhethan' => $request->ngayhethan,
            'cvv' => $request->cvv,
            'tenve' => $y,
        ]
    );
    $b = DB::table('tickets')->where('id',$id)->get();

    return view('ticket.success',compact('b'));
    }
    public function generatePDF($id) {
        $x = "image/qrcode".$id.".jpg";
        QrCode::generate('Welcome to Makitweb', public_path($x));
        $pdf = PDF::loadview('welcome');
        return $pdf->download('vé.pdf');

    }
}
