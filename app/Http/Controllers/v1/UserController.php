<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::with(['token', 'token.expiredToken'])->get();
    }
    public function store(Request $request, User $user)
    {
      $data = [
        'name' => $request->name
      ];

      $user = $user->create($data);
      return $user;
    }
    public function update(Request $request, $id)
    {
      $data = User::find($id);
      $data->name = $request->name;
      $data->save();
      return $data;
    }
    public function delete($id)
    {
      $data = User::find($id);
      $data->delete();
      return $data;
    }
    public function read($id)
    {
      $data = User::with(['token', 'token.expiredToken'])->whereId($id)->get();
      return $data;
    }
}
