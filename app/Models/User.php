<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;
use App\Models\Token;

class User extends Model
{


    protected $table = 'user';

    protected $guarded= [];

  public function token()
  {
    return $this->hasOne(Token::class, 'user');
  }
}




 ?>
