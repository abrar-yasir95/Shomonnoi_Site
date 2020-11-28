<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Division;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//        return view('home');
//    }

    public function index()
    {
        $divisions = Division::all();
        $blog = Blog::all();
        return view('index')
            ->with('divisions', $divisions)
            ->with('blog', $blog);
    }
}
