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
    'code',
    'access_token',
    'refresh_token',
    'expires_in',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'code',
    'access_token',
    'refresh_token',
  ];
}
