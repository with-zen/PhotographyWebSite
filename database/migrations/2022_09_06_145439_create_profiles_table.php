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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->text('bio');
            $table->string('telegram');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('progressbar_1');
            $table->string('progressbar_2');
            $table->string('progressbar_3');
            $table->string('progressbar_4');
            $table->string('name_of_progressbar_1');
            $table->string('name_of_progressbar_2');
            $table->string('name_of_progressbar_3');
            $table->string('name_of_progressbar_4');
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
        Schema::dropIfExists('profiles');
    }
};
