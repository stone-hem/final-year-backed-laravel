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
        Schema::create('instants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('user_current_location');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('firm_or_technician');
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
        Schema::dropIfExists('instants');
    }
};
