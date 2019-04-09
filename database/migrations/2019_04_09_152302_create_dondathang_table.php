<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('khachhang_id')->unsigned();
            $table->string('TrangThai');
            $table->datetime('NgayDatHang');
            $table->datetime('NgayKetThuc');
            $table->string('MaLyDo');
            $table->string('MaNguoiXuLy');
            $table->string('SoHoaDon');
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
        Schema::dropIfExists('dondathang');
    }
}
