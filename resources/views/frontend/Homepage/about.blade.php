<x-frontlayout>
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-12">
                <div class="w-full md:w-1/2 order-2 md:order-1">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-sky-300 mb-6 leading-tight">
                        {{ $content->title ?? 'About Us' }}
                    </h2>

                    <div class="text-lg text-gray-700 leading-relaxed space-y-4 mb-8">
                        @if ($content->content_body)
                        @foreach (explode("\n\n", $content->content_body) as $paragraph)
                        <p>{{ $paragraph }}</p>
                        @endforeach
                        @else
                        <p class="text-red-600 italic">Content for the 'About Us' section is not yet set in the content management system.</p>
                        <p class="text-gray-500">Please add content through the admin panel with 'section_name' "about".</p>
                        @endif
                    </div>

                    <div class="text-right">
                        <h3 class="text-2xl sm:text-3xl font-bold text-sky-300 mb-4 inline-block">
                            Get In Touch
                        </h3>

                        <div>
                            <a href="https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20lesson."
                                target="_blank"
                                class="inline-flex bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-3 px-6 rounded-full shadow-md transition duration-300 ease-in-out items-center justify-center">
                                Book Now
                            </a>
                        </div>
                    </div>

                </div>

                <div class="w-full md:w-1/2 flex justify-center order-1 md:order-2">
                    @if ($content->image_path)
                    <img src="{{ asset('storage/' . $content->image_path) }}"
                        alt="{{ $content->title ?? 'About Image' }}"
                        class="rounded-lg shadow-xl w-full max-w-md h-auto object-cover transform transition-transform duration-300 hover:scale-105">
                    @else
                    <div class="bg-gray-200 rounded-lg shadow-md flex items-center justify-center p-8 w-full max-w-md h-64 text-gray-500 text-center italic">
                        No image available for this section.
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </section>
</x-frontlayout>