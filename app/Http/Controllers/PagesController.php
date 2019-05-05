<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';
        return view('pages.index')->with('title', $title);
        #return view('pages.index', compact('title'));
        #view('pages.index')
    }
    
    public function about()
    {
        $title = 'Welcome to Laravel';
        return view('pages.about')->with('title', $title);
        #return view('pages.about');
    }
    public function services(){

        
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Graphics Design']

        );
        return view('pages.services')->with($data);
        #return view('pages.services');
    }

}