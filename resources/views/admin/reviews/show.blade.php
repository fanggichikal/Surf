<x-backlayout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200">

            {{-- Header --}}
            <div class="bg-gradient-to-r from-sky-600 to-sky-800 p-6 text-white text-center">
                <h1 class="text-4xl font-extrabold">Review by {{ $review->name }}</h1>
            </div>

            <div class="p-8 space-y-8">
                {{-- Title --}}
                @if($review->title)
                <div class="bg-sky-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 border-b-2 border-sky-300 pb-2">Title</h2>
                    <p class="text-gray-700 text-lg">{{ $review->title }}</p>
                </div>
                @endif

                {{-- Message --}}
                <div class="bg-sky-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 border-b-2 border-sky-300 pb-2">Message</h2>
                    <p class="text-gray-700 leading-relaxed text-base">{{ $review->message }}</p>
                </div>

                {{-- Rating --}}
                <div class="bg-yellow-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-2 border-b-2 border-yellow-300 pb-2">Rating</h2>
                    <p class="text-yellow-700 font-bold text-xl">{{ $review->rating }} / 5 ★</p>
                </div>

                {{-- Featured --}}
                <div class="bg-gray-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2 border-b border-gray-300 pb-2">Featured</h2>
                    <span
                        class="inline-block px-4 py-2 rounded-full text-sm font-semibold
                        {{ $review->is_featured ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-700' }}">
                        {{ $review->is_featured ? 'Yes, this review is featured' : 'No, not featured' }}
                    </span>
                </div>

                {{-- Metadata --}}
                <div class="bg-gray-50 p-6 rounded-lg shadow-inner text-sm text-gray-600">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3 border-b border-gray-300 pb-2">Review Metadata</h2>
                    <p><strong>Created At:</strong> {{ $review->created_at->format('F d, Y H:i:s') }}</p>
                    <p><strong>Last Updated:</strong> {{ $review->updated_at->format('F d, Y H:i:s') }}</p>
                </div>

                {{-- Actions --}}
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ route('admin.reviews.edit', $review) }}"
                        class="px-6 py-3 bg-yellow-500 text-white rounded-md font-semibold text-base shadow-md hover:bg-yellow-600 transition">
                        Edit
                    </a>
                    <a href="{{ route('admin.reviews.index') }}"
                        class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-semibold text-base shadow-md hover:bg-gray-300 transition">
                        Cancel
                    </a>
                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this review?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-6 py-3 bg-red-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-red-700 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backlayout>