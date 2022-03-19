<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');

    }

    public function store(Request $request)
    {

        $student = new Student;

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/', $filename);
            $student->profile_image = $filename;
        }

        $student->save();

        return redirect()->back()->with('status', 'student added successfuly');
        

    }


    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));

    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        
        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/students/'.$student->profile_image;
            if(File::exists($destination )){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/', $filename);
            $student->profile_image = $filename;
        }

        $student->update();

        return redirect()->back()->with('status', 'student Updated successfuly');

    }

    public function destroy($id)
    {
        $student = Student::find($id);

        $destination = 'uploads/students/'.$student->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');

    }
}
