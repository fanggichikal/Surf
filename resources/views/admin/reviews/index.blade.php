<x-backlayout>
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 text-center">All Reviews</h1>

        {{-- Add New Button --}}
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.reviews.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add New Review
            </a>
        </div>

        {{-- Flash Message --}}
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
            <strong class="font-bold">Success!</strong> {{ session('success') }}
        </div>
        @endif

        {{-- Reviews Table --}}
        @if($reviews->count())
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Rating</th>
                        <!-- <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Feature</th> -->
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($reviews as $index => $review)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $review->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $review->title ?? '-' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $review->rating }} ★</td>
                        <!-- <td class="px-6 py-4 text-sm">
                            <span class="px-3 py-1 text-xs font-medium rounded-full 
                                {{ $review->is_featured ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-700' }}">
                                {{ $review->is_featured ? 'Yes' : 'No' }}
                            </span>
                        </td> -->
                        <td class="px-6 py-4 text-sm">
                            <div class="flex justify-center space-x-4">
                                <a href="{{ route('admin.reviews.show', $review) }}"
                                    class="text-blue-500 hover:underline">Show</a>
                                <a href="{{ route('admin.reviews.edit', $review) }}"
                                    class="text-yellow-500 hover:underline">Edit</a>
                                <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Are you sure you want to delete this review?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p class="text-gray-500 italic text-center mt-6">No reviews found.</p>
        @endif
    </div>
</x-backlayout>