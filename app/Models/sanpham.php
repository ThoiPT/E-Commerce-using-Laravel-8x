<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $fillable = [
        'mshh',
        'ma_danhmuc',
        'ma_ncc',
        'ten_sp',
        'gianhap_sp',
        'giaban_sp',
        'so_luong',
        'hinhanh_sp',
        'mota_sp'
    ];
    use HasFactory;
    protected $table = 'sanphams';
}
