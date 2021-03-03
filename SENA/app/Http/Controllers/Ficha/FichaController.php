<?php

namespace App\Http\Controllers\Ficha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ficha;

class FichaController extends Controller
{
    public function index(){
        $fichas=Ficha::all();
        return view('modules.ficha.index',compact('fichas'));
    }

    public function create(){
        return view('modules.ficha.create');
    }

    public function store(Request $request){
        $fichas=Ficha::create($request->all());
        return redirect()->route('ficha.index');
    }

    public function show($id){
        $fichas=Ficha::find($id);
        return view('modules.ficha.show', compact('fichas'));
    }

    public function edit($id){
        $fichas=Ficha::find($id);
        return view('modules.ficha.edit', compact('fichas'));
    }


    public function destroy($id){
        $fichas = Ficha::find($id)->delete();
        return redirect()->route('ficha.index');
    }

    public function update(Request $request, $id){
        $fichas = Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.show', $id);
    }
}
