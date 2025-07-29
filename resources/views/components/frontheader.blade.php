 <!-- HEADER -->
 <!-- Tambahkan ini di layout jika Alpine.js belum tersedia -->
 <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

 <!-- HEADER -->
 <header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 ease-in-out bg-transparent py-2">
     <nav class="container mx-auto px-2 flex items-center justify-between flex-wrap">
         <!-- Logo -->
         <div class="flex items-center space-x-2">
             <a href="{{ url('/') }}" class="flex items-center space-x-2">
                 <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-20 w-auto object-contain rounded-full">
                 <span class="text-lg font-semibold text-amber-50">TeamPal Surf</span>
             </a>
         </div>

         <!-- Mobile Menu Button -->
         <button id="menu-btn" class="block md:hidden text-sky-800 focus:outline-none">
             <i class="fas fa-bars text-2xl"></i>
         </button>

         <!-- Navigation -->
         <ul id="menu"
             class="w-full hidden md:flex md:items-center md:w-auto mt-4 md:mt-0 flex-col md:flex-row pl-3 md:pl-0 space-y-4 md:space-y-0 md:space-x-6 text-left md:text-left">
             <li><a href="{{ url('/') }}" class="text-amber-50 hover:text-sky-300 font-medium block">Home</a></li>
             <li><a href="{{ route('surf-lessons.index') }}" class="text-amber-50 hover:text-sky-300 font-medium block">Surf Lesson</a></li>

             <!-- Surf Trips Dropdown -->
             <li x-data="{ open: false }" class="relative w-full md:w-auto">
                 <button
                     @click="open = !open"
                     class="text-amber-50 hover:text-sky-300 font-medium w-full text-left md:text-center md:w-auto block focus:outline-none">
                     Surf Trips
                 </button>

                 <ul
                     x-show="open"
                     x-transition
                     @click.outside="open = false"
                     class="mt-2 md:absolute md:mt-2 bg-white shadow-md text-sm rounded-md w-full md:w-40 z-50 space-y-1">
                     @isset($categoryIslands)
                     @foreach ($categoryIslands as $category)
                     <li>
                         <a href="{{ route('surftrips.byCategory', $category->slug) }}"
                             class="block px-4 py-2 text-gray-700 hover:bg-sky-100">
                             {{ $category->name }}
                         </a>
                     </li>
                     @endforeach
                     <li>
                         <hr class="border-t border-gray-200 my-1">
                     </li>
                     <li>
                         <a href="{{ route('surftrips.index') }}"
                             class="block px-4 py-2 text-gray-700 hover:bg-sky-100 font-semibold">
                             All Surf Trips
                         </a>
                     </li>
                     @else
                     <li class="px-4 py-2 text-gray-400 italic">No Categories</li>
                     @endisset
                 </ul>
             </li>


             <li><a href="{{ route('frontend.about') }}" class="text-amber-50 hover:text-sky-300 font-medium block">About</a></li>
             <li><a href="{{ route('frontend.contact') }}" class="text-amber-50 hover:text-sky-300 font-medium block">Contact</a></li>
         </ul>
     </nav>
 </header>

 <section
     id="hero-section"
     class="relative h-[80vh] sm:h-[70vh] md:h-[60vh] flex items-center justify-center overflow-hidden">
     {{-- Image Slider --}}
     <div id="image-slider" class="absolute inset-0 w-full h-full overflow-hidden ">
         <img src="{{ asset('images/section1.jpg') }}" class="slider-image absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000">
         <!-- <img src="{{ asset('images/section2.jpg') }}" class="slider-image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000">
         <img src="{{ asset('images/section3.jpg') }}" class="slider-image absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"> -->
     </div>

     {{--Darkening Overlay--}}
     <div class="absolute inset-0 bg-firscolor opacity-20"></div>

     {{--Gradient Overlay for brighter center--}}
     <div class="absolute inset-0 bg-gradient-to-l from-firscolor via-transparent to-firscolor"></div>


     {{--Hero Content--}}
     <div class="relative pt-10 z-10 text-center md:text-left px-4 sm:px-6 md:px-12 max-w-3xl">
         <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-amber-50 font-extrabold leading-tight mb-6 tracking-wide drop-shadow-lg">
             CAN WE BRING YOU TO THE <span class="text-sky-300">BEACH?</span>
         </h1>
         <!-- <button class="bg-sky-300 hover:bg-amber-50 text-amber-50 hover:text-sky-300 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 transform hover:scale-105 mb-8">
             Book Now
         </button> -->
     </div>

     {{--Wave Shape at the Bottom--}}
     <div class="absolute bottom-0 left-0 w-full z-20">
         <svg class="w-full h-16 sm:h-20 md:h-24 fill-white" viewBox="0 0 100 100" preserveAspectRatio="none">
             <path d="M0,70 Q25,30 50,70 T100,70 L100,100 L0,100 Z" />
         </svg>
     </div>
 </section>