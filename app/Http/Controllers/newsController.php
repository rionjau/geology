<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // import the request class

use App\newsCategory; // import the newCategory class

use App\news; // import the news class

use App\nCategory; // import the nCategory class 

class newsController extends Controller
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
        $category = newsCategory::pluck('category_name', 'id'); // fetch all record from the new_category table

        return view('admin.news.create', compact(['category'])); // return required view with the required data
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
        
            'link'=>'string|nullable',
        
            'details'=>'required|string',
        
            'categoryId'=>'required|integer',

            'image' =>'image|mimes:png,jpg,jpeg|max:1000']);
        
        //       image upload
        
        $Image = $request->image;
        
        if($Image)
        {
        
            $imageName = $Image->getClientOriginalName();
            
            $Image->move('NewsImages',$imageName);
            
            $formInput['image'] = $imageName;
        
        }

        $newInstance = news::create($formInput); // create a news instance 

        $category = newsCategory::where('id', '=', $request->categoryId)->first(); //fetch a category name

       // creating a news_categories instance for relationship's purposes

        $new = new nCategory; // new instance

        $new->news_id = $newInstance->id; // set the news_id column

        $new->newsCategory_id = $category->id; // set the newsCategory_id column 

        $new->save(); // save the newly created instance

        return back()->with('success', 'News successfully added!');
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

    public function newsDetails($id)
    {
        $new = news::find($id)->first();

        $news = news::all()->sortBy('created_at')->take('3');

        $archives = news::all()->sortByDesc('created_at')->take('3');

        return view('pages/newsDetails', compact('new', 'news', 'archives'));
    }
}
