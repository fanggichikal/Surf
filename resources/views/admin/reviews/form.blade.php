@props(['review' => null])

@php
$isEdit = $review && $review->exists;
@endphp

<div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg space-y-6">

    {{-- Name --}}
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $review->name ?? '') }}"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror">
        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Title (optional) --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title (Optional)</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $review->title ?? '') }}"
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('title') border-red-500 @enderror">
        @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Message --}}
    <div>
        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
        <textarea
            name="message"
            id="message"
            rows="5"
            required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('message') border-red-500 @enderror">{{ old('message', $review->message ?? '') }}</textarea>
        @error('message') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

    {{-- Rating --}}
    <div>
        <label for="rating" class="block text-sm font-medium text-gray-700">Rating (1 - 5)</label>
        <input
            type="number"
            name="rating"
            id="rating"
            min="1"
            max="5"
            value="{{ old('rating', $review->rating ?? 5) }}"
            required
            class="mt-1 block w-24 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('rating') border-red-500 @enderror">
        @error('rating') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
    </div>

</div>