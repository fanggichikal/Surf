<x-backlayout>
    <div class="max-w-5xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h2 class="text-3xl font-extrabold text-gray-800 mb-6 text-center">Category Islands</h2>

        {{-- Flash success message --}}
        @if (session('success'))
        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif

        {{-- Add New Button --}}
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.categoryislands.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md shadow hover:bg-blue-700 transition">
                <i class="fas fa-plus mr-2"></i> Add New Island
            </a>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300 rounded-md">
                <thead class="bg-gray-100 text-gray-700 text-sm">
                    <tr>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Slug</th>
                        <th class="p-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800">
                    @forelse ($categories as $category)
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="p-3 font-medium">{{ $category->name }}</td>
                        <td class="p-3 text-gray-500">{{ $category->slug }}</td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('admin.categoryislands.show', $category->id) }}"
                                    class="text-yellow-600 hover:underline text-sm">
                                    <i class="fas fa-eye mr-1"></i>Show
                                </a>
                                <a href="{{ route('admin.categoryislands.edit', $category->id) }}"
                                    class="text-blue-600 hover:underline text-sm">
                                    <i class="fas fa-edit mr-1"></i>Edit
                                </a>
                                <form action="{{ route('admin.categoryislands.destroy', $category->id) }}"
                                    method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:underline">Delete</button>

                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="p-4 text-center text-gray-500">No categories found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-backlayout>