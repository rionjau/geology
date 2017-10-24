<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\staffCategory;

use App\staff;

use App\sCategory;

class staffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = staff::all(); // fetch all the staff records

        return view ('admin.staff.index', compact(['staff'])); // return the desired view with the staff data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = staffCategory::pluck('category', 'id');

        return view('admin.staff.create', compact('category'));
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
        
            'title'=>'required|string',
        
            'office_contact'=>'required|string',
        
            'mobile_contact'=>'required|string',
        
            'university_email' => 'required|email|string|max:255',
        
            'personal_email' => 'required|email|string|max:255', 

            'category' => 'required|integer',

            'image'=>'image|mimes:png,jpg,jpeg|max:1000']);
        
        //       image upload
        
        $Image = $request->image;
        
        if($Image)
        {
        
            $imageName = $Image->getClientOriginalName();
            
            $Image->move('staffImages',$imageName);
            
            $formInput['image'] = $imageName;
        
        }

        $categoryId = $request->category;

        unset($formInput['category']);

        $newStaff = staff::create($formInput);
        
       //  create a new instance of sCategory 

        $new  = new sCategory;

        $new->user_id = $newStaff->id;

        $new->staffCategory_id = $categoryId;

        $new->save();

        return back()->with('success', 'Staff is successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $staff = User::where('id', '=', $id)->first();

        return view('admin.staff.edit', compact('staff'));
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

           $staffToUpdate = User::where('id', '=', $id)->first();

           $staffToUpdate->update($request->all());

           $staffToUpdate->image = basename($request->image).PHP_EOL;

           $staffToUpdate->save();

          return redirect()->route('staff.index')->with('success','Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('staff.index')
                        ->with('success','Staff deleted successfully');
    }

}

