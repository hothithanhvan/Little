<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    
    protected $fillable = [
        'tensukien', 'thoigiandienra', 'gia', 'image',
     ];
     

    public function getAll(){  
        $event = DB::table($this->table)->get();
        return $event;
    }

}

