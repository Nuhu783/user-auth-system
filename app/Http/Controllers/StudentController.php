<?php

namespace App\Http\Controllers;
use App\User;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Illuminate\Support\Facades\Hash;
use App\Illuminate\Support\Facades\Input;



class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('meddy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students =Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        /*
        $student = new student ();
        $student ->name =$request->name;
        $student ->email = $request->email;
        $student ->dob = $request->dob;
        $student ->class = $request->class;
        $student -> save ();
        */
         $user = User::create([
            'name' => $request['name'],
            'userType' => $request['userType'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

      $user->student()->createMany(array([
            'subject' => $request['subject'],
            'faculty' => $request['faculty'],
            'dob' => $request['dob'],
            'class' => $request['class'],
            'phone' => $request['phone'],
        ]));

        return redirect ('/index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, $id)
    {
        //
         $student = Student::find($id);
        return view('student.show', compact('student'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}