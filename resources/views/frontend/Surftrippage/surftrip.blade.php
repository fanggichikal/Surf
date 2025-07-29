<x-frontlayout>
    <div class="flex flex-col items-center justify-center min-h-screen px-2 sm:px-4 lg:px-6">
        <h1 class="text-2xl font-bold text-sky-800 mb-6 mt-6 text-center">Teampal Trips and Surf</h1>

        <p class="text-base sm:text-lg text-sky-800 mb-6 leading-relaxed max-w-6xl mx-auto text-justify">
            Teampal — from the Balinese word timpal, meaning a friend — is more than just a name. It’s a spirit. A bond. A quiet promise that wherever the road takes us, we walk it together.

            We are a team, yes. But more than that, we are friends — friends who grow side by side, who embrace the unknown, who share both the silence and the stories.

            Indonesia is a beautiful chaos — a scattered constellation of islands, each a hidden gem waiting to be found. And it’s on the road, where wheels hum against the earth from Bengkulu to Krui, or from Medan to the untouched islands of the north, that her soul truly reveals itself.

            Driving through the mountains of Sumatra is more than just a journey — it’s a mirror. A slow unfolding of life, where nature teaches patience, and people teach you kindness without words.

            It’s not simply about reaching a destination. It’s about the pauses in between. The laughter shared under leaking roofs. The disagreements that make space for understanding. The growth that happens when you're no longer rushing.

            And if your heart leans toward the romantic — if you find beauty in what is wild, imperfect, and raw — then Sumatra will steal your heart again and again. Not loudly, but deeply.

            In the end, no matter the roads we take, or the differences we carry — we remain.

            Still friends.
            Still Teampal.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @forelse($trips as $trip)
            <a href="{{ route('surftrips.show', $trip->slug) }}"
                class="relative w-full h-64 sm:h-72 lg:h-80 overflow-hidden rounded-lg shadow-lg group block">

                <img src="{{ asset('storage/' . $trip->image) }}"
                    alt="{{ $trip->title }}"
                    class="w-full h-full object-cover object-center transform transition-transform duration-500 group-hover:scale-105">

                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-80"></div>

                <div class="absolute bottom-4 left-4 text-white p-2">
                    <p class="text-sm font-semibold text-sky-300">{{ $trip->title }}</p>

                    {{-- Menampilkan nama kategori dari relasi --}}
                    <p class="text-xs font-medium text-gray-200 italic">
                        {{ $trip->categoryIsland->name ?? 'No Category' }}
                    </p>

                    <h3 class="text-lg sm:text-xl lg:text-2xl font-bold leading-tight">
                        {{ Str::limit(strip_tags($trip->bodycontent), 40) }}
                    </h3>
                </div>
            </a>
            @empty
            <p class="text-gray-600 text-center col-span-3">No surf trips available.</p>
            @endforelse
        </div>
    </div>
</x-frontlayout>