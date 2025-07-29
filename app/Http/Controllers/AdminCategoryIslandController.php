<?php

namespace App\Http\Controllers;

use App\Models\CategoryIsland;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminCategoryIslandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryIsland::all();
        return view('admin.categoryislands.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categoryislands.create');
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

        CategoryIsland::create($validated);

        return redirect()->route('admin.categoryislands.index')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoryIsland = CategoryIsland::with('surfTrips')->findOrFail($id);
        return view('admin.categoryislands.show', compact('categoryIsland'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoryIsland = CategoryIsland::findOrFail($id);
        return view('admin.categoryislands.edit', compact('categoryIsland'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryIsland $categoryIsland, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        CategoryIsland::findOrfail($id)->update($validated);
        $categoryIsland->update($validated);

        return redirect()->route('admin.categoryislands.index')->with('success', 'Category updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoryIsland = CategoryIsland::findOrFail($id);
        $categoryIsland->delete();

        return redirect()->route('admin.categoryislands.index')->with('success', 'Category deleted successfully.');
    }
}
