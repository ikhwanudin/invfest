<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tim', 100)->unique()->nullable();
            $table->string('asal_sekolah', 100)->nullable();
            $table->string('pendamping', 100)->nullable();
            $table->string('ketua_tim', 100);
            $table->date('tanggal_lahir')->nullable();
            $table->string('anggota_1', 100)->nullable();
            $table->date('tanggal_lahir_1')->nullable();
            $table->string('anggota_2', 100)->nullable();
            $table->date('tanggal_lahir_2')->nullable();
            $table->enum('kategori', ['ctf', 'prog', 'web', 'andro', 'design']);
            $table->enum('status', ['unknown', 'pending', 'verified'])->default('unknown');
            $table->string('email')->unique();
            $table->string('password');
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
}
