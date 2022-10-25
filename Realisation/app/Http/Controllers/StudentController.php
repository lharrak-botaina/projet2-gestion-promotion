<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =Student::all();
        return view('promotion.edit')->with([
            "students" => $students
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($token)
    {

        return view("studentFolder.create",compact('token'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $students = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'promotion_token'=>$request->promotion_token,
        ]);
        return redirect()->route('promotion.edit',[$request->promotion_token])->with('success','Student created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit =Student::findOrFail($id);
        return view('studentFolder.edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Student::findOrFail($id);

        $update->first_name=$request->get('first_name');
        $update->last_name=$request->get('last_name');
        $update->email=$request->get('email');
        $update->save();

        return redirect()->route('promotion.edit',$update->promotion_token)->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete =Student::findOrFail($id);
        $delete->delete();
        return redirect()->route('promotion.edit',$delete->promotion_token)->with('success','Student deleted successfully');
    }
}
