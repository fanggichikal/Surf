    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name', $categoryLesson->name ?? '') }}"
            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm" required>
        @error('name')
        <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>