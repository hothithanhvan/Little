<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'goi','soluongve','ngaysd','hoten','sdt','email',
        'sothe','hotenchuthe','ngayhethan','cvv','tenve','sotien','sove','date'
     ];
}
