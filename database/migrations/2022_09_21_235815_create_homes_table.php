<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('f_para')->nullable();
            $table->string('s_para')->nullable();
            $table->string('short_text')->nullable();
            $table->string('f_s_title')->nullable();
            $table->string('s_short_text')->nullable();
            $table->string('s_s_title')->nullable();
            $table->string('s_s_short_text')->nullable();
            $table->string('photo')->nullable();

            $table->string('choose_us_title')->nullable();
            $table->string('choose_us_title_para')->nullable();
            $table->string('choose_us_title_para_tow')->nullable();
            $table->string('choose_us_text')->nullable();
            $table->string('choose_us_heading_one')->nullable();
            $table->string('choose_us_heading_one_para')->nullable();
            $table->string('choose_us_heading_two')->nullable();
            $table->string('choose_us_heading_two_para')->nullable();
            $table->string('choose_us_heading_thre')->nullable();
            $table->string('choose_us_heading_thre_para')->nullable();
            $table->string('choose_us_heading_four')->nullable();
            $table->string('choose_us_heading_four_para')->nullable();
            $table->string('choose_us_video')->nullable();
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
        Schema::dropIfExists('homes');
    }
};
