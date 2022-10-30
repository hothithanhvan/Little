<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
       'ten', 'email', 'sdt', 'diachi', 'loinhan'
    ];
    public function create(Request $request)
    {
        $request->validate([
            'ten' => 'required',
            'email' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'loinhan' => 'required',  
        ],
    [
        'loinhan.required' => 'Nhập đầy đủ các trường thông tin',
    ]);
        DB::table('contacts')->insert(
            [  'ten' => $request->ten,
                'email' => $request->email,
                'sdt' => $request->sdt,
                'diachi' => $request->diachi,
                'loinhan' => $request->loinhan,
                'created_at' => Carbon::now(),
            ]

        );
    }
}
