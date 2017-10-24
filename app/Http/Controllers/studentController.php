<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\postgraduateStudent;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = postgraduateStudent::all(); // fetch all the staff records

        return view ('admin.student.index', compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.student.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
        
        $this->validate($request,[
        
            'first_name'=>'required|string',
        
            'last_name'=>'required|string',
        
            'level'=>'required|string',
        
            'degree_program'=>'required|string',
        
            'working_area'=>'required|string',
        
            'project' => 'required|string|max:255',
        
            'abstract' => 'required|string|max:255',]);

        postgraduateStudent::create($formInput);
        
        return back()->with('success', 'Student is successfully added!');

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
       $student = postgraduateStudent::where('id', '=', $id)->first();

        return view('admin.student.edit', compact('student'));
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
        
           $studentToUpdate = postgraduateStudent::where('id', '=', $id)->first();

           $studentToUpdate->update($request->all());

          return redirect()->route('student.index')->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        postgraduateStudent::find($id)->delete();

        return redirect()->route('student.index')->with('success','Student deleted successfully');
    }
}
