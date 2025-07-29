<x-backlayout>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-8">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Category Lesson Detail</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div class="bg-gray-50 p-4 rounded shadow">
                <p class="text-gray-500 text-sm font-semibold uppercase mb-1">Name</p>
                <p class="text-gray-800 text-lg font-medium">{{ $categoryLesson->name }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded shadow">
                <p class="text-gray-500 text-sm font-semibold uppercase mb-1">Slug</p>
                <p class="text-gray-800 text-lg font-medium">{{ $categoryLesson->slug }}</p>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="{{ route('admin.categorylessons.edit', $categoryLesson->id) }}"
                class="px-6 py-3 bg-indigo-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-indigo-700 transition">
                <i class="fas fa-edit mr-2"></i>Edit Lesson
            </a>
            <a href="{{ route('admin.categorylessons.index') }}"
                class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-semibold text-base shadow-md hover:bg-gray-300 transition">
                <i class="fas fa-list mr-2"></i>Back to Lessons
            </a>
            <form action="{{ route('admin.categorylessons.destroy', $categoryLesson->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lesson?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="px-6 py-3 bg-red-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-red-700 transition">
                    <i class="fas fa-trash-alt mr-2"></i>Delete Lesson
                </button>
            </form>
        </div>
    </div>
</x-backlayout>