<?php
$depoimentos = array(
    'post_type' => 'depoimentos',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias',
            'field' => 'slug',
            'terms' => 'home'
        )
    )
);

$deps_query = new WP_Query($depoimentos);
?>

<section class="bg-gray-900 hidden lg:block">
    <div class="bg-left-bottom bg-no-repeat bg-[url('/wp-content/themes/tailpress/resources/images/1478sembg.png')] bg-contain bg-blend-multiply">
        <div class="px-4 flex py-14 lg:py-40">
            <div class="lg:w-1/3"></div>
            <div class="px-5 lg:w-2/3 lg:px-16">
                <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Comece hoje a mudança que deseja para sua vida profissional</h1>
                <p class="text-xl lg:text-3xl font-normal text-gray-300 mb-4">Você pode ter uma carreira alinhada com a vida que deseja, sem precisar escolher entre vida pessoa e profissional: você pode ter as duas funcionando bem!</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-900 lg:hidden">
    <div class="container pt-14">
        <h1 class="text-center mb-6 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Começe hoje a mudança que deseja para sua vida profissional</h1>
        <p class="text-center text-xl lg:text-3xl font-normal text-gray-300">Você pode ter uma carreira alinhada com a vida que deseja, sem precisar escolher entre vida pessoa e profissional: você pode ter as duas funcionando bem!</p>
    </div>
    <div class="h-96 bg-left-bottom bg-no-repeat bg-[url('/wp-content/uploads/2023/05/1478sembg.png')] bg-contain bg-blend-multiply">
    </div>
</section>

<section class="bg-center bg-no-repeat bg-[url('/wp-content/uploads/2023/05/backgroundEncontre.png')] bg-cover bg-blend-multiply">
    <div class="px-5 py-12 lg:py-32 lg:px-0 max-w-5xl mx-auto flex flex-col items-center">
        <h1 class="mb-12 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl">Escolha com segurança a carreira que está alinhada ao seu estilo de vida, que valoriza seus talentos e tem demanda de mercado.</h1>
        <p class="mb-10 text-center text-xl lg:text-3xl font-normal text-gray-600">Com o meu direcionamento, seguindo uma metodologia única e autoral já aplicada em mais de 100 profissionais, em diferentes países do mundo, você conseguirá ter a carreira que deseja.</p>
        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 cursor-pointer">Agendar sessão</a>
    </div>
</section>

