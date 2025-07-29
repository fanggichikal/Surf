@php
$defaultTypes = ['Private', 'Semi Private', 'Group'];

$lesson = $lesson ?? null;

$lessonPricesRaw = $lesson->lesson_prices ?? null;

if (is_array($lessonPricesRaw)) {
$decodedPrices = $lessonPricesRaw;
} elseif (is_string($lessonPricesRaw)) {
$decodedPrices = json_decode($lessonPricesRaw, true);
} else {
// Buat default 3 tipe
$decodedPrices = collect($defaultTypes)->map(fn($type) => ['type' => $type, 'price' => ''])->toArray();
}

$prices = old('lesson_prices', $decodedPrices);
@endphp

<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg space-y-6">
    {{-- Title --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $lesson->title ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror">
        @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Slug --}}
    <div>
        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
        <input
            type="text"
            name="slug"
            id="slug"
            value="{{ old('slug', $lesson->slug ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('slug') border-red-500 @enderror">
        @error('slug') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>
    {{--Category Lesson--}}
    <div class="mb-4">
        <label for="category_lesson_id" class="block text-gray-700 text-sm font-bold mb-2">Category Lesson:</label>
        <select name="category_lesson_id" id="category_lesson_id" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 ease-in-out @error('category_lesson_id') border-red-500 @enderror">
            <option value="">Select a Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_lesson_id', $lesson->category_lesson_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_lesson_id')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
    </div>

    {{-- Typeclass --}}
    <div>
        <label for="typeclass" class="block text-sm font-medium text-gray-700">Type Class</label>
        <input
            type="text"
            name="typeclass"
            id="typeclass"
            value="{{ old('typeclass', $lesson->typeclass ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('typeclass') border-red-500 @enderror">
        @error('typeclass') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>


    {{-- Descriptions --}}
    @foreach ([1,2,3] as $i)
    @php $field = "description_paragraph_$i"; @endphp
    <div>
        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">Paragraph {{ $i }}{{ $i == 1 ? '' : ' (Optional)' }}</label>
        <textarea
            name="{{ $field }}"
            id="{{ $field }}"
            rows="3"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error($field) border-red-500 @enderror"
            {{ $i === 1 ? 'required' : '' }}>{{ old($field, $lesson->$field ?? '') }}</textarea>
        @error($field) <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>
    @endforeach

    {{-- Image --}}
    <div>
        <label for="image_path" class="block text-sm font-medium text-gray-700">Lesson Image</label>
        <input
            type="file"
            name="image_path"
            id="image_path"
            class="mt-1 block w-full text-sm text-gray-600 border-gray-300 rounded-md shadow-sm file:bg-blue-50 file:text-blue-700 file:font-medium file:rounded-md file:border-0 file:px-4 file:py-2 hover:file:bg-blue-100">
        @error('image_path') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

        @if ($lesson && $lesson->image_path)
        <div class="mt-4">
            <p class="text-sm text-gray-600 mb-1">Current Image Preview:</p>
            <img src="{{ asset('storage/' . $lesson->image_path) }}" alt="Lesson Image" class="w-32 h-32 object-cover rounded shadow border">
        </div>
        @endif
    </div>

    {{-- Lesson Prices (3 Class Types) --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Lesson Prices (3 Class Types)</label>

        @foreach ($prices as $i => $price)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-50 p-4 border border-gray-200 rounded-md mb-2">
            <div>
                <input
                    type="text"
                    name="lesson_prices[{{ $i }}][type]"
                    value="{{ old("lesson_prices.$i.type", $price['type']) }}"
                    readonly
                    class="block w-full bg-gray-100 cursor-not-allowed rounded-md border-gray-300 shadow-sm">
            </div>

            <div>
                <input
                    type="number"
                    name="lesson_prices[{{ $i }}][price]"
                    value="{{ old("lesson_prices.$i.price", $price['price']) }}"
                    placeholder="e.g. 50000"
                    min="0"
                    step="0.01"
                    required
                    class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>