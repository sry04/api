<?php

namespace App\Http\Controllers\v1;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::with(['token', 'token.expiredToken'])->get();
    }
}
