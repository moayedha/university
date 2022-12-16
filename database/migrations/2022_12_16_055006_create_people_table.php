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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('img_bath');
            $table->string('country');
            $table->string('city');
            $table->string('region');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender');
            $table->date('birth_date')->nullable(); // مؤقتا
            $table->string('Specialises')->nullable();
            $table->longText('Experience')->nullable();
            $table->float('min')->nullable();
            $table->float('max')->nullable();
            $table->float('rate')->nullable();

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
        Schema::dropIfExists('people');
    }
};