<section class="px-5 py-12 lg:py-28 lg:px-0">
    <div class="max-w-7xl mx-auto">
        <h1 class="mb-20 text-center text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl">A orientação de carreira é um trabalho realizado de forma totalmente on-line para que você:</h1>
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="lg:w-1/2">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="p-4 flex items-center justify-center rounded-full bg-[#DA4437]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-2 pb-20">
                        <p class="text-lg font-semibold lg:text-2xl">Defina uma carreira alinhada ao estilo de vida que deseja.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="p-4 flex items-center justify-center rounded-full border border-[#DA4437]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-[#DA4437]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-2 pb-20">
                        <p class="text-lg font-semibold lg:text-2xl">Identifique tendências de mercado.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="p-4 flex items-center justify-center rounded-full bg-[#DA4437]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pt-2 pb-20">
                        <p class="text-lg font-semibold lg:text-2xl">Decida o seu próximo passo de carreira com segurança.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                        <div>
                            <div class="p-4 flex items-center justify-center rounded-full border border-[#DA4437]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-[#DA4437]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <!-- <div class="w-px h-full bg-gray-300"></div> -->
                    </div>
                    <div class="pt-2">
                        <p class="text-lg font-semibold lg:text-2xl">Desenhe seu plano de ação para saber exatamente o que precisa fazer para alcançar a carreira escolhida.</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <img src="/wp-content/uploads/2023/05/orientationPic.png" alt="" >
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-900 relative">
    <div class="z-20 container max-w-7xl mx-auto py-12 lg:py-20">
        <h1 class="mb-6 text-center text-3xl font-extrabold leading-none tracking-tight text-white md:text-5xl">Como funciona a Orientação de Carreira</h1>
        <p class="text-center text-xl font-normal text-gray-300 mb-12 lg:mb-20">Ao longo de 10 encontros realizados semanalmente, você passará pelas seguintes etapas:</p>
        <div id="accordionHowWorks" class="lg:max-w-2xl">
            <div class="mb-4">
                <h2 id="accordion-open-heading">
                    <button type="button" class="flex items-center justify-between w-full bg-gray-200 p-5 font-medium text-left text-gray-950 rounded-xl hover:bg-gray-400">
                        <span class="flex items-center">01. Sobre você</span>
                        <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-open-body" class="hidden">
                    <div class="p-5 bg-white rounded-b-xl">
                    <p class="mb-2 text-gray-500">Sessões dedicadas ao autoconhecimento, base para as demais etapas. Primeiro você precisa ter clareza sobre os elementos de sua personalidade vocacional, para depois verificar quais são as opções existentes no mercado de trabalho.</p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h2 id="accordion-open-heading">
                    <button type="button" class="flex items-center justify-between w-full bg-gray-200 p-5 font-medium text-left text-gray-950 rounded-xl hover:bg-gray-400">
                        <span class="flex items-center">02. Sobre o mercado de trabalho</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-open-body" class="hidden">
                    <div class="p-5 bg-white rounded-b-xl">
                    <p class="mb-2 text-gray-500">Sessões dedicadas ao conhecimento e análise do mercado de trabalho para que você faça uma escolha que alinhe o que você gosta de fazer com as opções em que há tendências de crescimento.</p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h2 id="accordion-open-heading">
                    <button type="button" class="flex items-center justify-between w-full bg-gray-200 p-5 font-medium text-left text-gray-950 rounded-xl hover:bg-gray-400">
                        <span class="flex items-center">03. Decisão</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-open-body" class="hidden">
                    <div class="p-5 bg-white rounded-b-xl">
                    <p class="mb-2 text-gray-500">Neste momento serão aplicadas técnicas para lhe ajudar a tomar a melhor decisão de carreira.</p>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h2 id="accordion-open-heading">
                    <button type="button" class="flex items-center justify-between w-full bg-gray-200 p-5 font-medium text-left text-gray-950 rounded-xl hover:bg-gray-400">
                        <span class="flex items-center">04. Planejamento de Carreira</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-open-body" class="hidden">
                    <div class="p-5 bg-white rounded-b-xl">
                    <p class="mb-2 text-gray-500">Etapa dedicada à construção do plano que norteará o que precisa fazer para alcançar o objetivo profissional que definiu na etapa 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block h-12 w-12 lg:h-16 lg:w-16 bg-gray-900 rotate-45 absolute -bottom-6 right-[45%] lg:right-[47%]"></div>
    <div class="lg:absolute bottom-0 right-0 lg:w-96 z-10">
        <img src="/wp-content/uploads/2023/05/1477sembgRight.png" alt="" class="lg:w-full">
    </div>
</section>

<section class="bg-[#EDF1F7] py-12 lg:py-28">
    <div class="container lg:max-w-7xl mx-auto">
        <h2 class="mb-12 text-center text-2xl font-semibold text-gray-900 md:text-5xl">Nessas sessões você terá acompanhamento individual, com atendimento totalmente personalizado para que consiga transformar esse sentimento de insatisfação em motivação.</h2>
        <h2 class="mb-12 text-center text-2xl font-semibold text-gray-900 md:text-5xl">São dez horas de acompanhamento profissional para você sair do status “estou perdida” para o status “sei o que quero e o que preciso fazer para chegar lá”.</h2>
    </div>
</section>

<section class="bg-[#090E34] relative overflow-hidden">
    <div class="w-[20rem] h-[20rem] rounded-full bg-gradient-to-r from-white/10 absolute -top-32 -left-32"></div>
    <div class="w-[20rem] h-[20rem] rounded-full bg-gradient-to-l from-white/10 absolute -bottom-32 -right-32"></div>
    <div class="px-5 py-12 lg:py-32 lg:px-0 max-w-5xl mx-auto flex flex-col items-center">
        <h1 class="mb-12 text-center text-3xl font-extrabold leading-none tracking-tight text-white md:text-5xl">Fale diretamente com um consultor de carreira da equipe Fabiana Abath para agendar sua sessão de diagnóstico</h1>
        <a href="#" class="text-white bg-white/20 hover:bg-white/10 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 cursor-pointer">Falar com um consultor de carreira</a>
    </div>
</section>

