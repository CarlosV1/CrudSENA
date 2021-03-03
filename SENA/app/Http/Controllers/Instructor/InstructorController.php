<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;


class InstructorController extends Controller
{

    public function index(){
        $instructores=Instructor::all();
        return view('modules.Instructor.index',compact('instructores'));
    }

    public function create(){
        return view('modules.Instructor.create');
    }

    public function store(Request $request){
        $instructores=Instructor::create($request->all());
        return redirect()->route('Instructor.index');
    }

    public function show($id){
        $instructores=Instructor::find($id);
        return view('modules.Instructor.show', compact('instructores'));
    }

    public function edit($id){
        $instructores=Instructor::find($id);
        return view('modules.Instructor.edit', compact('instructores'));
    }
//_________________

    public function destroy($id){
        $instructores = Instructor::find($id)->delete();
        return redirect()->route('Instructor.index');
    }

    public function update(Request $request, $id){
        $instructores = Instructor::find($id)->update($request->all());
        return redirect()->route('Instructor.show', $id);
    }
}
