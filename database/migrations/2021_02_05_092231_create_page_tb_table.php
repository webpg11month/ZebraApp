<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_tb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('page_id',255)->unique();
            $table->string('text',255);
            $table->string('images',255);
            $table->enum('flg',['1','2','3']);
            $table->string('etc',255);
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
        Schema::dropIfExists('page_tb');
    }
}
