<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryIsland;
use App\Models\CategoryLesson;
use App\Models\Review;
use App\Models\SurfLesson;
use App\Models\SurfTrips;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $totalSurfLessons = SurfLesson::count();
        $totalSurfTrips = SurfTrips::count();
        $totalReviews = Review::count();
        $totalCategories = CategoryLesson::count();
        $totalCategoriesIsland = CategoryIsland::count(); // Misalnya hanya punya satu model kategori

        return view('admin.dashboard.index', compact(
            'totalSurfLessons',
            'totalSurfTrips',
            'totalReviews',
            'totalCategories',
            'totalCategoriesIsland'
        ));
    }
}
