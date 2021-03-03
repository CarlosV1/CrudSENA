<?php

namespace App\Http\Controllers\Aprendices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aprendiz;


class AprendizController extends Controller
{

    public function index(){
        $aprendices=Aprendiz::all();
        return view('modules.Aprendiz.index',compact('aprendices'));
    }

    public function create(){
        return view('modules.Aprendiz.create');
    }

    public function store(Request $request){
        $aprendices=Aprendiz::create($request->all());
        return redirect()->route('Aprendiz.index');
    }

    public function show($id){
        $aprendices=Aprendiz::find($id);
        return view('modules.Aprendiz.show', compact('aprendices'));
    }

    public function edit($id){
        $aprendices=Aprendiz::find($id);
        return view('modules.Aprendiz.edit', compact('aprendices'));
    }
//_________________

    public function destroy($id){
        $aprendices = Aprendiz::find($id)->delete();
        return redirect()->route('Aprendiz.index');
    }

    public function update(Request $request, $id){
        $aprendices = Aprendiz::find($id)->update($request->all());
        return redirect()->route('Aprendiz.show', $id);
    }
}
