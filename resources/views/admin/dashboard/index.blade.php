<x-backlayout>
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard TeamPal Travel</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- Surf Lessons --}}
        <a href="{{ route('admin.surflessons.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition block">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Surf Lessons</h2>
            <p class="text-4xl font-bold text-sky-600">{{ $totalSurfLessons }}</p>
        </a>

        {{-- Surf Trips --}}
        <a href="{{ route('admin.surftrips.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition block">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Surf Trips</h2>
            <p class="text-4xl font-bold text-teal-600">{{ $totalSurfTrips }}</p>
        </a>

        {{-- Reviews --}}
        <a href="{{ route('admin.reviews.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition block">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Reviews</h2>
            <p class="text-4xl font-bold text-purple-600">{{ $totalReviews }}</p>
        </a>

        {{-- Lesson Categories --}}
        <a href="{{ route('admin.categorylessons.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition block">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Lesson Categories</h2>
            <p class="text-4xl font-bold text-orange-600">{{ $totalCategories }}</p>
        </a>

        {{-- Island Categories --}}
        <a href="{{ route('admin.categoryislands.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition block">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Island Categories</h2>
            <p class="text-4xl font-bold text-orange-600">{{ $totalCategoriesIsland }}</p>
        </a>

    </div>
</x-backlayout>