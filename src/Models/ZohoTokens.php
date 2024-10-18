<?php

namespace Sumer5020\ZohoBooks\Models;

use Illuminate\Database\Eloquent\Model;

class ZohoTokens extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'token_title',
    'expires_in',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'access_token',
    'refresh_token',
  ];
}
