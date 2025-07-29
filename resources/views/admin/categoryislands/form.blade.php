<div class="mb-4">
    <label for="name" class="block font-semibold mb-1">Category Name</label>
    <input type="text" name="name" id="name" class="w-full border p-2 rounded"
        value="{{ old('name', $categoryIsland->name ?? '') }}" required>
    @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
</div>