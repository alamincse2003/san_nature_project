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
        Schema::create('c_r_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('email',50)->nullable();
            $table->longText('details')->nullable();
            $table->text('photo')->nullable();
            $table->dateTime('date')->nullable();
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
        Schema::dropIfExists('c_r_m_s');
    }
};
