<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('codings_id')->references('id')->on('codings')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('vektors_id')->references('id')->on('vektors')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('musics_id')->references('id')->on('musics')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('admins_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('qty');
            $table->string('capture');
            $table->enum('status', ['pending', 'denied', 'packing', 'sent']);
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
        Schema::dropIfExists('transactions');
    }
}