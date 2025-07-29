 <!-- FOOTER -->

 <!-- <footer class="bg-firstcolor text-amber-50 py-6">
     <div class="container mx-auto px-4 text-center text-sm text-amber-50">
         <p>&copy; 2025 TeamPal Surf Lesson. All rights reserved.</p>
         <div class="flex justify-center space-x-6 sm:space-x-10 mt-4">
             <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-facebook-f text-2xl"></i></a>
             <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-youtube text-2xl"></i></a>
             <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-instagram text-2xl"></i></a>
             <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-whatsapp text-2xl"></i></a>
         </div>
         <p>alamat</p>
         <p>email</p>
         <p>no tel</p>
     </div>
 </footer> -->

 <!-- FOOTER -->
 <footer class="bg-firstcolor text-amber-50 py-6 mt-10">
     <div class="container mx-auto px-4 text-sm text-amber-50">
         <!-- Konten Utama Footer (Kiri & Kanan) -->
         <div class="flex flex-col md:flex-row justify-between items-center md:items-start mb-4">
             <!-- Bagian Kiri: Alamat, Email, No. Telp -->
             <div class="text-center md:text-left mb-4 md:mb-0">
                 <p class="font-bold text-lg mb-2">Contact Us</p>
                 <p>Jl. Pura Selonding, Pecatu, Kec. Kuta Sel., Kabupaten Badung, Bali 80361</p>
                 <p>Bali, 80361</p>
                 <p>Email: teampalsurf@gmail.com</p>
                 <p>Telp: +62 821-4676-8463</p>
             </div>

             <!-- Bagian Kanan: Ikon Media Sosial dan Term and Condition -->
             <div class="flex flex-col items-center md:items-end space-y-4">
                 <!-- Ikon Media Sosial -->
                 <div class="flex justify-center space-x-6 sm:space-x-10">
                     <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-facebook-f text-2xl"></i></a>
                     <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-youtube text-2xl"></i></a>
                     <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-instagram text-2xl"></i></a>
                     <a href="#" class="text-amber-50 hover:text-sky-300"><i class="fab fa-whatsapp text-2xl"></i></a>
                 </div>
                 <!-- Term and condition (sekarang di bawah ikon) -->
                 <a href="{{ url('/terms-conditions') }}" class="text-amber-50 hover:text-sky-300 text-base">Terms & Conditions</a>
                 <a href="{{ url('/privacy-policy') }}" class="text-amber-50 hover:text-sky-300 text-base">Privacy Policy</a>
             </div>
         </div>

         <!-- Copyright (Tetap di tengah dan paling bawah) -->
         <p class="text-center mt-4 border-t border-amber-50 pt-4">&copy; 2025 TeamPal Surf. All rights reserved.</p>
     </div>
 </footer>