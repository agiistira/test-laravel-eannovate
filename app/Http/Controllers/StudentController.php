<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    public function index(){
        $data = Student::paginate(10);
        return view('students',compact('data'));
    }

    public function createdata(){
        return view('createdata');
    }

    public function insertdata(Request $request){
        Student::create($request->all());
        return redirect()->route('student')->with('success','Data Create Succesfully !');
    }

    public function showdata($id){
        $data = Student::find($id);

        return view('showdata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Student::find($id);
        $data->update($request->all());
        return redirect()->route('student')->with('success','Data Update Succesfully !');
    }

    public function delete($id){
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('student')->with('success','Data Deleted !');
    }
}