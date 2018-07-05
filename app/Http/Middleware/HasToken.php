<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Token;

/**
 *
 */
class HasToken
{

  public function handle($request, Closure $next)
  {
    $token = $this->token($request);

    if ($token && !!Token::whereToken($token)->exists()) {
      return $next($request);
    }
    return response([
      'status'  =>  false,
      'massage' =>  'Token Not Valid',
    ], 401);
  }

  public function token($request)
  {
    return $request->header('token', $request->has('token') ? $request->token : false);
  }
}


 ?>
