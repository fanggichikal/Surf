<x-backlayout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200">

            {{-- Header --}}
            <div class="bg-gradient-to-r from-sky-600 to-sky-800 p-6 text-white text-center">
                <h1 class="text-4xl font-extrabold">{{ $surftrip->title }}</h1>
            </div>

            {{-- Category Island --}}
            <span class="block w-full text-sky-800 text-sm font-semibold px-3 py-1 rounded text-center mt-2">
                {{ $surftrip->categoryIsland->name ?? 'Uncategorized' }}
            </span>

            <div class="p-8 space-y-10">
                {{-- Image --}}
                <div>
                    @if ($surftrip->image)
                    <img src="{{ asset('storage/' . $surftrip->image) }}" alt="{{ $surftrip->title }}"
                        class="w-full max-h-96 object-cover rounded-lg shadow-md border border-gray-300">
                    @else
                    <div class="w-full h-80 bg-gray-100 flex items-center justify-center rounded-lg text-gray-500 border border-gray-300">
                        <span class="text-2xl font-semibold">🌊 No Image Available</span>
                    </div>
                    @endif
                </div>

                {{-- Description --}}
                <div class="bg-sky-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-2 border-sky-300 pb-2">Description</h2>
                    <div class="text-gray-700 leading-relaxed space-y-4">
                        {!! nl2br(e($surftrip->bodycontent)) !!}
                    </div>
                </div>

                {{-- Metadata --}}
                <div class="bg-gray-50 p-6 rounded-lg shadow-inner text-sm text-gray-600">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3 border-b border-gray-300 pb-2">Metadata</h2>
                    <p><strong>Slug:</strong> {{ $surftrip->slug }}</p>
                    <p><strong>Created At:</strong> {{ optional($surftrip->created_at)->format('F d, Y H:i:s') ?? 'N/A' }}</p>
                    <p><strong>Last Updated:</strong> {{ optional($surftrip->updated_at)->format('F d, Y H:i:s') ?? 'N/A' }}</p>
                </div>

                {{-- Actions --}}
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ route('admin.surftrips.edit', $surftrip->id) }}"
                        class="px-6 py-3 bg-sky-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-sky-700 transition">
                        <i class="fas fa-edit mr-2"></i>Edit Trip
                    </a>
                    <a href="{{ route('admin.surftrips.index') }}"
                        class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-semibold text-base shadow-md hover:bg-gray-300 transition">
                        <i class="fas fa-list mr-2"></i>Back to Trips
                    </a>
                    <form action="{{ route('admin.surftrips.destroy', $surftrip->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this trip?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-6 py-3 bg-red-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-red-700 transition">
                            <i class="fas fa-trash-alt mr-2"></i>Delete Trip
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backlayout>