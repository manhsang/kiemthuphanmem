<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhapkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapkho', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nhacungcap_id')->unsigned();
            $table->datetime('NgayLap');
            $table->string('MaNguoiNhap');
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
        Schema::dropIfExists('nhapkho');
    }
}
