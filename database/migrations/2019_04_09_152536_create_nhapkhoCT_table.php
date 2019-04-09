<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhapkhoCTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapkhoCT', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sanpham_id')->unsigned();
            $table->integer('SoLoSX');
            $table->integer('HanDung');
            $table->integer('SoLuong');
            $table->integer('DonGia');
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
        Schema::dropIfExists('nhapkho_c_t');
    }
}
