<x-backlayout>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-8">
        <h1 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Category Island Detail</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div class="bg-gray-50 p-4 rounded shadow">
                <p class="text-gray-500 text-sm font-semibold uppercase mb-1">Name</p>
                <p class="text-gray-800 text-lg font-medium">{{ $categoryIsland->name }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded shadow">
                <p class="text-gray-500 text-sm font-semibold uppercase mb-1">Slug</p>
                <p class="text-gray-800 text-lg font-medium">{{ $categoryIsland->slug }}</p>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="{{ route('admin.categoryislands.edit', $categoryIsland->id) }}"
                class="px-6 py-3 bg-indigo-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-indigo-700 transition">
                <i class="fas fa-edit mr-2"></i>Edit Island
            </a>
            <a href="{{ route('admin.categoryislands.index') }}"
                class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-semibold text-base shadow-md hover:bg-gray-300 transition">
                <i class="fas fa-list mr-2"></i>Back to Island
            </a>
            <form action="{{ route('admin.categoryislands.destroy', $categoryIsland->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lesson?');">
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