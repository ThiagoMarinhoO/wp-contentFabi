<?php 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
);

$query = new WP_Query($args);
$news_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'news'
        )
    )
);
$news = new WP_Query($news_args);
?>
<section class="bg-gray-900">
    <div class="bg-left-bottom bg-no-repeat bg-[url('/wp-content/uploads/2023/05/1478sembg.png')] bg-contain bg-blend-multiply">
        <div class="px-4 flex py-14 lg:py-40">
            <div class="lg:w-1/3"></div>
            <div class="px-5 lg:w-2/3 lg:px-16">
                <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Fabiana Abath. Especialista em gestão e desenvolvimento de carreira</h1>
                <p class="text-xl lg:text-3xl font-normal text-gray-300 mb-4">Apoiando profissionais a construírem a carreira que desejam. E empresas a desenharem soluções em gestão e desenvolvimento de pessoas.</p>
            </div>
        </div>
    </div>
</section>

<section class="px-5 py-16 lg:px-0">
    <div class="lg:max-w-7xl mx-auto lg:py-20">
        <h1 class="mb-8 lg:mb-16 text-4xl font-extrabold leading-none tracking-tight md:text-5xl lg:text-6xl">Eu acredito que a verdadeira transformação no mundo do trabalho deve ser realizada em conjunto: por profissionais e pelas empresas.</h1>
        <p class="mb-5 text-lg font-normal text-gray-500 lg:text-2xl">Por isso, trabalho apoiando profissionais se tornarem protagonistas de sua carreira e empresas a desenharem soluções diferenciadas em gestão e desenvolvimento de pessoas.</p>
        <p class="mb-5 text-lg font-normal text-gray-500 lg:text-2xl">O encontro de profissionais satisfeitos e competentes, com empresas que oferecem uma cultura organizacional forte + excelente clima de trabalho, é o que causará o impacto social que tanto acredito.</p>
    </div>
</section>

<section class="px-5 py-12 bg-gradient-to-b from-blue-100 to-white lg:px-0">
    <div class="bg-center bg-no-repeat bg-[url('/wp-content/uploads/2023/05/Pattern.png')] bg-blend-multiply">
        <div class="lg:max-w-7xl mx-auto">
            <h1 class="mb-16 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Conheça as soluções em gestão e desenvolvimento de carreira</h1>
            <div class="grid grid-cols-1 space-y-5 lg:grid-cols-4 lg:space-x-4 lg:space-y-0">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div class="h-1/3">
                        <img class="rounded-t-lg h-full w-full" src="/wp-content/themes/tailpress/resources/images/entrevista-orientacao-vocacional.jpg">
                    </div>
                    <div class="p-5 h-2/3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Orientação de Carreira</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Escolha com segurança a carreira que está alinhada ao seu estilo de vida, que valoriza seus talentos e tem demanda de mercado. </p>
                        <a href="#" class="flex justify-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-full hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Ver detalhes
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div href="#" class="h-1/3">
                        <img class="rounded-t-lg h-full w-full" src="/wp-content/themes/tailpress/resources/images/capacitacao-prof.jpg">
                    </div>
                    <div class="p-5 h-2/3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Capacitação profissional</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Conheça as soluções educacionais para quem trabalha ou deseja trabalhar com Orientação de Carreira.</p>
                        <a href="#" class="flex justify-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-full hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Ver detalhes
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div href="#" class="h-1/3">
                        <img class="rounded-t-lg h-full w-full" src="/wp-content/themes/tailpress/resources/images/mentoria.jpg">
                    </div>
                    <div class="p-5 h-1/3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Mentoria</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Direcionamento para Orientadores de Carreira que desejam estruturar seu modelo de atuação e crescer profissionalmente.</p>
                        <a href="#" class="flex justify-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-full hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Ver detalhes
                        </a>
                    </div>
                </div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                    <div href="#" class="h-1/3">
                        <img class="rounded-t-lg h-full w-full" src="/wp-content/uploads/2023/05/ContentImageOpacless.png">
                    </div>
                    <div class="p-5 h-1/3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Consultoria</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Fundadora da GROWP Consultoria. Consultoria em gestão e desenvolvimento de carreira para empresas.</p>
                        <a href="#" class="flex justify-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-full hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Ver detalhes
                        </a>
                    </div>
                </div>
            </div>
        </div>
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

<section class="lg:my-16 py-16">
    <?php if($query->have_posts()): ?>
        <div class="px-5 lg:px-0 lg:max-w-6xl mx-auto">
            <h1 class="mb-16 text-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">Conheça o nosso blog</h1>
            <div class="lg:max-w-5xl mx-auto flex items-stretch gap-6">
                <div class="mb-5 lg:mb-0 lg:w-3/4 flex flex-col gap-6 justify-between space-y-5 lg:space-y-0">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="flex">
                            <div class="hidden lg:block lg:w-1/2">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="min-h-full object-center object-cover">
                            </div>
                            <?php $categories = get_terms(array(
                                'taxonomy'   => 'category',
                                'hide_empty' => false,                            
                            ))?>
                            <div class="lg:w-1/2 p-6 bg-blue-50 flex flex-col">
                                <!-- <?php # foreach($categories as $categorie): ?>
                                    <span class="text-xs font-semibold text-blue-700 tracking-wider"><?php # echo $categorie->name ?></span>
                                <?php #endforeach ?> -->
                                <h2 class="text-lg font-bold mb-2"><?php echo the_title()?></h2>
                                <div class="overflow-hidden h-12 mb-5">
                                    <p class="text-base truncate block line-clamp-2 text-gray-500"><?php echo the_content()?></p>
                                </div>
                                <a href="<?php echo the_permalink()?>" class="text-xs tracking-wider">Leia mais</a>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
                <div class="hidden lg:w-1/4 lg:flex flex-col divide-y divide-gray-300 bg-emerald-900 px-4 py-3">
                    <?php #$categories = get_terms(array(
                        #'taxonomy'   => 'category',
                        #'hide_empty' => false,                            
                   # ))?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="grid gap-2 py-4">
                            <!-- <?php #foreach($categories as $categorie): ?>
                                <span class="text-xs font-semibold text-white"><?php echo $categorie->name ?></span>
                            <?php #endforeach ?> -->
                            <h2 class="text-lg font-semibold text-white"><?php echo the_title()?></h2>
                            <div class="overflow-hidden h-12 mb-5 text-white">
                                <p class="text-base truncate block line-clamp-2 text-white"><?php echo the_content()?></p>
                            </div>
                            <a href="<?php echo the_permalink()?>" class="text-xs text-white tracking-widest">Leia mais</a>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</section>

<section class="bg-[#08273B]">
    <div class="bg-center bg-no-repeat bg-[url('/wp-content/uploads/2023/05/Vector.png')] bg-cover bg-blend-multiply">
        <div class="px-5 lg:px-0 lg:max-w-2xl mx-auto py-20">
            <h1 class="mb-16 text-center text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">Inscreva-se na nossa newsletter</h1>
            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-emerald-500 focus:border-emerald-500" placeholder="Digite seu email ..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2">Inscrever-se</button>
                </div>
            </form>
        </div>
    </div>
</section>