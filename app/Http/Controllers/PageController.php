<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() {
  $trains = Train::whereDate('data_partenza', today())->get();
    return view('home', compact('trains'));
}
}