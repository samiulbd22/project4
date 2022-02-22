<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;
    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riaz@gmail.com';
        $this->student->mobile = '2347890';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
             0=>[
                 'id'       =>1,
                 'name'     =>'Shahabuddin',
                 'email'    =>'shaha@gmail.com',
                 'mobile'   =>'12345',
                 'image'    =>'',
             ] ,
            1=>[
                'id'       =>2,
                'name'     =>'habuddin',
                'email'    =>'haha@gmail.com',
                'mobile'   =>'12345',
                'image'    =>'',
            ],
        2=>[
                'id'       =>3,
                'name'     =>'Shahadin',
                'email'    =>'shaa@gmail.com',
                'mobile'   =>'12345',
                'image'    =>'',
         ]
        ];
    }
}
