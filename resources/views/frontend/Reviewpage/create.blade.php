<x-frontlayout>
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-8">
            <h2 class="text-3xl font-bold text-sky-800 mb-6 text-center">Leave a Review</h2>

            {{-- Flash success message --}}
            @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
            @endif

            {{-- Start Form --}}
            <form action="{{ route('frontend.reviewpage.store') }}" method="POST">
                @csrf

                {{-- Name --}}
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-1">Name</label>
                    <input type="text" name="name" id="name"
                        value="{{ old('name') }}"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500"
                        required>
                    @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Title --}}
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-1">Title (optional)</label>
                    <input type="text" name="title" id="title"
                        value="{{ old('title') }}"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500">
                    @error('title')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Message --}}
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium mb-1">Your Review</label>
                    <textarea name="message" id="message" rows="5"
                        class="w-full border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500"
                        required>{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Rating --}}
                <div class="mb-6">
                    <label for="rating" class="block text-gray-700 font-medium mb-1">Rating</label>
                    <select name="rating" id="rating"
                        class="w-32 border-gray-300 rounded-md shadow-sm focus:ring-sky-500 focus:border-sky-500"
                        required>
                        <option value="">Choose...</option>
                        @for ($i = 5; $i >= 1; $i--)
                        <option value="{{ $i }}" {{ old('rating') == $i ? 'selected' : '' }}>
                            {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                        </option>
                        @endfor
                    </select>
                    @error('rating')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="mt-6">
                    <button type="submit"
                        class="w-full sm:w-auto bg-sky-600 hover:bg-sky-700 text-white px-6 py-2 rounded-md font-semibold transition">
                        Submit Review
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-frontlayout>