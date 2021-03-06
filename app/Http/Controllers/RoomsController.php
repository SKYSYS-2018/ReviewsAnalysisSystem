<?php

namespace App\Http\Controllers;

use App\Category;
use App\Review;

class RoomsController extends Controller
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
    public function index()
    {
        //Fetching Category Data
        $rooms = Review::where('category_id',1)->count();
        $services = Review::where('category_id',2)->count();
        $foods = Review::where('category_id',3)->count();
        $facilities = Review::where('category_id',4)->count();
        $categoryData = [$rooms,$services,$foods,$facilities];

        //  Fetching category object
        $category =Category::find(1);

        //Fetching Reviews Data
        $reviews = Review::with('user')->where('category_id',1)->get();

        return view('rooms', compact('categoryData','reviews','category'));
    }
}
