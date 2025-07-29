<x-frontlayout>
    {{--Contact Section--}}
    <section class="py-12 sm:py-16 px-4">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl sm:text-4xl font-bold text-sky-800 mb-8 sm:mb-12">Information</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white rounded-lg shadow-md p-6 sm:p-8 flex flex-col items-center text-center">
                    <h3 class="text-xl sm:text-2xl font-semibold text-sky-700 mb-4">Contact Us<h3>
                            <p class="text-sky-800 leading-relaxed mb-4">
                                Have questions or need help? Don't hesitate to contact our team. We are here to help!
                            </p>
                            <a href=https://wa.me/6282146768463?text=Hello%20Team%20Pal%20Travel,%20I%27d%20like%20to%20book%20a%20surf%20lesson."
                                target="_blank" class="inline-block bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out text-sm sm:text-base">
                                Contact Now
                            </a>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 sm:p-8 flex flex-col items-center text-center">
                    <h3 class="text-xl sm:text-2xl font-semibold text-sky-700 mb-4">Terms & Conditions</h3>
                    <p class="text-sky-800 leading-relaxed mb-4">
                        Learn more about the rules and conditions that apply when using our services.
                    </p>
                    <a href="{{ url('/terms-conditions') }}" class="inline-block bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out text-sm sm:text-base">
                        Read More
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6 sm:p-8 flex flex-col items-center text-center">
                    <h3 class="text-xl sm:text-2xl font-semibold text-sky-700 mb-4">Privacy Policy</h3>
                    <p class="text-sky-800 leading-relaxed mb-4">
                        We value your privacy. Understand how we collect, use, and protect your data.
                    </p>
                    <a href="{{ url('/privacy-policy') }}" class="inline-block bg-sky-300 hover:bg-sky-800 text-sky-800 hover:text-sky-300 font-bold py-2 px-6 rounded-full transition duration-300 ease-in-out text-sm sm:text-base">
                        Learn Privacy
                    </a>
                </div>
            </div>
        </div>
    </section>


    {{--Google maps Section--}}
    <section class="bg-white py-12 sm:py-16 px-4">
        <div class="container mx-auto">
            <h2 class="text-center text-xl sm:text-2xl font-bold text-sky-800 mb-8 sm:mb-12">Teampal Surf Location</h2>

            <div class="relative w-full overflow-hidden" style="padding-top: 56.25%;"> {{-- 16:9 Aspect Ratio (9 / 16 * 100%) --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.4707006344993!2d115.12050647374498!3d-8.835691990448703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a7b62cd6c0b2a27%3A0xdb93fddb71d47b0e!2sTeampal%20Surf%20Uluwatu%20Bali!5e0!3m2!1sid!2sid!4v1752245896574!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="absolute top-0 left-0 w-full h-full border-0 rounded-lg shadow-lg"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <p class="text-xl text-center text-sky-800 mt-8 max-w-2xl mx-auto">
                If you want to surf find us at teampal surf bali
            </p>
        </div>
    </section>

</x-frontlayout>