<section id="depoimentos" class="bg-blue-50">
    <div class="container lg:max-w-7xl px-6 py-10 mx-auto">
        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 capitalize lg:text-5xl">
                    O que dizem sobre meu trabalho
                </h1>
            </div>
        </div>
        <?php if ( $deps_query->have_posts() ) : ?>
            <div class="swiper-deps relative pt-10">
                <div class="swiper-wrapper py-5 h-[32rem]">
                    <?php while ( $deps_query->have_posts() ) : $deps_query->the_post(); ?>
                        <div class="p-8 shadow-md rounded-lg swiper-slide max-w-sm lg:w-1/3">
                            <p class="leading-loose text-gray-500">
                                <?php echo the_post_thumbnail()?>
                            </p>
                            <div class="mt-8 -mx-2">
                                <div class="mx-2">
                                    <h1 class="font-semibold text-gray-800"><?php echo the_title() ?></h1>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
                <div class="pagination-deps flex justify-between z-50 w-28 right-0 top-0 absolute">
                    <div class="swiper-button-prev block"></div>
                    <div class="swiper-button-next block"></div>
                </div>
            </div>
        <?php endif ?>
    </div>
</section>

<section class="px-5 py-16 lg:my-16 lg:px-16">
    <div class="mx-auto flex flex-col lg:flex-row items-center space-y-8 gap-16">
        <div class="lg:w-3/4">
            <h1 class="font-bold text-3xl mb-10">Especialista em gestão e desenvolvimento de carreira, psicóloga por formação. Mais de 20 anos de experiência na área de desenvolvimento humano e organizacional, com passagens por empresas nacionais e multinacionais.</h1>
            <div class="grid space-y-8">
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Pós-graduada em Gestão de Recursos Humanos pela Universidade Cândido Mendes.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>MBA em Gestão de Pessoas pela UFF (Universidade Federal Fluminense).</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Formada em Personal e Professional Coach pela SLAC (Sociedade Latino-Americana de Coaching).</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Mestranda em Tecnologias Emergentes em Educação pela Must University (Flórida, EUA).</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Certificada como HR Business Partner pela Mercer Learning Brasil. Associada da ABOP (Associação Brasileira de Orientação Profissional).</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Associada da ABOP (Associação Brasileira de Orientação Profissional).</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Mais de 500 líderes treinados ao longo da carreira.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="steelblue" height="20" width="20" viewBox="0 0 512 512"><path d="M16 0H144c5.3 0 10.3 2.7 13.3 7.1l81.1 121.6c-49.5 4.1-94 25.6-127.6 58.3L2.7 24.9C-.6 20-.9 13.7 1.9 8.5S10.1 0 16 0zM509.3 24.9L401.2 187.1c-33.5-32.7-78.1-54.2-127.6-58.3L354.7 7.1c3-4.5 8-7.1 13.3-7.1H496c5.9 0 11.3 3.2 14.1 8.5s2.5 11.5-.8 16.4zM432 336c0 97.2-78.8 176-176 176s-176-78.8-176-176s78.8-176 176-176s176 78.8 176 176zM264.4 241.1c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1L168 298.9c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1l-22.4-45.4z"></path></svg>
                    </div>
                    <p>Mais de 100 alunas formadas em Orientação de Carreira.</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 relative">
            <img src="/wp-content/uploads/2023/05/FZP_1478-scaled.jpg" alt="" class="rounded-md">
            <div class="absolute -left-8 -bottom-8 -z-50">
                <svg width="93" height="93" viewBox="0 0 93 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2.5" cy="2.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="2.5" cy="24.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="2.5" cy="46.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="2.5" cy="68.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="2.5" cy="90.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="24.5" cy="2.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="24.5" cy="24.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="24.5" cy="46.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="24.5" cy="68.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="24.5" cy="90.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="46.5" cy="2.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="46.5" cy="24.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="46.5" cy="46.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="46.5" cy="68.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="46.5" cy="90.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="68.5" cy="2.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="68.5" cy="24.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="68.5" cy="46.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="68.5" cy="68.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="68.5" cy="90.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="90.5" cy="2.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="90.5" cy="24.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="90.5" cy="46.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="90.5" cy="68.5" r="2.5" fill="#718C9C"></circle>
                    <circle cx="90.5" cy="90.5" r="2.5" fill="#718C9C"></circle>
                </svg>
            </div>
        </div>
    </div>
</section>