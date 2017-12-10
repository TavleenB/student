<?php

namespace App\Http\Controllers;

use Validator;
use Response;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function saveStudent(Request $request) {
        $validatedData = $request->validate([
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'email' => 'required|email|unique:signups,email|max:100',
        ]);

        //Store it in the databaswe
        $student = Student::create($validatedData);

         return $student;
    }
}