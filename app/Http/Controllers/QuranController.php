<?php

namespace App\Http\Controllers;

use App\Models\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index(){
        $quran = Quran::all();
    	return view('home/index', ['quran' => $quran]);
    }
}
