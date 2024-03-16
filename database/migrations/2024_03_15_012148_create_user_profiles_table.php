<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('Nickname');
            $table->string('profile_image')->nullable();
            $table->string('SNS')->nullable();
            $table->string('Industry');
            $table->text('Job-Description');
            $table->text('Career');
            $table->text('Qualification')->nullable();
            $table->string('Disk')->nullable();
            $table->string('Whyme')->nullable();
            $table->string('Product')->nullable();
            $table->string('Hobby');
            $table->string('Birthplace')->nullable();
            $table->string('HolidayTime')->nullable();
            $table->string('OneWord')->nullable();
            $table->string('Contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
