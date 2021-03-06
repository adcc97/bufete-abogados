<?php

namespace App\Http\Controllers;
use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(){
        $cases = Cases::latest()->get();

        return view('cases.index',[
            'cases' => $cases
        ]);

    }

    public function store(Request $request){
        Cases::create([
            'name' => $request->name,
            'estado' => $request->estado
        ]);
    }

    public function destroy(Cases $cases){
        $cases->delete();
        return back();

    }
}
