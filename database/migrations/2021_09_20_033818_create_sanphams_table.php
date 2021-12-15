<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->integer('mshh');
            $table->string('ma_danhmuc',20);
            $table->string('ma_ncc',20);
            $table->string('ten_sp',255);
            $table->float('gia_nhap');
            $table->float('gia_ban');
            $table->integer('so_luong');
            $table->string('hinhanh_sp', 255);
            $table->text('mota_sp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanphams');
    }
}
