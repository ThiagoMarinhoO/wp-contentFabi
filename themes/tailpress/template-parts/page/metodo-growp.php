<?php
$args = [
    'post_type' => 'depoimentos',
    'posts_per_page' => -1
];

$deps = new WP_Query($args);
?>
<section class="bg-gray-900">
    <div class="bg-left-bottom bg-no-repeat bg-[url('/wp-content/themes/tailpress/resources/images/1478sembg.png')] bg-contain bg-blend-multiply">
        <div class="px-4 flex py-14 lg:py-40">
            <div class="lg:w-1/3"></div>
            <div class="px-5 lg:w-2/3 lg:px-16">
                <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Aprenda a trabalhar como Orientadora de Carreira</h1>
                <p class="text-xl lg:text-3xl font-normal text-gray-300 mb-4">A única capacitação profissional da área totalmente online reconhecida pelo MEC</p>
                <p class="text-xl lg:text-3xl font-normal text-gray-300">O método GROWP oferece os elementos fundamentais para quem deseja trabalhar  na área,  ainda que não seja psicólogo</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white lg:max-w-7xl mx-auto px-5 py-12">
    <div class="container mx-auto">
        <div>
            <h2 class="text-center text-4xl font-bold mb-20">Você aprenderá a realizar cinco serviços de carreira:</h2>
        </div>
        <div class="grid grid-cols-3 gap-10">
            <div class="w-3/3">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase1.png">
                    <h2 class="my-5 font-bold text-2xl">Desenvolvimento profissional</h2>
                    <p>para pessoas que estão se sentindo estagnadas profissionalmente e precisam de ajuda para definir o próximo passo de carreira e desenhar o plano de desenvolvimento profissional.</p>
                </div>
            </div> 
            <div class="w-3/3">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase2.png">
                    <h2 class="my-5 font-bold text-2xl">Orientação para aposentadoria</h2>
                    <p>para pessoas que estão prestes a se aposentar e querem continuar trabalhando, a escolherem uma nova carreira alinhada com sua nova fase de vida.</p>
                </div>
            </div> 
            <div class="w-3/3">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase3.png">
                    <h2 class="my-5 font-bold text-2xl">Desenvolvimento da Liderança</h2>
                    <p>para pessoas que queiram suporte para se desenvolver como líderes.</p>
                </div>
            </div> 
            <div class="w-3/3">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase4.png">
                    <h2 class="my-5 font-bold text-2xl">Planejamento de Carreira</h2>
                    <p>para profissionais que desejam desenhar o seu plano de carreira, ou plano de desenvolvimento individual.</p>
                </div>
            </div> 
            <div class="w-3/3">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase5.png">
                    <h2 class="my-5 font-bold text-2xl">Transição de Carreira</h2>
                    <p>para profissionais que desejam mudar de carreira, mas não fazem ideia do que querem.</p>
                </div>
            </div> 
        </div>
        <!-- <div class="mx-6 md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">
                    Depoimentos
                </h1>
            </div>

            <div class="flex justify-between mt-8 md:mt-0">
                <button title="left arrow" class="p-4 mx-3 text-gray-800 transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button title="right arrow" class="p-4 text-gray-800 transition-colors duration-300 border rounded-full rtl:-scale-x-100 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div> -->
    </div>
</section>

