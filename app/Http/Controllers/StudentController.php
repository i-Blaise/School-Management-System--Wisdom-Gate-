<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Fetch all students from the database
        $students = Students::all();

        // Pass the data to the view
        return view('pages.students.all-student', compact('students'));
    }
}
