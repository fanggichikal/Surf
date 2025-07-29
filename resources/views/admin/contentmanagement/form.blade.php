<div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
    {{-- Section Name --}}
    <div class="mb-4">
        <label for="section_name" class="block text-gray-700 text-sm font-bold mb-2">
            Section Name <span class="text-red-500">*</span>
        </label>
        <input type="text" name="section_name" id="section_name"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('section_name') border-red-500 @enderror"
            value="{{ old('section_name', $contentManagement->section_name ?? '') }}"
            placeholder="Section Name" required>
        @error('section_name')
        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Title --}}
    <div class="mb-4">
        <label for="title" class="block text-gray-700 text-sm font-bold mb-2">
            Title
        </label>
        <input type="text" name="title" id="title"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
            value="{{ old('title', $contentManagement->title ?? '') }}"
            placeholder="Title">
        @error('title')
        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Content Body --}}
    <div class="mb-4">
        <label for="content_body" class="block text-gray-700 text-sm font-bold mb-2">
            Content Body
        </label>
        <textarea name="content_body" id="content_body" rows="6"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline resize-y @error('content_body') border-red-500 @enderror"
            placeholder="Enter the main content here...">{{ old('content_body', $contentManagement->content_body ?? '') }}</textarea>
        @error('content_body')
        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Image Upload --}}
    <div class="mb-6">
        <label for="image_file" class="block text-gray-700 text-sm font-bold mb-2">
            Upload Image
        </label>

        @if (!empty($contentManagement->image_path))
        <div class="mb-2">
            <img src="{{ asset('storage/' . $contentManagement->image_path) }}" alt="Current Image"
                class="h-32 object-cover rounded-md mb-2">
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="remove_image" id="remove_image" value="1">
                <label for="remove_image" class="text-sm text-red-600">Remove current image</label>
            </div>
        </div>
        @endif

        <input type="file" name="image_file" id="image_file"
            class="block w-full text-sm text-gray-500
                              file:mr-4 file:py-2 file:px-4
                              file:rounded-md file:border-0
                              file:text-sm file:font-semibold
                              file:bg-blue-50 file:text-blue-700
                              hover:file:bg-blue-100 cursor-pointer @error('image_file') border-red-500 @enderror">
        @error('image_file')
        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
        @enderror
        <p class="mt-2 text-xs text-gray-500">Max file size: 5MB. Allowed formats: JPEG, PNG, JPG, GIF, SVG.</p>
    </div>
</div>