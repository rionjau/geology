<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // import the request class

use App\eventCategory; // import the newCategory class

use App\event; // import the news class

use App\eCategory; // import the nCategory class 

class eventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = eventCategory::pluck('category_name', 'id'); // fetch all record from the new_category table

        return view('admin.events.create', compact(['category'])); // return required view with the required data
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $formInput = $request->except(['image', 'categoryId']);

        $this->validate($request,[
        
            'title'=>'required|string',
                
            'details'=>'required|string',

            'date' => 'required',
        
            'categoryId'=>'required|integer',

            'image' =>'image|mimes:png,jpg,jpeg|max:1000']);
        
        //       image upload
        
        $Image = $request->image;
        
        if($Image)
        {
        
            $imageName = $Image->getClientOriginalName();
            
            $Image->move('EventsImages',$imageName);
            
            $formInput['image'] = $imageName;
        
        }

        $newInstance = event::create($formInput); // create a news instance 

        $category = eventCategory::where('id', '=', $request->categoryId)->first(); //fetch a category name

       // creating an event_categories instance for relationship's purposes

        $new = new eCategory; // new instance

        $new->event_id = $newInstance->id; // set the news_id column

        $new->eventCategory_id = $category->id; // set the newsCategory_id column 

        $new->save(); // save the newly created instance

        return back()->with('success', 'Event successfully added!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
