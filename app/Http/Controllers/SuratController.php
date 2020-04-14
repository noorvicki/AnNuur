<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Quran;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::all();
        return view('home/index', ['surat' => $surat]);
    }

    public function list(Request $request)
    {
        if ($request->has('s')) {
            $surat = Surat::where('surat', 'like', "%{$request->s}%")
                ->orWhere('arti', 'like', "%{$request->s}%")
                ->get();
        } else {
            $surat = Surat::all();
        }

        return view('quran.index', ['surat' => $surat]);
    }

    public function listJson(Request $request)
    {
        if (empty($request->s)) $request->s = "929312";

        $surat = Surat::where('surat', 'like', "%{$request->s}%")
            ->orWhere('arti', 'like', "%{$request->s}%")
            ->limit(5)
            ->get();

        return response()->json($surat);
    }

    public function show($id)
    {
        $quran = Quran::where('suraId', $id)->get();

        foreach ($quran as $s) {
            foreach ($s->Surat as $i) {
                $surat = $i->surat;
                break;
            }
            break;
        }
        return view('surat/index', ['quran' => $quran, 'surat' => $surat]);
    }
}
