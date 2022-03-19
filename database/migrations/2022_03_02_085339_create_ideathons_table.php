<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeathonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideathons', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ketua');
            $table->string('anggota1');
            $table->string('anggota2');
            $table->string('email1');
            $table->string('email2');
            $table->string('email3');
            $table->string('username');
            $table->string('password');
            $table->string('nim1')->nullable();
            $table->string('nim2')->nullable();
            $table->string('nim3')->nullable();
            $table->string('univ')->nullable();
            $table->string('hp1')->nullable();
            $table->string('hp2')->nullable();
            $table->string('hp3')->nullable();
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->string('ktm1')->nullable();
            $table->string('ktm2')->nullable();
            $table->string('ktm3')->nullable();
            $table->string('status')->default(0);
            $table->string('pembayaran')->nullable();
            $table->string('proposal')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('ideathons');
    }
}
