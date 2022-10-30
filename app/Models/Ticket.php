<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'goi','soluongve','ngaysd','hoten','sdt','email',
        'sothe','hotenchuthe','ngayhethan','cvv','tenve','sotien','sove','date'
     ];
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
        DB::table('tickets')->insert([
            'goi' => $request->goi,
            'soluongve' => $request->soluongve,
            'ngaysd' => $request->ngaysd,
            'hoten' => $request->hoten,
            'sdt' => $request->sdt,
            'email' => $request->email,
            'created_at' => Carbon::now()
        ]);
        DB::table('tickets')->where('hoten',$request->hoten)->update(
            ['sotien' => 100000*$request->soluongve,
            'date' => now()->toDateString(),
            ]
        );
        DB::table('tickets')->where('date', now()->toDateString())->update(
            ['sove' => DB::table('tickets')->where('date', now()->toDateString())->sum('soluongve')]
        );
     }
     public function create2(Request $request, $id)
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
     }
}
