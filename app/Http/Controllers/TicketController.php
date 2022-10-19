<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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

    public function generatePDF($id) 
    {
        // $d = DB::table('tickets')->where('id',$id)->pluck('tenve')->first();
        $e = DB::table('tickets')->where('id',$id)->first();
        $x = "image/qrcode".$id.".jpg";
        QrCode::size(300)->generate($e->tenve, public_path($x));
        $pdf = PDF::loadview('welcome',compact('x','e'));
        return $pdf->download('vé.pdf');

    }
    public function sendMail($id)
    {
        $e = DB::table('tickets')->where('id',$id)->first();
        $x = "image/qrcode".$id.".jpg";
        QrCode::size(300)->generate($e->tenve, public_path($x));

        $pdf = PDF::loadView('welcome', compact('x','e'));
        $y = "public\pdf\pdf".$id.".pdf";
        $z = "app\public\pdf\pdf".$id.".pdf";
        Storage::put($y, $pdf->output());

        $files = [
             storage_path($z),
        ];
  
        $email = $e->email;
        $name = 'test name for email';
        Mail::send('email', compact('name'), function($mail) use ($email, $files){
            $mail->subject('Tải vé');
            foreach ($files as $file){
                        $mail->attach($file);
                    }
            $mail->to($email, '');
            });
    }
}
