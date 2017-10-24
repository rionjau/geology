<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\newsCategory; // import the newsCategory model class

class newsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = newsCategory::all(); // fetch all records from the news_category table

         return view('admin.category.newsCategory.index', compact(['categories'])); // return the proper view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.category.newsCategory.create'); // return the create category form
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

        newsCategory::create($request->all()); // create a record from the request object

        return back()->with('Success', 'A news category created succesfully');

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
       $category = newsCategory::where('id', '=', $id)->first(); // fetch the record to be edited

       return view('admin.category.newsCategory.edit', compact('category')); 
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
         $categoryToUpdate = newsCategory::where('id', '=', $id)->first();

           $categoryToUpdate->update($request->all());

          return redirect()->route('newsCategory.index')->with('success','News Catgeory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        newsCategory::find($id)->delete();

        return redirect()->route('newsCategory.index')
                        ->with('success','News Category deleted successfully');
    }
}
