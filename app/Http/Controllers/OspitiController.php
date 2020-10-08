<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;
class OspitiController extends Controller
{
  public function index() {
    $ospiti = Ospiti::all();
    dd($ospiti);
    return view('welcome', compact('ospiti'));

  }
}
