<x-backlayout>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-8 mb-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Edit Surf Trip</h1>

        {{-- Tampilkan Validasi Error --}}
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <strong class="font-bold">Oops!</strong>
            <ul class="mt-2 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.surftrips.update', $surftrip->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Form Fields --}}
            @include('admin.surftrips.form', ['surftrip' => $surftrip])

            <div class="flex justify-between mt-8">
                {{-- Cancel Button --}}
                <a href="{{ route('admin.surftrips.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-gray-200 border border-gray-300 rounded-lg font-semibold text-base text-gray-700 uppercase tracking-wider shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 transition ease-in-out duration-150">
                    Cancel
                </a>

                {{-- Submit Button --}}
                <button type="submit"
                    class="bg-indigo-400 hover:bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg shadow-md
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                           transition ease-in-out duration-300 transform hover:scale-105">
                    Update Trip
                </button>
            </div>
        </form>
    </div>
</x-backlayout>