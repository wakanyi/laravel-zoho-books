<?php

namespace Sumer5020\ZohoBooks\Contracts;

/**
 * @method string createAccessToken() Create a new access token.
 * @method string refreshAccessToken(string $refreshToken) Refresh the access token using a refresh token.
 * @method bool revokeRefreshAccessToken(string $token, string $refreshToken) Revoke the refresh token.
 */
interface AuthenticationInterface
{
  /**
   * @return string The generated access token.
   */
  public function createAccessToken(): string;

  /**
   * @param string $refreshToken The refresh token used to generate a new access token.
   * 
   * @return string The newly generated access token.
   */
  public function refreshAccessToken(string $refreshToken): string;

  /**
   * @param string $token The current access token used for authorization.
   * @param string $refreshToken The refresh token to revoke.
   * 
   * @return bool True if the refresh token was successfully revoked and deleted, false otherwise.
   */
  public function revokeRefreshAccessToken(string $token, string $refreshToken): bool;
}
