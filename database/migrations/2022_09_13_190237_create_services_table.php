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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('title')->nullable();
            $table->string('short_text')->nullable();
            $table->string('heading')->nullable();
            $table->string('long_text')->nullable();
            $table->string('description')->nullable();
            $table->string('photo')->nullable();
            $table->text('video')->nullable();
            $table->string('isFeatured')->nullable();
            $table->string('status')->nullable()->default('active');
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
        Schema::dropIfExists('services');
    }
};
