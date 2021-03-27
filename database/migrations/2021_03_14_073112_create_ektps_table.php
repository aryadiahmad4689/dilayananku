<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEktpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ektps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('image_kartu_keluarga');
            $table->string('image_ijazah');
            $table->string('image_foto');
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
        Schema::dropIfExists('ektps');
    }
}
