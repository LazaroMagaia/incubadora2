@include('frontend.template.header')

    <!-- Cabeçalho -->
    <header class="bg-[#25A569] py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl font-bold text-white px-8">
                Realização da primeira graduação de Startups na Incubadora de Negócios da UEM
            </h1>
            <!--<p class="text-white mt-2">Uma breve descrição do artigo.</p>-->
        </div>
    </header>

    <!-- Conteúdo do Artigo e Barra Lateral -->
    <main class="container mx-auto mt-8 flex py-10">
        <article class="w-3/4 p-4 bg-white rounded-lg shadow-md">
            {{-- <h2 class="text-2xl font-semibold mb-4">Subtítulo do Artigo</h2> --}}
            <div class="relative mb-4">
                <img src="{{ asset('images/incubadora/graduacao.jpg') }}" 
                    alt="Imagem do Subtítulo" 
                    class="w-full h-[250px] object-cover rounded">
                <div class="absolute inset-0 overlay-gradient flex items-end justify-center">
                    <!--<span class="text-white text-lg font-bold">Texto do Overlay</span>-->
                </div>
            </div>
            <p class="mb-4 text-md font-light">
                Um momento ímpar que contou com a presença do Magnífico Reitor da Universidade Eduardo Mondlane, 
                da Vice Directora da Agência Itáliana de Cooperação para o Desenvolvimento (financiador e parceiro 
                da Incubadora de Negócios da UEM), entidades governamentais e  não governamentais, instituições 
                públicas e privadas de variados sectores de actuação, que puderam testemunhar o momento e interagir
                com os novos empreendedores do mercado.Este é o momento em que as startups graduadas dão um passo
                para a alcançar grandes resultados futuros!
            </p>
            
            {{-- 
                #Educação #Inovação #Empreendedorismo
                <ul class="list-disc list-inside mb-4">
                    <li>Primeiro ponto importante</li>
                    <li>Segundo ponto importante</li>
                    <li>Terceiro ponto importante</li>
                </ul>
                <p>Para mais informações, você pode adicionar referências ou links úteis.</p>
            --}}
           
        </article>

        <!-- Barra Lateral -->
        <aside class="w-1/4 ml-4">
            <div class="bg-white rounded-lg shadow-md p-4">
                <h3 class="text-lg font-semibold mb-2">Notícias Relacionadas</h3>
                <ul>
                    {{-- 
                        <li class="mb-6 flex flex-col">
                            <img src="{{ asset('images/incubadora/graduacao.jpg') }}" 
                                alt="Imagem Relacionada 1" 
                                class="w-full h-24 object-cover rounded mb-2">
                            <a href="" class="text-[#25A569] hover:underline text-sm font-medium mb-1">
                                Realização da primeira graduação de Startups na Incubadora de Negócios da UEM
                            </a>
                            <p class="text-[#25A569] text-xs font-light">13-10-2024</p>
                        </li>

                    --}}
                    
                    <li class="mb-6 flex flex-col">
                        <img src="{{asset('images/home/visita.jpg')}}" 
                            alt="Imagem Relacionada 1" 
                            class="w-full h-24 object-cover rounded mb-2">
                        <a href="{{route('articles.single',2)}}" 
                            class="text-[#25A569] hover:underline text-sm font-medium mb-1">
                            Visita da Universidade de Tallin as instalações da Incubadora
                            de Negócios da UEM
                        </a>
                        <p class="text-[#25A569] text-xs font-light">13-10-2024</p>
                    </li>

                    <li class="mb-6 flex flex-col">
                        <img src="{{asset('images/home/coap.jpg')}}" 
                            alt="Imagem Relacionada 1" 
                            class="w-full h-24 object-cover rounded mb-2">
                        <a href="{{route('articles.single',3)}}" 
                            class="text-[#25A569] hover:underline text-sm font-medium mb-1">
                            A Incubadora de Negócios da Universidade Eduardo Mondlane graduou na manhã de
                            hoje no seu recinto, 17 start-ups.
                        </a>
                        <p class="text-[#25A569] text-xs font-light">13-10-2024</p>
                    </li>
                </ul>
            </div>
        </aside>
    </main>

    {{-- 
         <!-- Seção de Comentários -->
    <section class="container mx-auto mt-8 p-4 bg-white rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-2">Comentários</h3>
        <form class="mb-4">
            <textarea class="w-full p-2 border rounded" rows="4" placeholder="Escreva seu comentário..."></textarea>
            <button type="submit" class="mt-2 bg-[#25A569] text-white py-2 px-4 rounded">Enviar Comentário</button>
        </form>
        <div class="border-t pt-4">
            <div class="mb-2">
                <strong>Usuário1:</strong> Este é um comentário interessante!
            </div>
            <div>
                <strong>Usuário2:</strong> Concordo com os pontos levantados no artigo.
            </div>
        </div>
    </section>
    --}}
   

@include('frontend.template.footer')