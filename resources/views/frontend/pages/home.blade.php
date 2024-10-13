
@include('frontend.template.header')
<!-- HOME HEADER -->
<section class="mx-auto">
    <div class="relative overflow-hidden">
        <img src="{{ asset('images/incubadora/First.jpg') }}" alt="Background" class="object-cover w-full h-[500px]">
        <div class="absolute inset-0 bg-black opacity-70 h-[500px]"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white p-4">
                <h1 class="text-4xl font-black font_roboto mb-2 uppercase px-8">
                    <span class="text-[#25A569] ">Transformando</span> ideias em 
                    <span class="text-[#25A569]">Empreendimentos</span>
                </h1>
                <p class=" px-8 font_roboto">
                Bem-vindo à Incubadora de Negócios da  UEM, onde o potencial se encontra com a oportunidade.<br>
                Juntos, vamos construir o futuro  empresarial que você merece. Vamos começar a criar e inovar hoje!
                </p>
                <a href="#" class="bg-[#25A569] text-white px-6 py-2 font-medium font_poppins mt-10 rounded-sm shadow-lg
                    hover:bg-white hover:text-[#25A569] hover:border hover:border-[#25A569] 
                    transition duration-300 ease-in-out block w-full text-center mx-auto" style="width: 240px;">
                    <div class="flex justify-center items-center">
                        Mais informações
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="currentColor" class="size-5 ml-2 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- HOME HEADER -->

<!-- ABOUT -->
<section class="bg-[#E5F6EC]  py-10">
    <div class="px-8">
        <div class="grid grid-cols-12 gap-4"> <!-- Adicionei gap para espaçamento -->
            <div class="col-span-12 md:col-span-6">
            <img src="{{ asset('images/incubadora/First.jpg') }}" alt="Background" class="object-cover w-full 
                rounded-sm h-full">
            </div>
            <div class="col-span-12 md:col-span-6 py-5">
                <h1 class="text-4xl text-black uppercase font-bold text-start font_roboto">
                    Incubadora de Negocios da UEM
                </h1>
                <p class="text-[#25A569] font-medium py-2 font_roboto">
                    Incubando mais de 25 Startups a nível Nacional
                </p>
                <p class="font_roboto py-4 text-black font-normal">
                    A Incubadora de Negócios da UEM é um ambiente de inovação e  empreendedorismo que tem como 
                    objetivoapoiar o desenvolvimento de novos negócios e  a consolidação de empresas inovadoras. 
                    Através de umametodologia própria, oferecemos suporte  técnico, gerencial e infraestrutura 
                    para que os empreendedorespossam transformar suas ideias em negócios  de sucesso.
                </p>
                <a href="#" class="bg-[#25A569] text-white px-6 py-2 font-medium font_poppins mt-3 rounded-sm shadow-lg
                    hover:bg-white hover:text-[#25A569] hover:border hover:border-[#25A569] 
                    transition duration-300 ease-in-out block w-full text-center" style="width: 180px;">
                    <div class="flex justify-center items-center">
                        Saiba mais
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                            stroke="currentColor" class="size-5 ml-2 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->

 <!-- RESULTADOS -->
<section class="bg-[#F3FFF7] py-10">
    <div class="px-8">
        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-12 md:col-span-6 py-5 mt-10">
                <h1 class="text-4xl text-black uppercase font-bold text-start font_roboto">
                    <span class="text-[#25A569]">resumo</span>  dos resultados<br> obtidos em 
                    <span class="text-[#25A569]">2 anos</span> 
                </h1>
                <div class="flex gap-10 mt-10">
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-4xl text-black uppercase font-bold font_roboto text-[#25A569]">
                            <span class="text-[#25A569]">+32</span>
                        </h1>
                        <p>
                            Startups incubadas
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center">
                        <h1 class="text-4xl text-black uppercase font-bold font_roboto">
                            <span class="text-[#25A569]">17</span>
                        </h1>
                        <p>
                            Startups graduadas
                        </p>
                    </div>
                </div>
            </div>
            <!--col-->
            <div class="col-span-12 md:col-span-6">
                <img src="{{ asset('images/incubadora/graduacao.jpg') }}" alt="Background" class="object-cover w-full 
                    rounded-sm h-[400px]">
            </div>
            <!--col-->
        </div>
    </div>
</section>
<!-- RESULTADOS -->

<!-- SLIDER -->
    <div class="bg-[#E5F6EC]">
        <div class="p-8 mx-10">
            <div class="slider-container">
                <div class="slides" id="slides">
                    @for($i = 0; $i < 5;$i++)
                        <div class="slide">
                            <div class="grid grid-cols-12 gap-4">

                                <div class="col-span-12 md:col-span-6">
                                    <img src="{{ asset('images/incubadora/graduacao.jpg') }}" alt="Background" 
                                        class="object-cover w-full rounded-sm h-[350px]">
                                </div>
                                <!--col-->
                                <div class="col-span-12 md:col-span-6 py-5 mt-5">
                                    <h1 class="text-3xl text-semibold font-bold font_roboto">
                                        <span class="flex items-center text-center">
                                            Testemunho de algumas Startups da comunidade
                                        </span>
                                    </h1>
                                    <div class="flex italic items-center">
                                        <div class="px-5">
                                            <p class="text-center font_poppins font-light py-5">
                                                <span>"</span>
                                                Desde que entrámos no programa de incubação, a nossa startup deu um 
                                                salto enorme. Com o apoio da equipa, conseguimos desenvolver uma visão
                                                mais clara do nosso modelo de negócio e expandir a nossa rede de contactos
                                                estratégicos.
                                                <span>"</span>
                                            </p>
                                            <p class="text-center font_poppins font-medium">
                                                Ercilia
                                            </p>
                                            <p class="text-center font_poppins font-normal text-xs">
                                                Diretora da COAP
                                            </p>
                                        </div>
                                    </div>  
                                </div>
                                <!--col-->
                                
                            </div>
                            <!--grid -->
                        </div>
                    @endfor
                </div>
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
            </div>
        </div>
    </div> 
<!-- SLIDER -->

<!-- CAMPANHAS -->
    <div class="bg-[#F3FFF7]">
        <div class="px-8 py-10">
            <h1
            class="text-black uppercase font-bold text-center  text-4xl
                md:text-start font_roboto my-5">
            <span class="text-[#25A569]">eventos</span> frequentes
            </h1>
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 md:col-span-4 relative mx-2 md:mx-0">
                    <div class="overflow-hidden">
                    <img
                        src="{{asset('images/home/hackaton.jpg')}}"
                        alt="Image 2"
                        class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110 rounded-md"
                    />
                    <!-- Overlay para a Coluna 2 -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-md"
                    >
                        <div class="text-center">
                        <h2 class="text-white text-xl font-semibold mb-1 font_poppins mb-10 text-[30px]">
                            HACKATONS
                        </h2>
                            <div class="flex justify-center">
                                <a href="#" class="text-white border border-white px-6 py-2 font-medium font_poppins mt-3 
                                            rounded-sm shadow-lg hover:bg-white hover:text-[#25A569] hover:border 
                                            hover:border-[#25A569] transition duration-300 ease-in-out block
                                            w-full text-center" style="width: 180px;">
                                    <div class="flex justify-center items-center">
                                        Saiba mais
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                                            stroke="currentColor" class="size-5 ml-2 font-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- COL -->
                <div class="col-span-12 md:col-span-4 relative mx-2 md:mx-0">
                    <div class="overflow-hidden">
                    <img
                        src="{{asset('images/home/bootcamp.jpg')}}"
                        alt="Image 2"
                        class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110 rounded-md"
                    />
                    <!-- Overlay para a Coluna 2 -->
                    <div
                        class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-md"
                    >
                        <div class="text-center">
                        <h2 class="text-white text-xl font-semibold mb-1 font_poppins mb-10 text-[30px]">
                            BOOTCAMPS
                        </h2>
                            <div class="flex justify-center">
                                <a href="#" class="text-white border border-white px-6 py-2 font-medium font_poppins mt-3 
                                            rounded-sm shadow-lg hover:bg-white hover:text-[#25A569] hover:border 
                                            hover:border-[#25A569] transition duration-300 ease-in-out block
                                            w-full text-center" style="width: 180px;">
                                    <div class="flex justify-center items-center">
                                        Saiba mais
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                                            stroke="currentColor" class="size-5 ml-2 font-bold">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- COL -->
                <div class="col-span-12 md:col-span-4 relative mx-2 md:mx-0">
                    <div class="overflow-hidden">
                        <img
                            src="{{asset('images/home/coding_girls.jpg')}}"
                            alt="Image 2"
                            class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110 
                            rounded-md"
                        />
                        <!-- Overlay para a Coluna 2 -->
                            <div
                                class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-md"
                            >
                                <div class="text-center">
                                <h2 class="text-white text-xl font-semibold mb-1 font_poppins mb-10 text-[30px]">
                                    CODDING GIRLS
                                </h2>
                                <div class="flex justify-center">
                                    <a href="#" class="text-white border border-white px-6 py-2 font-medium font_poppins mt-3 
                                                rounded-sm shadow-lg hover:bg-white hover:text-[#25A569] hover:border 
                                                hover:border-[#25A569] transition duration-300 ease-in-out block
                                                w-full text-center" style="width: 180px;">
                                        <div class="flex justify-center items-center">
                                            Saiba mais
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                                                stroke="currentColor" class="size-5 ml-2 font-bold">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL -->
            </div>
        </div>
    </div>
<!-- CAMPANHAS -->

<!-- SEJA APOIADOR -->
    <div class="bg-[#E5F6EC]">
        <div class="px-8 py-10">
            <div class="grid grid-cols-12 bg-[#25A569]">
                <!-- Texto à esquerda -->
                <div
                    class="col-span-12 md:col-span-6 flex items-center md:items-start justify-center 
                    text-white text-2xl flex-col mx-10 py-5">
                    <h1
                    class="text-white font-black md:text-[30px] text-[20px] text-center md:text-start font_roboto"
                    >
                    Seja apoiador da incubardora de negocios da UEM
                    </h1>
                    <p class="text-[14px] font_roboto text-white leading-[1.5] mt-2">
                    Sua participação como apoiador não apenas fortalecerá o ecossistema empreendedor da
                    UEM, mas também proporcionará benefícios tangíveis para sua empresa. Desde
                    oportunidades de networking até visibilidade da marca, estamos comprometidos em
                    oferecer um programa de apoio personalizado que atenda às suas necessidades e
                    objetivos específicos.
                    </p>
                    <a href="/about" class="text-white bg-[#1C2635] border border-[#1C2635] py-2 px-10 rounded-sm font-bold mt-5 md:mt-10 text-[15px] uppercase
                    hover:bg-white hover:text-[#25A569] hover:border-[#25A569] transition duration-300 ease-in-out text-center">
                        Seja Parceiro
                    </a>
                </div>
                <!-- Imagem à direita -->
                <div class="col-span-6 flex justify-center items-center hidden md:block">
                    <img
                    src="{{asset('images/home/apoiador.jpg')}}"
                    alt="Imagem"
                    class="w-full h-auto object-cover rounded-bl-[350px]"
                    />
                </div>
            </div>
        </div>
    </div>
<!-- SEJA APOIADOR -->

<!-- INSPIRATE -->
    <div class="bg-[#F3FFF7] px-8 py-10">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6 ">
                <div class="col-span-12 md:col-span-6 mx-2 md:mx-10 py-5">
                    <h1 class="font-black text-4xl text-center md:text-start font_roboto
                        mt-[0px] md:mt-[100px]">
                        <span class="text-[#25A569]">INSPIRA-TE</span>
                    </h1>
                    <p class="text-[15px] font_roboto text-white leading-[1.5] mt-2" style="color:#1C2635;">
                        Explore histórias inspiradoras e descubra como startups inovadoras estão  transformando
                        ideias em realidades de sucesso. Veja empreendimentos que  estão fazendo a diferença, 
                        superando desafios e alcançando novos  patamares no ecossistema de startups. Deixe-se 
                        inspirar por suas  jornadas, aprenda com suas experiências e veja como a inovação pode  
                        abrir caminho para o futuro. Junte-se a nós e inspire-se para  transformar sua própria 
                        visão em sucesso.
                    </p>
                    <a href="#" class="bg-[#25A569] text-white px-6 py-2 font-medium font_poppins mt-3 rounded-sm shadow-lg
                        hover:bg-white hover:text-[#25A569] hover:border hover:border-[#25A569] 
                        transition duration-300 ease-in-out block w-full text-center" style="width: 250px;">
                        <div class="flex justify-center items-center">
                            QUERO SABER MAIS
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" 
                                stroke="currentColor" class="size-5 ml-2 font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 relative flex items-center justify-center mt-10">
                <!-- Imagem 1 (base) -->
                <img src="{{asset('images/incubadora/Group_5.svg')}}" alt="Imagem 1">
            </div>

        </div>
    </div>
<!-- INSPIRATE -->

<!-- NOTICIAS -->
    <div class="bg-[#E5F6EC] px-8 py-10">
        <h1 class="text-[#1C2635] font-black text-4xl text-center font_roboto uppercase py-5">
            Noticias
        </h1>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-6">
                <div class="relative">
                    <a href="{{route('articles.single',1)}}">
                         <!-- Imagem com Overlay -->
                        <img src="{{asset('images/incubadora/graduacao.jpg')}}" alt="Descrição da Imagem" 
                            class="w-full h-[215px] md:h-[615px] object-cover">

                        <!-- Overlay de Texto -->
                        <div class="absolute inset-0 overlay-gradient
                             bg-opacity-100 flex items-end justify-center ">
                            <div class="p-4 text-white text-center">
                                <h3 class="text-2xl font-bold font_roboto font-light">
                                    Realização da primeira graduação de Startups na Incubadora de Negócios da UEM
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6">
                <div class="grid grid-cols-1 gap-4">
                    <div class="relative mx-auto">
                        <a href="{{route('articles.single',2)}}">
                            <!-- Imagem com Overlay -->
                            <img src="{{asset('images/home/visita.jpg')}}" alt="Descrição da Imagem" 
                                class="w-[700px] h-[215px] md:h-[300px] object-cover">

                            <!-- Overlay de Texto -->
                            <div class="absolute inset-0 overlay-gradient
                                 bg-opacity-100 flex items-end justify-center ">
                                <div class="p-4 text-white text-center">
                                    <h3 class="text-2xl font-bold font_roboto font-light">
                                        Visita da Universidade de Tallin as instalações da Incubadora
                                        de Negócios da UEM
                                    </h3>
                                </div>
                            </div>
                        </a>
                       
                    </div>
                    <div class="relative mx-auto">
                        <!-- Imagem com Overlay -->
                        <a href="{{route('articles.single',3)}}">
                            <img src="{{asset('images/home/coap.jpg')}}" alt="Descrição da Imagem" 
                                class="w-[700px] h-[215px] md:h-[300px] object-cover">

                            <!-- Overlay de Texto -->
                            <div class="absolute inset-0 overlay-gradient
                                 bg-opacity-100 flex items-end justify-center ">
                                <div class="p-4 text-white text-center">
                                    <h3 class="text-2xl font-bold font_roboto font-light">
                                        A Incubadora de Negócios da Universidade Eduardo Mondlane graduou na manhã de
                                        hoje no seu recinto, 17 start-ups. 
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- NOTICIAS -->


<!-- PARCEIROS -->
    <div class="bg-[#F3FFF7] px-8 py-10">
        <div class="flex justify-center">
            <h1 class="font-black text-4xl text-center md:text-start font_roboto uppercase">
                <span class="text-[#25A569]">Nossos Parceiros</span>
            </h1>
        </div>

        <div class="flex justify-center mt-20 gap-5 items-baseline">
            <img src="{{asset('images/logo/CIES_logo.png')}}" class="w-32 md:w-48 h-auto object-contain">
            <img src="{{asset('images/logo/logo_espaco_transparente.png')}}" class="w-32 md:w-48 h-auto object-contain">
            <img src="{{asset('images/logo/Logo_Politecnico_Milano.png')}}" class="w-32 md:w-48 h-auto object-contain">
        </div>

    </div>
<!-- PARCEIROS -->

<!-- INSCRICAO -->
    <div class="bg-[#E5F6EC] px-8">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-6 py-20">
                <h1 class="font-black text-4xl text-center md:text-start font_roboto px-5">
                    <span class="text-[#25A569]">INSCREVA-SE</span> PARA RECEBER 
                    <span class="text-[#25A569]">OPORTUNIDADES</span>
                </h1>
                <p class="text-[15px] font_roboto text-white leading-[1.5] mt-2 px-5" style="color:#1C2635;">
                    Por que esperar por uma chance quando você pode criá-la? Ao se inscrever, você estará abrindo 
                    as portas para um mundo de possibilidades. Seja o primeiro a saber sobre oportunidades de 
                    carreira, eventos emocionantes, ofertas especiais e muito mais.
                </p>
            </div>
            <!--- col -->
            <div class="col-span-12 md:col-span-6">
                <form class="py-20">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 md:col-span-6">
                            <input type="text" placeholder="Nome" class="w-full h-12 px-4 border border-gray-300 
                            rounded-sm focus:outline-none focus:ring-1 focus:ring-[#1C2635]">
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <input type="email" placeholder="Endereço e-mail" 
                            class="w-full h-12 px-4 border border-gray-300 rounded-sm focus:outline-none 
                            focus:ring-1 focus:ring-[#1C2635]">
                        </div>
                    </div>
                    <div class="col-span-12 mt-4">
                        <button type="submit" class="w-full h-12 bg-[#1C2635] text-white rounded-sm 
                                shadow hover:bg-white hover:text-[#25A569] transition duration-300">
                                Subscrever
                        </button>
                    </div>
                </form>
            </div>
           <!--- col -->
        </div>
    </div>
<!-- INSCRICAO -->
@include('frontend.template.footer')