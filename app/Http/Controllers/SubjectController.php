<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function add(){
        $r=request(); 

        $addProduct=Product::create([
            'SubjectID'=>$r->subjectID,
            'name'=>$r->subjectName,
            'days'=>$r->subjectDays,
            'time'=>$r->subjectTime,
            'seats'=>$r->seats,
            'roomID'=>$r->roomID,
        ]);
        Session::flash('success',"Subject create successfully!");
        return redirect()->route('viewSubject');
    }

    public function view(){
        /* $viewProduct=Product::all(); */

        $viewSubject=DB::table('subject')
        ->leftjoin('subjects','subjects.id','=','subject.ClassroomID')
        ->select('subjects.*','classrooms.name as classroomID')
        ->get();

        return view('showSubject')->with('subjects',$viewSubject);
    }
}
