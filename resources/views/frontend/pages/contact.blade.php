@include('frontend.template.header')

<!-- CONTACT HEADER -->
<section class="mx-auto">
    <div class="relative overflow-hidden">
        <img src="{{ asset('images/incubadora/First.jpg') }}" alt="Background" class="object-cover w-full h-[500px]">
        <div class="absolute inset-0 bg-black opacity-70 h-[500px]"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white p-4">
                <h1 class="text-4xl font-black font_roboto mb-2 uppercase px-8">
                    Fale <span class="text-[#25A569]">Conosco</span>
                </h1>
                <p class="px-8 font_roboto">
                    Estamos aqui para ajudar! Preencha o formulário abaixo ou entre em contato através das nossas informações.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT HEADER -->

<!-- CONTACT FORM -->
<section class="bg-[#E5F6EC] py-10">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-6">
                <h2 class="text-3xl text-black uppercase font-bold font_roboto mb-4">Entre em Contato</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nome:</label>
                        <input type="text" id="name" name="name" class="border border-gray-300 p-2 w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">E-mail:</label>
                        <input type="email" id="email" name="email" class="border border-gray-300 p-2 w-full rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Mensagem:</label>
                        <textarea id="message" name="message" class="border border-gray-300 p-2 w-full rounded" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="bg-[#25A569] text-white px-6 py-2 font-medium font_poppins rounded shadow-lg hover:bg-white hover:text-[#25A569] transition duration-300 ease-in-out">
                        Enviar
                    </button>
                </form>
            </div>

            <div class="col-span-12 md:col-span-6">
                <h2 class="text-3xl text-black uppercase font-bold font_roboto mb-4">Informações de Contato</h2>
                <p class="text-black font_roboto mb-2"><strong>Endereço:</strong> Rua Exemplo, 123, Cidade, Estado</p>
                <p class="text-black font_roboto mb-2"><strong>Telefone:</strong> (11) 1234-5678</p>
                <p class="text-black font_roboto mb-2"><strong>E-mail:</strong> contato@exemplo.com</p>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT FORM -->

<!-- MAP -->
<section class="py-10">
    <div class="container mx-auto px-8">
        <h2 class="text-3xl text-black uppercase font-bold font_roboto mb-4 text-center">Nosso Local</h2>
        <div class="relative overflow-hidden">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14349.93754074731!2d32.6035601!3d-25.9521498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee69a4eb97f1a8f%3A0xa2740b06f55a4873!2sUniversidade%20Eduardo%20Mondlane!5e0!3m2!1spt-PT!2smz!4v1728846906400!5m2!1spt-PT!2smz" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>
<!-- MAP -->

@include('frontend.template.footer')
