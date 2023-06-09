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
        Schema::create('election_event', function (Blueprint $table) {
            $table->foreignId('election_id')->constrained()->cascadeOnDelete();
            $table->foreignId('event_id')->constrained();
            $table->string('method');
            $table->string('location');
            $table->string('description')->nullable();
            $table->dateTime('start_event');
            $table->dateTime('end_event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('election_event');
    }
};
