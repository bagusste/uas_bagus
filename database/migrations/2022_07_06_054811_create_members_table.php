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
        Schema::create('tambahans', function (Blueprint $table) {
            $table->id('id_tambahan');
            $table->string('nama_tambahan');
            $table->double('harga');
            $table->timestamp('created_at');
            $table->dateTime('updated_at');
        });

        Schema::create('members', function (Blueprint $table) {
            $table->id('id_member');
            $table->string('nama_member');
            $table->unsignedbigInteger('tambahan');
            $table->timestamp('created_at');
            $table->dateTime('updated_at');
            $table->foreign('tambahan')->references('id_tambahan')->on('tambahans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
