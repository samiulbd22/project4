<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    protected $students;
    //protected $city;
    public function index()
    {
//        $this->name ='BITM';
//        $this->city ='Dhaka';
//        return view('all',['data'=>$this->name,
//            'rafa'=>$this->city
//        ]);
       // return view('all')->with('data',$this->name);
        /*
        return view('all')->with([
            'data'=>$this->name,
            'rafa'=>$this->city]);//multi data transfer
        */

//        $data ='BANGLA';
//        $data2 ='ENGLISH';
//        return view('all', compact('data','data2'));


//        $this->students = Student::getAllStudent();
//        return view('all',['students'=>$this->students]);
        $this->student =new Student();
        $this->student->newStudent();
        return'success';

    }
}
