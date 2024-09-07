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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->default('Billing Application');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('footer')->nullable()->default('Technical Supported by Apol');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_linkedIn')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('c_project')->nullable();
            $table->string('client')->nullable();
            $table->string('engineer')->nullable();
            $table->string('experience')->nullable();
            $table->string('t_banner')->nullable();
            $table->text('google_map_code')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
