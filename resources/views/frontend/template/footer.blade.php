

<footer class="bg-[#1C2635] text-white py-10">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
        <!-- Seção sobre a empresa -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Sobre Nós</h3>
            <p class="text-sm">
                Somos uma empresa de incubação de negócios dedicada a apoiar startups e empresas em crescimento, oferecendo recursos, mentoria e suporte para impulsionar seu sucesso.
            </p>
            <p class="py-2 text-xl font-semibold mb-4">Contactos</p>
            <div class="flex items-center text-sm gap-2 mt-2 hover:text-[#25A569]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>

                <p>(+258) 83 389 4947</p>
            </div>
            <div class="flex items-center text-sm gap-2 mt-2 hover:text-[#25A569]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>

                <p>incubadora@uem.mz</p>
            </div>
        </div>

        <!-- Links Rápidos -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Links Rápidos</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-[#25A569] transition">Início</a></li>
                <li><a href="#" class="hover:text-[#25A569] transition">Serviços</a></li>
                <li><a href="#" class="hover:text-[#25A569] transition">Projetos</a></li>
                <li><a href="#" class="hover:text-[#25A569] transition">Contato</a></li>
            </ul>
        </div>

        <!-- Redes Sociais -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Siga-nos</h3>
            <div class="flex space-x-4">
            <a href="#" class="text-white hover:text-[#25A569] transition-transform transform hover:scale-110">
                <img src="{{asset('images/logo/facebook.svg')}}" alt="" class="transition-transform duration-200 hover:scale-110">
            </a>
            <a href="#" class="text-white hover:text-[#25A569] transition-transform transform hover:scale-110">
                <img src="{{asset('images/logo/linkedin.svg')}}" alt="" class="transition-transform duration-200 hover:scale-110">
            </a>
                            
            </div>
        </div>
    </div>

    <div class="border-b border-white py-2"></div>
    <div class="text-center mt-8 text-xs text-gray-400 pt-2">
        &copy; 2024 Incubadora de Negócios da UEM. Todos os direitos reservados.
    </div>
</footer>

<!-- JS -->
    <script src="{{asset('js/script.js')}}"></script>   
<!-- END JS -->
</body>
</html>

