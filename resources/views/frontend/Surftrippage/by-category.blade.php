<x-frontlayout>
    <div class="max-w-6xl mx-auto px-4 py-12">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-sky-800 mb-8 text-center">
            Surf Trips in {{ $category->name }}
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($trips as $trip)
            <a href="{{ route('surftrips.show', $trip->slug) }}" class="group rounded-xl shadow-lg overflow-hidden bg-white hover:shadow-xl transition duration-300">
                @if ($trip->image)
                <img src="{{ asset('storage/' . $trip->image) }}" alt="{{ $trip->title }}"
                    class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-105">
                @else
                <img src="https://placehold.co/600x400?text=No+Image" alt="No Image"
                    class="w-full h-64 object-cover">
                @endif

                <div class="p-4">
                    <h3 class="text-lg font-bold text-sky-700 mb-2">{{ $trip->title }}</h3>
                    <p class="text-sm text-gray-600">{{ Str::limit(strip_tags($trip->bodycontent), 60) }}</p>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center text-gray-500">
                No trips available in this category.
            </div>
            @endforelse
        </div>
    </div>
</x-frontlayout>