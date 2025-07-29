<?php

namespace App\Http\Controllers;

use App\Models\CategoryIsland;
use App\Models\SurfTrips;
use Illuminate\Http\Request;

class SurfTripsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = SurfTrips::latest()->with('categoryIsland')->get();
        return view('frontend.Surftrippage.surftrip', compact('trips'));
    }
    public function show($slug)
    {
        $trip = SurfTrips::where('slug', $slug)->firstOrFail();
        return view('frontend.Surftrippage.surftripshow', compact('trip'));
    }

    public function categoryisland()
    {
        return $this->belongsTo(CategoryIsland::class, 'category_lesson_id');
    }

    public function byCategory($slug)
    {
        $category = CategoryIsland::where('slug', $slug)->firstOrFail();
        $trips = SurfTrips::where('category_island_id', $category->id)->latest()->get();
        return view('frontend.Surftrippage.by-category', compact('category', 'trips'));
    }
}
