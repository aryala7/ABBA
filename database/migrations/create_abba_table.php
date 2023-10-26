<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('abba_table', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained(config('abba.users_table'),'id')->nullOnDelete();
            $table->unsignedInteger('attempt')->default(0);

            $table->timestamps();
        });
    }
};
