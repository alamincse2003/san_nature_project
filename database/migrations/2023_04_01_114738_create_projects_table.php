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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('short_title')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->longText('description1')->nullable();
            $table->longText('description2')->nullable();
            $table->string('banner_photo')->nullable();
            $table->string('photo')->nullable();
            $table->string('icon')->nullable();
            $table->string('project_type')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
