<x-backlayout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Edit Category Lesson</h1>
        <form action="{{ route('admin.contentmanagement.update', $contentManagement->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.contentmanagement.form', ['contentManagement' => $contentManagement])

            <div class="flex items-center justify-end mt-8 space-x-4">
                <a href="{{ route('admin.contentmanagement.index') }}"
                    class="inline-flex bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 px-6  rounded focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                    Cancel
                </a>
                <button
                    type="submit"
                    class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg shadow-md
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           transition ease-in-out duration-300 transform hover:scale-105">
                    Update Content
                </button>
            </div>
        </form>
    </div>
</x-backlayout>