<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function add(){
        $r=request(); 
        $addClassroom=Classroom::create([
            'name'=>$r->classroomName,
        ]);
        return redirect()->route('viewClassroom');
    }


    public function view(){
        $viewClassroom=Classroom::all(); 
        return view('showClassroom')->with('classroom',$viewClassroom);
    }
}
