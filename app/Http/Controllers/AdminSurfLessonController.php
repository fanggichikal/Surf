<?php

namespace App\Http\Controllers;

use App\Models\SurfLesson;
use App\Models\CategoryLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminSurfLessonController extends Controller
{
    public function index()
    {
        $lessons = SurfLesson::latest()->get();
        return view('admin.surflessons.index', compact('lessons'));
    }

    public function create()
    {
        $categories = CategoryLesson::all();
        return view('admin.surflessons.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $this->validateData($request);

        if ($request->hasFile('image_path')) {
            $validatedData['image_path'] = $request->file('image_path')->store('surflessons', 'public');
        } else {
            $validatedData['image_path'] = null;
        }

        $validatedData['lesson_prices'] = $this->processLessonPrices($validatedData); // Helper for price processing

        $validatedData['slug'] = Str::slug($validatedData['title']);
        SurfLesson::create($validatedData);

        return redirect()->route('admin.surflessons.index')->with('success', 'Pelajaran selancar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $surfLesson = SurfLesson::findOrFail($id);
        $categories = CategoryLesson::all();
        return view('admin.surflessons.edit', compact('surfLesson', 'categories'));
    }

    public function update(Request $request, SurfLesson $surfLesson, $id)
    {

        $data = $this->validateData($request);

        // Handle image upload
        if ($request->hasFile('image_path')) {
            // Delete old image if exists
            if ($surfLesson->image_path) {
                Storage::disk('public')->delete($surfLesson->image_path);
            }

            $data['image_path'] = $request->file('image_path')->store('surflessons', 'public');
        } else {
            // Keep existing image if new one not uploaded
            $data['image_path'] = $surfLesson->image_path;
        }

        // Clean up lesson_prices
        if (!isset($data['lesson_prices']) || empty($data['lesson_prices'])) {
            $data['lesson_prices'] = null;
        } else {
            $filteredPrices = array_filter($data['lesson_prices'], function ($priceItem) {
                return !empty($priceItem['type']) || (isset($priceItem['price']) && $priceItem['price'] !== null && $priceItem['price'] !== '');
            });
            $data['lesson_prices'] = array_values($filteredPrices);
        }

        $data['slug'] = Str::slug($data['title']);

        // Update the record

        $surfLesson->update($data);
        SurfLesson::findOrfail($id)->update($data);

        return redirect()->route('admin.surflessons.index')->with('success', 'Pelajaran selancar berhasil diperbarui!');
    }

    public function show(string $id)
    {
        $surfLesson = SurfLesson::findOrFail($id);
        $surfLesson->load('categoryLesson');
        $categories = CategoryLesson::all();
        return view('admin.surflessons.show', compact('surfLesson', 'categories'));
    }

    public function destroy(string $id)
    {
        $surfLesson = SurfLesson::findOrFail($id);
        if ($surfLesson->image_path) {
            Storage::disk('public')->delete($surfLesson->image_path);
        }

        $surfLesson->delete();

        return redirect()->route('admin.surflessons.index')->with('success', 'Surf lesson deleted successfully.');
    }

    /**
     * Helper method to validate data for SurfLesson.
     * @param Request $request
     * @param int|null $id
     * @return array
     */
    protected function validateData(Request $request, $id = null): array
    {
        $uniqueSlugRule = 'unique:surf_lessons,slug';
        if ($id) {
            $uniqueSlugRule .= ',' . $id; // Exclude current ID for unique rule on update
        }

        return $request->validate([
            'title' => 'required|string|max:255',
            'slug' => "nullable|string|$uniqueSlugRule",
            'typeclass' => 'required|string|max:255',
            'description_paragraph_1' => 'required|string',
            'description_paragraph_2' => 'nullable|string',
            'description_paragraph_3' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // Added SVG for consistency
            'lesson_prices' => 'nullable|array',
            'lesson_prices.*.type' => 'nullable|string',
            'lesson_prices.*.price' => 'nullable|numeric|min:0',
            'category_lesson_id' => 'nullable|exists:category_lessons,id',
        ]);
    }

    /**
     * Helper method to process lesson prices.
     * @param array $data
     * @return string|null
     */
    protected function processLessonPrices(array $data): ?string
    {
        if (!isset($data['lesson_prices']) || empty($data['lesson_prices'])) {
            return null;
        }

        $filteredPrices = array_filter($data['lesson_prices'], function ($priceItem) {
            return !empty($priceItem['type']) || (isset($priceItem['price']) && $priceItem['price'] !== null && $priceItem['price'] !== '');
        });

        return json_encode(array_values($filteredPrices));
    }
}
