<x-backlayout>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Whoops!</strong>
        <span class="block sm:inline">There were some problems with your input.</span>
        <ul class="mt-3 list-disc list-inside">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.surflessons.update', $surfLesson->id) }}" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg border border-gray-200">
        @csrf
        @method('PUT') {{-- PENTING: Untuk menandakan request sebagai PUT/PATCH --}}

        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center border-b pb-4">Edit Surf Lesson Details</h2>

        {{-- Title Field --}}
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $surfLesson->title ?? '') }}" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error('title') border-red-500 @enderror">
            @error('title')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Slug Field --}}
        <div class="mb-4">
            <label for="slug" class="block text-gray-700 text-sm font-bold mb-2">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $surfLesson->slug ?? '') }}" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error('slug') border-red-500 @enderror">
            @error('slug')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Category Lesson Field --}}
        <div class="mb-4">
            <label for="category_lesson_id" class="block text-gray-700 text-sm font-bold mb-2">Category Lesson:</label>
            <select name="category_lesson_id" id="category_lesson_id" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error('category_lesson_id') border-red-500 @enderror">
                <option value="">Select a Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_lesson_id', $lesson->category_lesson_id ?? '') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
            @error('category_lesson_id')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Type Class Field --}}
        <div class="mb-4">
            <label for="typeclass" class="block text-gray-700 text-sm font-bold mb-2">Type Class:</label>
            <input type="text" name="typeclass" id="typeclass" value="{{ old('typeclass', $surfLesson->typeclass ?? '') }}" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error('typeclass') border-red-500 @enderror">
            @error('typeclass')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Description Paragraph 1 --}}
        <div class="mb-4">
            <label for="description_paragraph_1" class="block text-gray-700 text-sm font-bold mb-2">Paragraph 1:</label>
            <textarea name="description_paragraph_1" id="description_paragraph_1" required
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 h-32 resize-y transition duration-200 ease-in-out @error('description_paragraph_1') border-red-500 @enderror">{{ old('description_paragraph_1', $surfLesson->description_paragraph_1 ?? '') }}</textarea>
            @error('description_paragraph_1')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Description Paragraph 2 (Optional) --}}
        <div class="mb-4">
            <label for="description_paragraph_2" class="block text-gray-700 text-sm font-bold mb-2">Paragraph 2 (Optional):</label>
            <textarea name="description_paragraph_2" id="description_paragraph_2"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 h-32 resize-y transition duration-200 ease-in-out @error('description_paragraph_2') border-red-500 @enderror">{{ old('description_paragraph_2', $surfLesson->description_paragraph_2 ?? '') }}</textarea>
            @error('description_paragraph_2')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Description Paragraph 3 (Optional) --}}
        <div class="mb-6">
            <label for="description_paragraph_3" class="block text-gray-700 text-sm font-bold mb-2">Paragraph 3 (Optional):</label>
            <textarea name="description_paragraph_3" id="description_paragraph_3"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 h-32 resize-y transition duration-200 ease-in-out @error('description_paragraph_3') border-red-500 @enderror">{{ old('description_paragraph_3', $surfLesson->description_paragraph_3 ?? '') }}</textarea>
            @error('description_paragraph_3')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Image Upload Section --}}
        <div class="mb-6 border-t pt-6 border-gray-200">
            <label class="block text-gray-700 text-sm font-bold mb-2">Current Image:</label>
            @if ($surfLesson->image_path)
            <img src="{{ Storage::url($surfLesson->image_path) }}" alt="Current Image" class="w-48 h-auto object-cover rounded-md shadow-sm mb-3 border border-gray-200">
            @else
            <span class="text-gray-500 text-sm block mb-2">No image uploaded.</span>
            @endif

            <label for="image_path" class="block text-gray-700 text-sm font-bold mb-2 mt-4">Upload New Image (optional):</label>
            <input type="file" name="image_path" id="image_path"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50
                      focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500
                      file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold
                      file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition duration-200 ease-in-out @error('image_path') border-red-500 @enderror">
            @error('image_path')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
        </div>

        {{-- Lesson Prices Section --}}
        <div class="mb-6 border-t pt-6 border-gray-200">
            <label class="block text-gray-700 text-sm font-bold mb-3">Lesson Prices:</label>
            <div id="price-fields-container">
                @php
                // Pastikan $surfLesson->lesson_prices adalah array.
                // Jika null atau bukan array karena data lama, inisialisasi sebagai array kosong.
                $currentPrices = is_array($surfLesson->lesson_prices) ? $surfLesson->lesson_prices : [];

                // Jika ada old input untuk lesson_prices, gunakan itu.
                // Jika tidak ada old input DAN currentPrices kosong, tambahkan satu baris kosong
                // untuk memastikan selalu ada satu input field saat pertama kali load form edit.
                $pricesToDisplay = old('lesson_prices', $currentPrices);
                if (empty($pricesToDisplay) && old('lesson_prices') === null) {
                $pricesToDisplay = [['type' => '', 'price' => '']];
                }
                @endphp

                @foreach ($pricesToDisplay as $index => $priceItem)
                <div class="price-group flex flex-col sm:flex-row items-center space-y-2 sm:space-y-0 sm:space-x-2 mb-3 p-3 border border-gray-100 rounded-md bg-gray-50">
                    <div class="w-full sm:w-1/2">
                        <label for="lesson_prices_{{ $index }}_type" class="sr-only">Type for price {{ $index + 1 }}</label>
                        <input type="text" name="lesson_prices[{{ $index }}][type]" id="lesson_prices_{{ $index }}_type"
                            value="{{ old("lesson_prices.$index.type", $priceItem['type'] ?? '') }}" placeholder="Type (e.g., 1 hour, Group)"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error(" lesson_prices.$index.type") border-red-500 @enderror">
                        @error("lesson_prices.$index.type")
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full sm:w-1/2">
                        <label for="lesson_prices_{{ $index }}_price" class="sr-only">Price for price {{ $index + 1 }}</label>
                        <input type="number" name="lesson_prices[{{ $index }}][price]" id="lesson_prices_{{ $index }}_price"
                            value="{{ old("lesson_prices.$index.price", $priceItem['price'] ?? '') }}" placeholder="Price (e.g., 50.00)" step="0.01" min="0"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out @error(" lesson_prices.$index.price") border-red-500 @enderror">
                        @error("lesson_prices.$index.price")
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Show remove button if not the first field AND there's more than one field --}}
                    @if ($index > 0 || count($pricesToDisplay) > 1)
                    <button type="button" class="remove-price-field text-red-600 hover:text-red-800 font-medium text-sm mt-2 sm:mt-0 px-3 py-1 rounded transition duration-200 ease-in-out">Remove</button>
                    @endif
                </div>
                @endforeach
            </div>

            <button type="button" id="add-price-field" class="mt-4 bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg inline-flex items-center text-sm shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Add More Price Option
            </button>
        </div>

        {{-- Submit and Back Buttons --}}
        <div class="flex items-center justify-end space-x-4 mt-8">
            <a href="{{ route('admin.surflessons.index') }}"
                class="inline-flex items-center px-6 py-3 bg-gray-200 border border-gray-300 rounded-lg font-semibold text-base text-gray-700 uppercase tracking-wider shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition ease-in-out duration-150">
                Cancel
            </a>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-300 transform hover:scale-105 shadow-md">
                Update Lesson
            </button>
        </div>
    </form>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addPriceFieldButton = document.getElementById('add-price-field');
            const priceFieldsContainer = document.getElementById('price-fields-container');

            // Function to get the next available index
            function getNextIndex() {
                const existingFields = priceFieldsContainer.querySelectorAll('.price-group');
                if (existingFields.length === 0) {
                    return 0;
                }
                // Find the maximum index from existing fields
                let maxIndex = -1;
                existingFields.forEach(field => {
                    const input = field.querySelector('input[name^="lesson_prices["][name$="][type]"]');
                    if (input) {
                        const match = input.name.match(/\[(\d+)\]/);
                        if (match && parseInt(match[1]) > maxIndex) {
                            maxIndex = parseInt(match[1]);
                        }
                    }
                });
                return maxIndex + 1;
            }

            // Function to create a new price field
            function createPriceField(typeValue = '', priceValue = '') {
                const index = getNextIndex(); // Get dynamic index
                const newFieldDiv = document.createElement('div');
                newFieldDiv.classList.add('price-group', 'flex', 'flex-col', 'sm:flex-row', 'items-center', 'space-y-2', 'sm:space-y-0', 'sm:space-x-2', 'mb-3', 'p-3', 'border', 'border-gray-100', 'rounded-md', 'bg-gray-50');
                newFieldDiv.innerHTML = `
                    <div class="w-full sm:w-1/2">
                        <label for="lesson_prices_${index}_type" class="sr-only">Type for price ${index + 1}</label>
                        <input type="text" name="lesson_prices[${index}][type]" id="lesson_prices_${index}_type"
                               value="${typeValue}" placeholder="Type (e.g., 1 hour, Group)"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out">
                    </div>
                    <div class="w-full sm:w-1/2">
                        <label for="lesson_prices_${index}_price" class="sr-only">Price for price ${index + 1}</label>
                        <input type="number" name="lesson_prices[${index}][price]" id="lesson_prices_${index}_price"
                               value="${priceValue}" placeholder="Price (e.g., 50.00)" step="0.01" min="0"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 ease-in-out">
                    </div>
                    <button type="button" class="remove-price-field text-red-600 hover:text-red-800 font-medium text-sm mt-2 sm:mt-0 px-3 py-1 rounded transition duration-200 ease-in-out">Remove</button>
                `;
                priceFieldsContainer.appendChild(newFieldDiv);
                updateRemoveButtonsVisibility(); // Update visibility after adding a new field
            }

            // Function to update the visibility of remove buttons
            function updateRemoveButtonsVisibility() {
                const priceGroups = priceFieldsContainer.querySelectorAll('.price-group');
                if (priceGroups.length === 1) {
                    // Hide remove button if only one field exists
                    priceGroups[0].querySelector('.remove-price-field')?.style.display = 'none';
                } else {
                    // Show all remove buttons if more than one field exists
                    priceGroups.forEach(group => {
                        group.querySelector('.remove-price-field')?.style.display = 'inline-block';
                    });
                }
            }

            // Add event listener for adding new fields
            if (addPriceFieldButton) {
                addPriceFieldButton.addEventListener('click', function() {
                    createPriceField();
                });
            }

            // Add event listener for removing fields (using event delegation)
            if (priceFieldsContainer) {
                priceFieldsContainer.addEventListener('click', function(e) {
                    if (e.target.classList.contains('remove-price-field')) {
                        const priceGroupToRemove = e.target.closest('.price-group');
                        if (priceGroupToRemove) {
                            priceGroupToRemove.remove();
                            updateRemoveButtonsVisibility(); // Update visibility after removing a field
                        }
                    }
                });
            }

            // Initial call to set correct visibility for remove buttons on load
            updateRemoveButtonsVisibility();
        });
    </script>
    @endpush
</x-backlayout>