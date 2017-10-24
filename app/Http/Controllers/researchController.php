<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // import the Request class

use App\researchProgram; // import the researchProgram model

use App\facility; // import the facility model

use App\researchCenter;  // import the researchCenter model

class researchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchs = researchProgram::all(); // fetch all the records

        return view ('admin.research.index', compact(['researchs']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.research.create');

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
        
            'name'=>'required|string',
        
            'sponsors'=>'required|string',
        
            'duration'=>'required|string',
        
            'investigators'=>'required|string',
        
            'major_output'=>'required|string',]);
    

        researchProgram::create($request->all());
        
        return back()->with('success', 'Research Program is successfully added!');
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
        $research = researchProgram::where('id', '=', $id)->first();

        return view('admin.research.edit', compact('research'));
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
           $researchToUpdate = researchProgram::where('id', '=', $id)->first();

           $researchToUpdate->update($request->all());

          return redirect()->route('research.index')->with('success','Research Program updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        researchProgram::find($id)->delete();

        return redirect()->route('research.index')
                        ->with('success','Research Program deleted successfully');
    }

    public function centerIndex ()
    {

        $centers = researchCenter::all(); 

        return view ('admin.research.centerIndex', compact(['centers']));
    }

    public function createCenter ()
    {
        return view ('admin.research.createCenter'); 
    }

    public function storeCenter (Request $request)
    {
        
        $this->validate($request,[
        
            'name'=>'required|string',
        
            'location'=>'required|string',]);

        researchCenter::create($request->all());
        
        return back()->with('success', 'Research Center is successfully added!');
    }

    public function facilityIndex ()
    {

        $facilities = facility::all(); 

        return view ('admin.research.facilityIndex', compact(['facilities']));
    }

    public function createFacility ()
    {
        return view ('admin.research.createFacility'); 
    }

    public function storeFacility (Request $request)
    {
        
        $this->validate($request,[
        
            'name'=>'required|string', ]);

        facility::create($request->all());
        
        return back()->with('success', 'Facility is successfully added!');
    }

}
