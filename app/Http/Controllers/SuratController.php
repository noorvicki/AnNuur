<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Quran;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $surat = Surat::all();
    	return view('home/index', ['surat' => $surat]);
    }
    public function show($id){
        $quran = Quran::all()->where('suraId',$id);

        foreach($quran as $s){
            foreach($s->Surat as $i){
                $surat= $i->surat;
                break;
            }break;
        }
    	return view('surat/index', ['quran' => $quran,'surat' => $surat]);
    }
}
