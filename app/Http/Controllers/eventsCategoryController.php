<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\eventCategory; // import the eventCategory model class

class eventsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = eventCategory::all(); // fetch all records from the news_category table

         return view('admin.category.eventsCategory.index', compact(['categories'])); // return the proper view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.category.eventsCategory.create'); // return the create category form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        
            'category_name'=>'required|string', ]);

        eventCategory::create($request->all()); // create a record from the request object

        return back()->with('Success', 'An event category created succesfully');

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
       $category = eventCategory::where('id', '=', $id)->first(); // fetch the record to be edited

       return view('admin.category.eventsCategory.edit', compact('category')); 
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
         $categoryToUpdate = eventCategory::where('id', '=', $id)->first();

           $categoryToUpdate->update($request->all());

          return redirect()->route('eventsCategory.index')->with('success','An event Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        eventCategory::find($id)->delete();

        return redirect()->route('eventsCategory.index')
                        ->with('success','News Category deleted successfully');
    }
}
