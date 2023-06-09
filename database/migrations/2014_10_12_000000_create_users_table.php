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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nim')->nullable();
            $table->string('angkatan');
            $table->foreignId('study_program_id')->constrained('study_programs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->boolean('vote_status')->default(false);
            $table->foreignId('election_id')->nullable()->constrained('elections')->nullOnDelete()->cascadeOnUpdate();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('show_phone')->default(false);
            $table->boolean('show_address')->default(false);
            $table->boolean('show_socmed')->default(false);
            $table->string('activation_status')->default('not send');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
