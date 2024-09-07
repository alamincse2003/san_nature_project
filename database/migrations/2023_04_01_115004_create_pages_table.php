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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // who create this news
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('page_name')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('page_category')->nullable();
            $table->string('position_view')->nullable();
//            $table->unsignedBigInteger('category_id');  // who create this news
//            $table->foreign('category_id')->references('id')->on('categories');
            $table->longText('description_part1')->nullable();
            $table->longText('description_part2')->nullable();
            $table->string('featured_photo')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('pdf')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('pages');
    }
};
