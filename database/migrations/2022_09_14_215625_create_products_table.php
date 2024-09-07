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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // who create this news
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('category_id');  // who create this news
            $table->foreign('category_id')->references('id')->on('categories');
            $table->longText('description_part1')->nullable();
            $table->longText('description_part2')->nullable();

            $table->text('featured_photo')->nullable();
            $table->text('photo')->nullable();

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
        Schema::dropIfExists('products');
    }
};
