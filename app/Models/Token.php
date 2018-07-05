<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;
use App\Models\ExpiredToken;

class Token extends Model
{



    protected $table = 'token';

    protected $guarded= [];

    public function expiredToken()
    {
      return $this->hasOne(ExpiredToken::class, 'token');
    }
}




 ?>
