<x-backlayout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden border border-gray-200">

            {{-- Header --}}
            <div class="bg-gradient-to-r from-indigo-600 to-indigo-800 p-6 text-white text-center">
                <h1 class="text-4xl font-extrabold">{{ $surfLesson->title }}</h1>
            </div>

            {{--Category Class Lesson--}}
            <span class="block w-full text-indigo-800 text-sm font-semibold px-3 py-1 rounded text-center mt-2">
                Type Class : {{ $surfLesson->categoryLesson->name ?? 'No Category Detect' }}
            </span>

            <div class="p-8 space-y-10">
                {{-- Image --}}
                <div>
                    @if ($surfLesson->image_path)
                    <img src="{{ asset('storage/' . $surfLesson->image_path) }}" alt="{{ $surfLesson->title }}"
                        class="w-full max-h-96 object-cover rounded-lg shadow-md border border-gray-300">
                    @else
                    <div class="w-full h-80 bg-gray-100 flex items-center justify-center rounded-lg text-gray-500 border border-gray-300">
                        <span class="text-2xl font-semibold">🌊 No Image Available</span>
                    </div>
                    @endif
                </div>

                {{-- Description --}}
                <div class="bg-indigo-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-2 border-indigo-300 pb-2">Description</h2>
                    <div class="text-gray-700 leading-relaxed space-y-4">
                        <p>{{ $surfLesson->description_paragraph_1 ?? 'No first paragraph provided.' }}</p>
                        @if ($surfLesson->description_paragraph_2)
                        <p>{{ $surfLesson->description_paragraph_2 }}</p>
                        @endif
                        @if ($surfLesson->description_paragraph_3)
                        <p>{{ $surfLesson->description_paragraph_3 }}</p>
                        @endif
                    </div>
                </div>

                {{-- Prices --}}
                <div class="bg-green-50 p-6 rounded-lg shadow-inner">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4 border-b-2 border-green-300 pb-2">Lesson Prices</h2>
                    <div class="space-y-4">
                        @php
                        $prices = is_array($surfLesson->lesson_prices) ? $surfLesson->lesson_prices : json_decode($surfLesson->lesson_prices, true);
                        @endphp

                        @if (is_array($prices) && count($prices) > 0)
                        <ul class="divide-y divide-green-200">
                            @foreach($prices as $price)
                            @if (is_array($price) && isset($price['type'], $price['price']))
                            <li class="flex justify-between items-center py-3">
                                <span class="text-lg font-medium text-gray-800">{{ $price['type'] }}:</span>
                                <span class="text-xl font-bold text-green-700">
                                    Rp{{ number_format($price['price'], 0, ',', '.') }}
                                </span>
                            </li>
                            @else
                            <li class="py-3 text-red-500 italic">⚠️ Invalid price data detected.</li>
                            @endif
                            @endforeach
                        </ul>
                        @else
                        <p class="text-gray-600 italic">No specific pricing options have been added for this lesson.</p>
                        @endif
                    </div>
                </div>

                {{-- Metadata --}}
                <div class="bg-gray-50 p-6 rounded-lg shadow-inner text-sm text-gray-600">
                    <h2 class="text-xl font-semibold text-gray-800 mb-3 border-b border-gray-300 pb-2">Time Created</h2>
                    <p><strong>Created At:</strong> {{ optional($surfLesson->created_at)->format('F d, Y H:i:s') ?? 'N/A' }}</p>
                    <p><strong>Last Updated:</strong> {{ optional($surfLesson->updated_at)->format('F d, Y H:i:s') ?? 'N/A' }}</p>
                </div>

                {{-- Actions --}}
                <div class="flex flex-wrap justify-center gap-4 mt-8">
                    <a href="{{ route('admin.surflessons.edit', $surfLesson->id) }}"
                        class="px-6 py-3 bg-indigo-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-indigo-700 transition">
                        <i class="fas fa-edit mr-2"></i>Edit Lesson
                    </a>
                    <a href="{{ route('admin.surflessons.index') }}"
                        class="px-6 py-3 bg-gray-200 text-gray-700 rounded-md font-semibold text-base shadow-md hover:bg-gray-300 transition">
                        <i class="fas fa-list mr-2"></i>Back to Lessons
                    </a>
                    <form action="{{ route('admin.surflessons.destroy', $surfLesson->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this lesson?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-6 py-3 bg-red-600 text-white rounded-md font-semibold text-base shadow-md hover:bg-red-700 transition">
                            <i class="fas fa-trash-alt mr-2"></i>Delete Lesson
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-backlayout>