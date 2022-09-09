<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quadra;


class QuadrasController extends Controller
{
    public function __construct()
    {
       $this->quadra = new Quadra(); 
    }
 
    public function index()
    {
      return view('quadras', ['quadras'=>$this->quadra->all()]);
    }
}
