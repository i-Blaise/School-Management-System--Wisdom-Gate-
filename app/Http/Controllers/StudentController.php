<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddStudentRequest;
use App\Models\Students;
use Carbon\Carbon;
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

        $todays_date = Carbon::today();
        dd($validatedData);

        if(!is_null($request->file('student_image')))
        {
            $imagePath = $this->uploadImage($request->file('student_image'));
        }

        // if(!is_null($request->file('image')))
        // {
        //     $imagePath = $this->uploadImage($request->file('image'));
        // }

        $index_number = 'WGS-'.mt_rand(1000, 9999);

        Students::create([
            'index' => $index_number,
            'first_name' => $validatedData['first_name'],
            'other_name' => $validatedData['other_name'],
            'last_name' => $validatedData['last_name'],
            'class' => $validatedData['class'],
            'class_index' => 'CLASS INDEX NUMBER', //Create class table and index number for each class. Then Insert the corresponding class index here // for testing purposes I will have a default value here
            'student_image' => $imagePath,
            'date_of_admission' => !is_null($validatedData['date_of_admission']) ? $validatedData['date_of_admission'] : $todays_date->toDateString(),
            'date_of_birth' => $validatedData['date_of_birth'],
            'home_town' => $validatedData['home_town'],
            'nationality' => $validatedData['nationality'],
            'gender' => $validatedData['gender'],
            'residence_address' => $validatedData['residence_address'],
            'num_of_siblings' => $validatedData['num_of_siblings'],
            'living_with_both_parents' => $validatedData['living_with_both_parents'],
            'why_not_living_w_both_parents' => $validatedData['why_not_living_w_both_parents'],
            'language1' => $validatedData['language1'],
            'language2' => $validatedData['language2'],
        ]);
    }
}
