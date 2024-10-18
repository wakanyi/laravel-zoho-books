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
      $table->string('token_title');
      $table->string('access_token');
      $table->string('refresh_token');
      $table->unsignedSmallInteger('expires_in', false)->nullable()->comment('Time in minutes');
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
