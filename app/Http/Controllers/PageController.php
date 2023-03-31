<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() {
  $trains = Train::all();
    return view('home', compact('trains'));
}

public function today() {
  $trains = Train::whereDate('data_partenza', today())->get();
    return view('trains_today', compact('trains'));
}
}