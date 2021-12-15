<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $fillable = [
        'ma_danhmuc',
        'ten_danhmuc',
        'trangthai'
    ];
    use HasFactory;
    //public $timestamps = false;

    protected $table = 'danhmucs';
}
