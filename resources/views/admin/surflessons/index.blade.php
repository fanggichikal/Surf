<x-backlayout>
    <div class="max-w-7xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 text-center">Surf Lessons</h1>

        {{-- Add New Button --}}
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.surflessons.create') }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add New Surf Lesson Class
            </a>
        </div>

        {{-- Flash Message --}}
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
            <strong class="font-bold">Success!</strong> {{ session('success') }}
        </div>
        @endif

        {{-- Lessons Table --}}
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Slug</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Type Class</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Prices</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($lessons as $lesson)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900 font-medium">{{ $lesson->title }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $lesson->slug }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700">{{ $lesson->typeclass }}</td>

                        <td class="px-6 py-4 text-sm text-gray-700">
                            @php
                            $prices = is_array($lesson->lesson_prices)
                            ? $lesson->lesson_prices
                            : json_decode($lesson->lesson_prices, true);
                            @endphp

                            @if(is_array($prices) && count($prices) > 0)
                            @foreach($prices as $price)
                            @if(isset($price['type'], $price['price']))
                            <div class="mb-1">{{ $price['type'] }} - Rp{{ number_format($price['price'], 0, ',', '.') }}</div>
                            @else
                            <div class="text-red-500 italic">⚠️ Invalid price data</div>
                            @endif
                            @endforeach
                            @else
                            <span class="text-gray-400 italic">No prices</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <div class="flex space-x-3">
                                <a href="{{ route('admin.surflessons.show', $lesson) }}"
                                    class="text-yellow-400 hover:underline">Show</a>

                                <a href="{{ route('admin.surflessons.edit', $lesson) }}"
                                    class="text-indigo-400 hover:underline">Edit</a>

                                <form action="{{ route('admin.surflessons.destroy', $lesson->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this lesson?');"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:underline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500 italic">
                            No surf lessons found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-backlayout>