<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
       $this->usuario = new User(); 
    }

    public function index()
    {
      return view('users', ['users'=>$this->usuario->all()]);
    }
}
