    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-lg font_roboto font-medium text-[14px] uppercase ">
        <a href="#" class="block px-8 py-2 text-gray-700 hover:bg-gray-100">Início</a>
        <!-- Mobile Dropdown -->
        <div class="relative">
            <button id="mobileDropdownButton" class="w-full text-left px-8  py-2 flex items-center text-gray-700 
                hover:bg-gray-100 focus:outline-none uppercase">
                Incubadora
                <svg class="ml-1 h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
            <div id="mobileDropdownMenu" class="hidden pl-8">
                <a href="{{route('about')}}" class="block px-8 py-2 text-gray-700 hover:bg-gray-100">Sobre Nós</a>
                {{-- 
                    <a href="#" class="block px-8 py-2 text-gray-700 hover:bg-gray-100">Startups</a>
                    <a href="#" class="block px-8 py-2 text-gray-700 hover:bg-gray-100">Proponha sua startup</a>
                --}}
            </div>
        </div>
        <div class="flex flex-col ">
            <!--<a href="#" class="text-gray-700 hover:text-blue-600 px-8 py-2">Noticias</a>-->
            <a href="{{route('contact')}}" class="text-gray-700 hover:text-blue-600 px-8 py-2">Contacto</a>
        </div>
      
    </div>