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
    public function __construct()
    {
        $this->tickets = new Ticket();
    }
    public function index()
    {
        return view('ticket.buy');
    }
    public function create(Request $request)
    {
        $this->tickets->create($request);
        $a = DB::table('tickets')->latest()->first();
        return view('ticket.pay',compact('a'));
    }
    public function update(Request $request,$id)
    {
        $this->tickets->create2($request, $id);
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
        return view('sentMail');
    }
}
