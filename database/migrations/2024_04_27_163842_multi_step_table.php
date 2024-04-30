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
        Schema::create('multi_steps', function (Blueprint $table) {
            $table->id();
            $table->string("Q1");
            $table->string("Q2");
            $table->string("Q3");
            $table->string("Q4");
            $table->string("Q5");
            $table->string("Q6");
            $table->string("Q7");
            $table->string("Q8");
            $table->string("Q9");
            $table->string("Q10");
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
        Schema::dropIfExists('multi_steps');
    }
};
