<?php

namespace App\Http\Controllers;

use App\Models\CategoryLesson;
use App\Models\SurfLesson;
use Illuminate\Http\Request;

class SurfLessonController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel surf_lessons
        $surfLessons = SurfLesson::all();

        // Kirim ke view
        return view('frontend.surflessonpage.surflesson', compact('surfLessons'));
    }

    public function show($slug)
    {
        // Ambil data berdasarkan slug
        $surfLesson = SurfLesson::where('slug', $slug)->firstOrFail();

        return view('frontend.surflessonpage.surflessonshow', compact('surfLesson'));
    }

    public function kategoriLesson()
    {
        return $this->belongsTo(CategoryLesson::class, 'category_lesson_id');
    }
}
