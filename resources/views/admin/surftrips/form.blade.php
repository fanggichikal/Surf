@csrf

<div class="space-y-6">

    {{-- Title --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title"
            value="{{ old('title', $surftrip->title ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror">
        @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Slug --}}
    <div>
        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
        <input type="text" name="slug" id="slug"
            value="{{ old('slug', $surftrip->slug ?? '') }}"
            readonly
            class="mt-1 block w-full bg-gray-100 text-gray-600 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('slug') border-red-500 @enderror">
        @error('slug') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Category Island --}}
    <div>
        <label for="category_island_id" class="block text-sm font-medium text-gray-700">Category Island</label>
        <select name="category_island_id" id="category_island_id" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('category_island_id') border-red-500 @enderror">
            <option value="">-- Select Category --</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_island_id', $surftrip->category_island_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_island_id') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Body Content --}}
    <div>
        <label for="bodycontent" class="block text-sm font-medium text-gray-700">Body Content</label>
        <textarea name="bodycontent" id="bodycontent" rows="6"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('bodycontent') border-red-500 @enderror"
            required>{{ old('bodycontent', $surftrip->bodycontent ?? '') }}</textarea>
        @error('bodycontent') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Image --}}
    <div>
        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
        <input type="file" name="image" id="image"
            class="mt-1 block w-full text-sm text-gray-600 border-gray-300 rounded-md shadow-sm file:bg-blue-50 file:text-blue-700 file:font-medium file:rounded-md file:border-0 file:px-4 file:py-2 hover:file:bg-blue-100">
        @error('image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

        @if (!empty($surftrip) && $surftrip->image)
        <div class="mt-4">
            <p class="text-sm text-gray-600 mb-1">Current Image Preview:</p>
            <img src="{{ asset('storage/' . $surftrip->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded shadow border">
        </div>
        @endif
    </div>
</div>