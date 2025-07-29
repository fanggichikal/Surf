<x-backlayout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8 space-y-6">

        {{-- Section Name --}}
        <div>
            <h2 class="text-sm font-bold text-gray-700 mb-1">Section Name</h2>
            <p class="text-base text-gray-900">{{ $contentManagement->section_name }}</p>
        </div>

        {{-- Title --}}
        @if ($contentManagement->title)
        <div>
            <h2 class="text-sm font-bold text-gray-700 mb-1">Title</h2>
            <p class="text-base text-gray-900">{{ $contentManagement->title }}</p>
        </div>
        @endif

        {{-- Content Body --}}
        @if ($contentManagement->content_body)
        <div>
            <h2 class="text-sm font-bold text-gray-700 mb-1">Content Body</h2>
            <div class="text-base text-gray-800 leading-relaxed whitespace-pre-line bg-gray-50 p-4 rounded-md border border-gray-200">
                {{ $contentManagement->content_body }}
            </div>
        </div>
        @endif

        {{-- Image Preview --}}
        <div>
            <h2 class="text-sm font-bold text-gray-700 mb-2">Image</h2>
            @if (!empty($contentManagement->image_path))
            <img src="{{ asset('storage/' . $contentManagement->image_path) }}" alt="Uploaded Image"
                class="h-48 object-cover rounded-md border border-gray-300 shadow-md">
            @else
            <p class="text-gray-500 italic">No image uploaded.</p>
            @endif
        </div>

        {{-- Action Buttons --}}
        <div class="flex space-x-4 pt-6">
            <a href="{{ route('admin.contentmanagement.edit', $contentManagement->id) }}"
                class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white rounded-md shadow hover:bg-yellow-600 transition">
                Edit
            </a>
            <a href="{{ route('admin.contentmanagement.index') }}"
                class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-700 rounded-md shadow hover:bg-gray-300 transition">
                Cancel
            </a>
            <form action="{{ route('admin.contentmanagement.destroy', $contentManagement->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this content?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md shadow hover:bg-red-700 transition">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-backlayout>