<section class="bg-gradient-to-br from-gray-900 via-gray-900 to-blue-900 px-5 py-12">
    <div class="container mx-auto">
        <div>
            <h2 class="text-center text-4xl font-bold mb-20 text-white">Mais de 100 alunas foram formadas pela Fabiana Abath e já estão trabalhando com Orientação de Carreira do jeito certo e tendo execentes resultados nos seus atendimentos. </h2>
        </div>
        <?php
        if ( $deps->have_posts() ) : ?>
            <div class="grid grid-cols-4 gap-10 px-5 overflow-hidden">
                <?php while ( $deps->have_posts() ) : $deps->the_post(); ?>
                <div class="relative bg-gradient-to-b from-transparent to-white h-full" style="min-height: 400px;" depID="<?php echo get_the_ID()?>">
                    <img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                    <div class="absolute bottom-0 left-0 right-0 px-5 py-10 bg-gradient-to-b from-white-200 to-transparent min-h-400 flex flex-col justify-end text-white cursor-pointer open-video" style="min-height: 400px;">
                        <svg class="w-16 h-16 m-auto text-red-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 5v10l7-5z" />
                        </svg>
                        <h2 class="text-3xl font-bold leading-tight text-blue-900"><?php echo get_the_title(); ?></h2>
                        <div class="text-blue-900"><?php echo the_content(); ?></div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
                <?php while($deps->have_posts()) : $deps->the_post()?>
                    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg p-5">
                            <div class="relative overflow-hidden" style="padding-top: 56.25%">
                                <iframe id="player" class="absolute top-0 left-0 w-full h-full" src="<?php echo get_field('url_do_video' , get_the_ID())?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <button id="close-modal" class="absolute top-0 right-0 mt-1 mr-1 text-gray-600 hover:text-gray-900 cursor-pointer focus:outline-none">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.707 12.707a1 1 0 01-1.414 0L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L8.586 10 7.293 8.707a1 1 0 011.414-1.414L10 8.586l1.293-1.293a1 1 0 011.414 1.414L11.414 10l1.293 1.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div> 
                <?php endwhile ?>
        <?php endif; ?>      
    </div>
</section>

<section class="px-5 py-16 lg:my-16 lg:px-16">
    <div class="mx-auto flex flex-col lg:flex-row items-center space-y-8 gap-16">
        <div class="lg:w-3/4">
            <h1 class="font-bold text-4xl mb-10">Especialista em gestão e desenvolvimento de carreira, psicóloga por formação. Mais de 20 anos de experiência na área de desenvolvimento humano e organizacional, com passagens por empresas nacionais e multinacionais.</h1>
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

<section class="bg-white lg:max-w-7xl mx-auto">
    <div class="container px-6 py-12 mx-auto">
        <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">Perguntas frequentes</h1>

        <div class="mt-8 space-y-8 lg:mt-16">
            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Quanto tempo dura a formação?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    O cronograma do curso foi organizado para você finalizar em um pouco mais de dois meses.  Mas você terá até um ano para concluir.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">O certificado é reconhecido pelo Ministério da Educação?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! O certificado é reconhecido pelo Ministério da Educação.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Tem pré-requisito?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Querer trabalhar com desenvolvimento de pessoas com foco em carreira.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Terá aulas ao vivo ou todas as aulas estão gravadas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    O curso é gravado e mesmo as aulas ao vivo (inclusive as tutorias) terão as gravações disponibilizadas na plataforma. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Tem material complementar?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Cada aula terá o material correspondente ao tema.
                </p>
            </div>
            
            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Quanto tempo tem acesso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Por até um ano.
                </p>
            </div>
            
            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Não sou psicólogo, posso fazer o curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! O curso não é exclusivo para psicólogos. Por isso, na etapa de Teoria você aprenderá tudo o que precisa saber sobre psicologia para fazer os atendimentos em Orientação de Carreira.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Além do atendimento de adultos, gostaria de atender adolescentes. Vou aprender a fazer isso no Método GROWP?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Com o bônus “Adaptando o método para atender adolescentes” você aprenderá a fazer os atendimentos para apoiar este público a fazer sua primeira escolha profissional.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Ainda não me formei na faculdade, posso fazer o curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Minha recomendação é que você faça o curso no último ano de faculdade.  Assim você se sentirá mais segura para fazer os atendimentos. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Vou aprender a fazer atendimentos on-line e presenciais?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Você será capacitada para fazer atendimentos de Orientação de Carreira nos dois formatos: presencial e on-line. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Como saber que conseguirei acompanhar as aulas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Você receberá um cronograma proposto para se organizar e finalizar o curso em cerca de 2 meses. Além disso, como as aulas estão gravadas, pode assistir no tempo que tem livre. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Tem suporte ao aluno?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Sim! Você terá acompanhamento através da plataforma do aluno (através do fórum) e do encontro de  tutoria, realizado mensalmente, ao vivo. 
                </p>
            </div>
            
            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Quantas horas de curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    O total é de 65 horas, contando com os conteúdos obrigatórios e as leituras complementares.
                </p>
            </div>
            
            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between w-full">
                    <h1 class="font-semibold text-gray-700">Onde as aulas gravadas serão disponibilizadas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                        </svg>
                    </span>
                </button>

                <p class="mt-6 text-sm text-gray-500">
                    Através da plataforma Hotmart.
                </p>
            </div>
        </div>
    </div>
</section>