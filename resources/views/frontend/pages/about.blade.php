@include('frontend.template.header')

<!-- HOME HEADER -->
<section class="mx-auto">
    <div class="relative overflow-hidden">
        <img src="{{ asset('images/incubadora/First.jpg') }}" alt="Background" class="object-cover w-full h-[500px]">
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white p-4">
                <h1 class="text-4xl font-black font_roboto mb-2 uppercase px-8">
                    <span class="text-[#25A569]">Sobre</span> Nós
                </h1>
                <p class="px-8 font_roboto">
                    Conheça a nossa missão, visão e os valores que nos movem na Incubadora de Negócios da UEM.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- HOME HEADER -->

<!-- ABOUT -->
<section class="bg-[#E5F6EC] py-10">
    <div class="px-8">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-6">
                <img src="{{ asset('images/incubadora/second.jpg') }}" alt="Sobre Nós" class="object-cover w-full rounded-sm h-full">
            </div>
            <div class="col-span-12 md:col-span-6 py-5">
                <h1 class="text-4xl text-black uppercase font-bold text-start font_roboto">
                    Nossa Missão
                </h1>
                <p class="font_roboto py-4 text-black font-normal">
                    Promover o desenvolvimento de startups inovadoras e sustentáveis, fornecendo suporte técnico,
                    gerencial e infraestrutura adequada para que os empreendedores possam transformar suas ideias
                    em negócios de sucesso.
                </p>

                <h1 class="text-4xl text-black uppercase font-bold text-start font_roboto mt-10">
                Nossa Visão
                </h1>
                <p class="font_roboto py-4 text-black font-normal">
                    Ser reconhecida como a principal incubadora de negócios do país, conectando talentos
                    e oportunidades para impulsionar a inovação e o empreendedorismo.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->


<!-- VALORES -->
<section class="bg-[#F3FFF7] py-10">
    <div class="px-8">
        <h1 class="text-4xl text-black uppercase font-bold text-center font_roboto mb-5">
            Nossos Valores
        </h1>
        <div class="container">
            <div class="valores-wrapper">
                <div class="grid grid-cols-12 gap-4">
                    @foreach ([
                        'Inovação' => 'Estimulamos a busca constante por novas ideias e soluções criativas para impulsionar o progresso empresarial.',
                        'Colaboração' => 'Acreditamos no poder da colaboração e no compartilhamento de conhecimento para promover o crescimento e o sucesso mútuos.',
                        'Integridade' => 'Comprometemo-nos a agir com ética, transparência e honestidade em todas as nossas interações e decisões.',
                        'Empoderamento' => 'Buscamos capacitar os empreendedores, fornecendo-lhes as ferramentas, recursos e apoio necessários para alcançarem seus objetivos.',
                        'Excelência' => 'Buscamos a excelência em tudo o que fazemos, buscando continuamente melhorar e superar as expectativas em prol do sucesso de nossos clientes e parceiros.'
                    ] as $title => $description)
                        <div class="col-span-12 md:col-span-4">
                            <div class="valores-wrapper-single bg-white p-5 rounded-lg shadow-md 
                                transition-all duration-300 ease-in-out hover:bg-[#25A569] hover:shadow-lg
                                hover:text-white">
                                <h1 class="text-xl font-bold ">{{ $title }}</h1>
                                <p class="paragraph-1">{{ $description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- VALORES -->


<!-- CHAMADA PARA AÇÃO -->
<section class="bg-[#E5F6EC] py-10">
    <div class="px-8 text-center">
        <h1 class="text-4xl text-black uppercase font-bold mb-5 font_roboto">
            Junte-se a nós na construção do futuro
        </h1>
        <p class="font_roboto mb-5">
            Se você é um empreendedor em busca de apoio, entre em contato conosco e descubra como podemos ajudar a transformar sua ideia em realidade!
        </p>
        <a href="/contato" class="bg-[#25A569] text-white px-6 py-2 font-medium font_poppins mt-3 rounded-sm shadow-lg
            hover:bg-white hover:text-[#25A569] hover:border hover:border-[#25A569] 
            transition duration-300 ease-in-out">
            Entre em contato
        </a>
    </div>
</section>
<!-- CHAMADA PARA AÇÃO -->

@include('frontend.template.footer')
