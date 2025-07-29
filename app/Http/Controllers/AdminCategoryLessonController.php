<?php

namespace App\Http\Controllers;

use App\Models\CategoryLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryLesson::all();
        return view('admin.categorylessons.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorylessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:category_lessons,name', // Added unique validation
        ]);

        $validated['slug'] = Str::slug($validated['name']);

        CategoryLesson::create($validated);

        return redirect()->route('admin.categorylessons.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoryLesson = CategoryLesson::findOrFail($id);
        return view('admin.categorylessons.show', compact('categoryLesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoryLesson = CategoryLesson::findOrFail($id);
        return view('admin.categorylessons.edit', compact('categoryLesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryLesson $categoryLesson, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        CategoryLesson::findOrfail($id)->update($validated);
        $categoryLesson->update($validated);

        return redirect()->route('admin.categorylessons.index')->with('success', 'Category updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoryLesson = CategoryLesson::findOrFail($id);

        $categoryLesson->delete();

        return redirect()->route('admin.categorylessons.index')->with('success', 'Category deleted successfully.');
    }
}
