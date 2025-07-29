<x-backlayout>
    <div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Create Category Island</h2>

        <form action="{{ route('admin.categoryislands.store') }}" method="POST">
            @csrf

            @include('admin.categoryislands.form', ['categoryIsland' => null])

            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.categoryislands.index') }}" class="px-4 py-2 bg-gray-300 rounded mr-2">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Create</button>
            </div>
        </form>
    </div>
</x-backlayout>