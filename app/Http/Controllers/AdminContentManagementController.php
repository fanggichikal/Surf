<?php

namespace App\Http\Controllers;

use App\Models\ContentManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminContentManagementController extends Controller
{
    public function index()
    {
        $contents = ContentManagement::latest()->paginate(10); // Ambil 10 per halaman, terbaru di atas
        return view('admin.contentmanagement.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.contentmanagement.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_name' => 'required|string|max:255|unique:content_management,section_name',
            'title' => 'nullable|string|max:255',
            'content_body' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048', // Untuk upload file gambar
        ]);

        $imagePath = null;
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('content_images', 'public');
        }

        ContentManagement::create([
            'section_name' => $request->section_name,
            'title' => $request->title,
            'content_body' => $request->content_body,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.contentmanagement.index')
            ->with('success', 'Content created successfully.');
    }


    public function show(string $id)
    {
        $contentManagement = ContentManagement::findOrFail($id);
        return view('admin.contentmanagement.show', compact('contentManagement'));
    }

    public function edit(string $id)
    {
        $contentManagement = ContentManagement::findOrFail($id);
        return view('admin.contentmanagement.edit', compact('contentManagement'));
    }

    public function update(Request $request, $id)
    {

        $contentManagement = ContentManagement::findOrFail($id);

        $validated = $request->validate([
            'section_name' => 'required|string|max:255|unique:content_management,section_name,' . $id,
            'title' => 'nullable|string|max:255',
            'content_body' => 'nullable|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        $imagePath = $contentManagement->image_path;

        if ($request->hasFile('image_file')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = $request->file('image_file')->store('content_images', 'public');
        } elseif ($request->boolean('remove_image')) {
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            $imagePath = null;
        }

        $validated['image_path'] = $imagePath;

        $contentManagement->update($validated);


        return redirect()->route('admin.contentmanagement.index')
            ->with('success', 'Content updated successfully.');
    }

    public function destroy(string $id)
    {

        $contentManagement = ContentManagement::findOrFail($id);

        if ($contentManagement->image_path) {
            Storage::disk('public')->delete($contentManagement->image_path);
        }
        $contentManagement->delete();

        return redirect()->route('admin.contentmanagement.index')
            ->with('success', 'Content deleted successfully.');
    }
}
