<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQlsvSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qlsv_sinhviens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('hovaten');
            $table->String('diachi');
            $table->tinyInteger('gioitinh');
            $table->String('gmail');
            $table->integer('sodienthoaisinhvien');
            $table->integer('sodienthoaigiadinh');
            $table->String('ghichu');
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
        Schema::dropIfExists('qlsv_sinhviens');
    }
}
