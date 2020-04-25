<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
  public function up()
  {
    Schema::create('agents', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('telp',15)->nullable();
      $table->boolean('jenis_kelamin')->nullable();
      $table->date('tanggal_lahir')->nullable();
      $table->text('alamat_lengkap')->nullable();
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('agents');
  }
}
