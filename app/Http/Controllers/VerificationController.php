<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerificationController extends Controller
{
    public function verify($token)
    {
      $user = User::where('remember_token',$token)->first();
      $user->status = 1;
      $user->remember_token = NULL;
      $user->save();
      return redirect('login');
    }
}
