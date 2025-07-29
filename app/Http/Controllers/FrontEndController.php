<?php

namespace App\Http\Controllers;

use App\Models\CategoryIsland;
use App\Models\ContentManagement;
use App\Models\Review;
use App\Models\SurfLesson;
use App\Models\SurfTrips;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $trips = SurfTrips::with('categoryIsland')
            ->get()
            ->groupBy('category_island_id')
            ->take(3)
            ->map(function ($group) {
                return $group->first();
            });

        $surfLessons = SurfLesson::take(2)->get();
        $quoteContent = ContentManagement::where('section_name', 'quote')->first();
        $aboutContent = ContentManagement::where('section_name', 'about')->first();
        $reviews = Review::latest()->take(10)->get(); // ambil 10 ulasan terbaru
        // Tambahkan ini untuk menghindari error
        $categoryIslands = CategoryIsland::take(3)->get();

        return view('frontend.homepage.home', compact('surfLessons', 'quoteContent', 'aboutContent', 'trips', 'categoryIslands', 'reviews'));
    }


    public function contact()
    {
        return view('frontend.homepage.contact', []);
    }

    public function termsconditions()
    {
        return view('frontend.homepage.termsconditions', []);
    }

    public function privacypolicy()
    {
        return view('frontend.homepage.privacypolicy', []);
    }

    public function showSection($sectionName)
    {
        $content = ContentManagement::where('section_name', $sectionName)->first();

        if (!$content) {

            abort(404, 'Content for this section not found.');
        }
        return view('frontend.homepage.about', compact('content'));
    }
}
