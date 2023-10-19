<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Models\Students;
class studentController extends Controller
{
   

    public function showInput()
    {
        return view("stud_create");
    }
    public function inputForm(Request $request)
    {
try {
$student = new Students;
    $student->first_name = $request->input('first_name');
    $student->last_name = $request->input('last_name');
    $student->city_name = $request->input('city_name');
    $student->email = $request->input('email');
   $student->save();


    echo "Record has sucessfully been stored. <br>";
    echo "<a href='/list'>Click me</a> to pull back.";

}catch(\Exception $e) {
\Log::error($e->getMessage());
return $e->getMessage();
}
}
public function showStudents()
{
    $students = DB::table("student_details")->get();

    return view('stud_list', ['students' => $students]);
}
}
