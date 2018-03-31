<?php

namespace App\Http\Controllers\Ketua;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  public function index(){
    $title = 'SI Manajemen UKM BOSS';
    return view('ketua.dashboard', compact('title'));
  }
}
