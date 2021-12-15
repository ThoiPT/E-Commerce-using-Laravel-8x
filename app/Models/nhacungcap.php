<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    protected $fillable = [
        'ma_ncc',
        'ten_ncc',
        'diachi_ncc',
        'sdt_ncc',
        'email_ncc'
    ];
    use HasFactory;
}
