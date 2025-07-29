<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Pal Travel - Surf Lesson and Trip</title>

    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <!-- Tambahkan ini di layout jika Alpine.js belum tersedia -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <style>
        .transition-bg {
            transition: background-image 1s ease-in-out;
        }
    </style>
</head>

<body class="font-sans antialiased text-sky-800">

    <!-- HEADER -->
    <x-frontheader></x-frontheader>

    {{$slot}}

    <!-- FOOTER -->
    <x-frontfooter></x-frontfooter>

    <!-- JAVASCRIPT (toggle menu) -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', () => {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
        const header = document.getElementById('header');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.remove('bg-transparent');
                header.classList.add('bg-firstcolor/50', 'backdrop-blur-md', 'shadow-md');
            } else {
                header.classList.remove('bg-firstcolor/50', 'backdrop-blur-md', 'shadow-md');
                header.classList.add('bg-transparent');
            }
        });

        // image slide
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll("#image-slider .slider-image");
            let current = 0;

            setInterval(() => {
                slides[current].classList.remove("opacity-100");
                slides[current].classList.add("opacity-0");

                current = (current + 1) % slides.length;

                slides[current].classList.remove("opacity-0");
                slides[current].classList.add("opacity-100");
            }, 4000); // ganti gambar setiap 4 detik
        });
    </script>

</body>

</html>