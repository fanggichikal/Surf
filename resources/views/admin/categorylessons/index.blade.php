<x-backlayout>
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 text-center">Category Lessons</h1>

        {{-- Add Button --}}
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.categorylessons.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-md shadow-sm transition ease-in-out duration-150">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Add New Category Lesson
            </a>
        </div>

        {{-- Success Alert --}}
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
            <strong class="font-bold">Success:</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        {{-- Data Table --}}
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 bg-white rounded-lg shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Slug
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($categories as $category)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $category->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-600">{{ $category->slug }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex gap-4">
                            <a href="{{ route('admin.categorylessons.show', $category->id) }}"
                                class="text-yellow-400 hover:underline">Show</a>
                            <a href="{{ route('admin.categorylessons.edit', $category->id) }}"
                                class="text-indigo-400 hover:underline">Edit</a>
                            <form action="{{ route('admin.categorylessons.destroy', $category->id) }}"
                                method="POST" onsubmit="return confirm('Delete this category?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500 italic">
                            No category lessons found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-backlayout>