           <!-- Desktop Menu -->
           <div class="hidden md:flex space-x-6 items-center font_roboto font-medium text-[14px] uppercase
                z-[9999]">
                <a href="{{route('frontend.home')}}" class="text-gray-700 hover:text-blue-600 
                {{request()->routeIs('frontend.home') ? 'text-[#25A569]':''}}">Início</a>
                 <!-- Desktop Dropdown -->
                 <div class="relative">
                    <button id="dropdownButton" class="flex items-center text-gray-700 hover:text-blue-600
                         focus:outline-none uppercase">
                        Incubadora
                        <svg class="ml-1 h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </button>
                    <div id="dropdownMenu" class="hidden absolute bg-white shadow-lg rounded mt-2 w-[200px]">
                        <a href="{{route('about')}}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Sobre Nós</a>
                        {{-- 
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Startups</a>
                            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Proponha sua startup</a>
                        --}}

                    </div>
                </div>
                <!--<a href="#" class="text-gray-700 hover:text-blue-600">Noticias</a>-->

                <a href="{{route('contact')}}" class="text-gray-700 hover:text-blue-600">Contacto</a>
            </div>


            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobileMenuButton" class="text-gray-700 focus:outline-none">
                    <!-- Icon (hamburger) -->
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>