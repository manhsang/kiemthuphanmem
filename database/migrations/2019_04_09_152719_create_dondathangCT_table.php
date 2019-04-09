<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangCTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondathangCT', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nhapkho_id')->unsigned();
            $table->integer('sanpham_id')->unsigned();
            $table->integer('SoLuong');
            $table->float('DonGia');
            $table->integer('SoLuongThuc');
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
        Schema::dropIfExists('dondathang_c_t');
    }
}
