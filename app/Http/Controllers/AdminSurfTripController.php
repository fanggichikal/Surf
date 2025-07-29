<?php

namespace App\Http\Controllers;

use App\Models\CategoryIsland;
use App\Models\SurfTrips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminSurfTripController extends Controller
{
    public function index()
    {
        $trips = SurfTrips::latest()->with('categoryIsland')->get();
        return view('admin.surftrips.index', compact('trips'));
    }

    public function create()
    {
        $categories = CategoryIsland::all();
        return view('admin.surftrips.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'bodycontent' => 'required|string|min:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'category_island_id' => 'required|exists:category_islands,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('surftrips', 'public');
        }

        SurfTrips::create($validated);

        return redirect()->route('admin.surftrips.index')->with('success', 'Surf Trip created!');
    }

    public function show(string $id)
    {
        $surftrip = SurfTrips::with('categoryIsland')->findOrFail($id);
        return view('admin.surftrips.show', compact('surftrip'));
    }

    public function edit(string $id)
    {
        $surftrip = SurfTrips::findOrFail($id);
        $categories = CategoryIsland::all();
        return view('admin.surftrips.edit', compact('surftrip', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $surftrip = SurfTrips::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'bodycontent' => 'required|string|min:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'category_island_id' => 'required|exists:category_islands,id',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('image')) {
            if ($surftrip->image) {
                Storage::disk('public')->delete($surftrip->image);
            }
            $validated['image'] = $request->file('image')->store('surftrips', 'public');
        }

        $surftrip->update($validated);

        return redirect()->route('admin.surftrips.index')->with('success', 'Surf Trip updated!');
    }

    public function destroy(SurfTrips $surftrip)
    {
        if ($surftrip->image) {
            Storage::disk('public')->delete($surftrip->image);
        }

        $surftrip->delete();

        return redirect()->route('admin.surftrips.index')->with('success', 'Surf Trip deleted!');
    }
}
