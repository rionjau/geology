<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // import the Request class
use App\news;
class pagesController extends Controller
{

    /**
    *
    * Method "index" handles the "Home" page requests
    *
    */

    public function index () // the method's signature
    {
        $news = news::all()->sortBy('created_at')->take('3');

        $archives = news::all()->sortByDesc('created_at')->take('3');

        return view('pages.index', compact('news', 'archives'));  // simply return the home page

    }


    /**
    *
    * Method "about" handles the "about-us" page requests
    * 
    */

    public function about () // thhe method's signature
    {
        $news = news::all()->sortBy('created_at')->take('3');

        $archives = news::all()->sortByDesc('created_at')->take('3');

        return view('pages.about', compact('news', 'archives')); // simply return the "about-us" page
    }


    /**
    *
    * Method "people" handles the "people" page request
    *
    */
    
    public function people ()
    {
        return view('pages.people'); // simply return the "people" page
    }


    /**
    *
    * Method "programs" handles the "programs" page request
    *
    */

    public function programs () // the method's signature
    {
        $news = news::all()->sortBy('created_at')->take('3');

        $archives = news::all()->sortByDesc('created_at')->take('3');

        return view('pages.programs', compact('news', 'archives')); // simply return the "programs" page 
    }


    /**
    *
    * Method "research" handles the "research" page request
    *
    */

    public function research () // the method's signature
    { 
        return view('pages.research'); // simply return the "research" page
    }


    /**
    *
    * Method "news" handles the "news" page request
    *
    */

    public function news ()
    {
        $news = news::all()->sortBy('created_at')->take('3');

        $archives = news::all()->sortByDesc('created_at')->take('3');

        return view('pages.news', compact('news', 'archives')); // simply return the "news" page
    }


    /**
    *
    * Method "facility" handles the "facilities" page request
    *
    */

    public function facility () // the method's signature
    {
        return view('pages.facility'); // simply return the "facilities" page
    }


    /**
    *
    * Method "event" handles the "events" page request
    *
    */

    public function event () // the  method's signature
    {
        return view ('pages.event'); // simply return the "events" page 
    }


}
