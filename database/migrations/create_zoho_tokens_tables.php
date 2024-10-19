<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZohoTokensTables extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('zoho_tokens', function (Blueprint $table) {
      $table->id();
      $table->string('code')->unique()->default(config('zohoBooks.access_code'))->comment('Zoho access code');
      $table->string('access_token');
      $table->string('refresh_token');
      $table->unsignedSmallInteger('expires_in', false)->default(3600)->comment('Time in minutes - 1h');
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
    Schema::dropIfExists('zoho_tokens');
  }
}
