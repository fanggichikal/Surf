<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'title'   => 'nullable|string|max:255',
            'message' => 'required|string',
            'rating'  => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());

        return redirect()->route('admin.reviews.index')->with('success', 'Review submitted!');
    }

    public function show(Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'title'   => 'nullable|string|max:255',
            'message' => 'required|string',
            'rating'  => 'required|integer|min:1|max:5',
        ]);

        $review->update($request->all());

        return redirect()->route('admin.reviews.index')->with('success', 'Review updated!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted!');
    }

    public function frontendCreate()
    {
        return view('frontend.Reviewpage.create');
    }

    public function frontendStore(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'title'   => 'nullable|string|max:255',
            'message' => 'required|string',
            'rating'  => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'name'        => $request->name,
            'title'       => $request->title,
            'message'     => $request->message,
            'rating'      => $request->rating,
            'is_featured' => false, // default: tidak featured
        ]);

        return redirect()->route('frontend.home')->with('success', 'Thank you for your review!');
    }
}
