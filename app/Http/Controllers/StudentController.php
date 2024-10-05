<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddStudentRequest;
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

    public function uploadImage($imageFile): string
    { //Move Uploaded File to public folder
        $destinationPath = 'images/uploads/student-image/';
        $hashed_image_name = $imageFile->hashName();
        $img_path = $destinationPath.$hashed_image_name;
        $imageFile->move(public_path($destinationPath), $hashed_image_name);

        return $img_path;
    }

    public function addNewStudent(AddStudentRequest $request)
    {
        // dd($request);
        $validatedData = $request->validated();
        dd($validatedData);

        if(!is_null($request->file('image')))
        {
            $imagePath = $this->uploadImage($request->file('image'));
        }

        $index_number = 'WGS-'.mt_rand(1000, 9999);

        Students::create([
            'index' => $index_number,
            'first_name' => $validatedData['first_name'],
            'other_name' => $validatedData['other_name'],
            'last_name' => $validatedData['last_name'],
            'class' => $validatedData['class'],
            'class_index' => $index_number, //Create class table and index number for wach class. Then Insert the corresponding class index here
            'date_of_admission' => $validatedData['date_of_admission'],
            'student_image' => $validatedData['first_name'],
            'first_name' => $validatedData['first_name'],
        ]);
    }
}
