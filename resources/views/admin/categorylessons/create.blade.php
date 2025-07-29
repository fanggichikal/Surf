    <x-backlayout>
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
            <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Create New Surf Lesson</h1>

            <form action="{{ route('admin.categorylessons.store') }}" method="POST">
                @csrf
                @include('admin.categorylessons.form')

                <div class="flex justify-end mt-8 space-x-4">
                    <a href="{{ route('admin.categorylessons.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-gray-200 border border-gray-300 rounded-lg font-semibold text-base text-gray-700 uppercase tracking-wider shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition ease-in-out duration-150">
                        Cancel
                    </a>
                    <button
                        type="submit"
                        class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg shadow-md
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           transition ease-in-out duration-300 transform hover:scale-105">
                        Create Category Lesson
                    </button>
                </div>
            </form>
        </div>
    </x-backlayout>