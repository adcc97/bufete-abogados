<?php

namespace App\Http\Controllers;
use App\Models\Lawyers;
use Illuminate\Http\Request;

class LawyersController extends Controller
{
    public function index(){
        $lawyers = Lawyers::latest()->get();

        return view('lawyers.index',[
            'lawyers' => $lawyers
        ]);

    }

    public function store(Request $request){
        Lawyers::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono
        ]);
    }

    public function destroy(Cases $cases){
        $lawyers->delete();
        return back();

    }
}
