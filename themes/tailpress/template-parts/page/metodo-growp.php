<?php
$videos = array(
    'post_type' => 'depoimentos',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias',
            'field' => 'tag_ID',
            'terms' => 5
        )
    )
);

$deps = new WP_Query($videos);

$depoimentos = array(
    'post_type' => 'depoimentos',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'categorias',
            'field' => 'tag_ID',
            'terms' => 6
        )
    )
);

$deps_query = new WP_Query($depoimentos);
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

<section class="bg-white py-16 lg:max-w-7xl mx-auto px-5 lg:py-32">
    <div class="container mx-auto">
        <div>
            <h2 class="text-3xl text-center font-extrabold tracking-tight leading-none mb-12 text-gray-900 md:text-5xl lg:text-5xl lg:mb-20">Você aprenderá a realizar cinco serviços de carreira:</h2>
        </div>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 lg:gap-x-16">
            <div class="">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase1.png">
                    <h2 class="my-5 font-bold text-2xl">Desenvolvimento profissional</h2>
                    <p>para pessoas que estão se sentindo estagnadas profissionalmente e precisam de ajuda para definir o próximo passo de carreira e desenhar o plano de desenvolvimento profissional.</p>
                </div>
            </div> 
            <div class="">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase2.png">
                    <h2 class="my-5 font-bold text-2xl">Orientação para aposentadoria</h2>
                    <p>para pessoas que estão prestes a se aposentar e querem continuar trabalhando, a escolherem uma nova carreira alinhada com sua nova fase de vida.</p>
                </div>
            </div> 
            <div class="">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase3.png">
                    <h2 class="my-5 font-bold text-2xl">Desenvolvimento da Liderança</h2>
                    <p>para pessoas que queiram suporte para se desenvolver como líderes.</p>
                </div>
            </div> 
            <div class="">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase4.png">
                    <h2 class="my-5 font-bold text-2xl">Planejamento de Carreira</h2>
                    <p>para profissionais que desejam desenhar o seu plano de carreira, ou plano de desenvolvimento individual.</p>
                </div>
            </div> 
            <div class="">
                <div class="w-full">
                    <img src="/wp-content/themes/tailpress/resources/images/suitcase5.png">
                    <h2 class="my-5 font-bold text-2xl">Transição de Carreira</h2>
                    <p>para profissionais que desejam mudar de carreira, mas não fazem ideia do que querem.</p>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="bg-gradient-to-br from-gray-900 via-gray-900 to-blue-900 px-5 py-12">
    <div class="container mx-auto">
        <div>
            <h2 class="text-center text-4xl font-bold mb-20 text-white">Mais de 100 alunas foram formadas pela Fabiana Abath e já estão trabalhando com Orientação de Carreira do jeito certo e tendo execentes resultados nos seus atendimentos. </h2>
        </div>
        <?php
        if ( $deps->have_posts() ) : ?>
            <div class="px-5 overflow-hidden deps-card swiper">
                <div class="swiper-wrapper">
                    <?php while ( $deps->have_posts() ) : $deps->the_post(); ?>
                    <div class="relative bg-gradient-to-b from-transparent to-white h-full modal-content swiper-slide" style="min-height: 400px;">
                        <img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                        <div class="absolute bottom-0 left-0 right-0 px-5 py-10 min-h-400 flex flex-col justify-end text-white cursor-pointer open-video" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0) 54%, rgba(255,255,255,0.8) 80%, rgba(255,255,255,1) 100%); min-height: 400px;" depID="<?php echo get_the_ID()?>">
                            <svg class="w-16 h-16 m-auto text-red-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 5v10l7-5z" />
                            </svg>
                            <h2 class="text-3xl font-bold leading-tight text-blue-900"><?php echo get_the_title(); ?></h2>
                            <div class="text-blue-900"><?php echo the_content(); ?></div>
                        </div>
                    </div>
                    <input type="hidden" class="video-url" value="<?php echo get_field('url_do_video' , get_the_ID())?>" data-id="<?php echo get_the_ID()?>">
                    <?php endwhile; ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 hidden">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white rounded-lg p-5">
                    <div class="relative overflow-hidden">
                        <iframe width="560" height="315" id="videoDep" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <button id="close-modal" class="absolute top-0 right-0 mt-1 mr-1 text-gray-600 hover:text-gray-900 cursor-pointer focus:outline-none">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 12.707a1 1 0 01-1.414 0L10 11.414l-1.293 1.293a1 1 0 01-1.414-1.414L8.586 10 7.293 8.707a1 1 0 011.414-1.414L10 8.586l1.293-1.293a1 1 0 011.414 1.414L11.414 10l1.293 1.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div> 
        <?php endif; ?>      
    </div>
</section>

<section class="bg-blue-50 py-8">
    <div class="container lg:max-w-7xl mx-auto py-6 px-6 lg:py-20">
        <div class="mt-12 flex flex-col items-center space-y-12 lg:flex-row lg:space-y-0 lg:space-x-16">
            <div class="lg:w-3/4">
                <h2 class="text-xl font-semibold lg:text-4xl text-gray-900">Esta formação é uma capacitação profissional reconhecida pelo Ministério da Educação através da Faculdade Brasília, garantindo a qualidade do conteúdo e do método aplicado.</h2>
            </div>
            <div class="lg:w-1/4">
                <img class="w-full" src="/wp-content/uploads/2023/05/c56438e5-a0a5-4190-8069-0c0a81897b7c.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="relative flex overflow-hidden">
    <div class="min-h-screen bg-white md:w-3/5 hidden md:block"></div>
    <div class="min-h-screen bg-[#120F40] md:w-2/5 hidden md:block"></div>

    <div class="min-h-max md:min-h-screen px-5 py-12 lg:py-20 :py-20 md:absolute md:top-0 md:left-0 md:mx-24 container">
        <h1 class="text-3xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl mb-32 md:w-1/2">
            Esta capacitação profissional é para
        </h1>

        <!-- Slider main container -->
        <div class="swiperProfissional h-96 w-full overflow-hidden">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper items-stretch">
            <!-- Slides -->
            <div class="swiper-slide max-w-sm lg:w-1/3">
                <div class="lg:h-60 w-full p-8 bg-white rounded-md shadow-lg">
                    <div class="inline-flex p-4 bg-[#43667B] rounded-full mb-4">
                        <img class="object-cover w-6 h-6" src="/wp-content/uploads/2023/05/mao-1.png" alt="">
                    </div>
                    <p class="leading-loose text-gray-500">
                        Psicólogos e profissionais de RH (ou formandos nessas áreas) a trabalhar com Orientação de Carreira.
                    </p>
                </div>
            </div>
            <div class="swiper-slide max-w-sm lg:w-1/3">
                <div class="lg:h-60 w-full p-8 bg-white rounded-md shadow-lg">
                    <div class="inline-flex p-4 bg-[#DA4437] rounded-full mb-4">
                        <img class="object-cover w-6 h-6" src="/wp-content/uploads/2023/05/orientacao-1.png" alt="">
                    </div>
                    <p class="leading-loose text-gray-500">
                        Profissionais que desejam conduzir o processo de orientação de carreira com segurança, sabendo exatamente o que fazer, sessão por sessão.
                    </p>
                </div>
            </div>
            <div class="swiper-slide max-w-sm lg:w-1/3">
                <div class="lg:h-60 w-full p-8 bg-white rounded-md shadow-lg">
                    <div class="inline-flex p-4 bg-[#777D67] rounded-full mb-4">
                        <img class="object-cover w-6 h-6" src="/wp-content/uploads/2023/05/grafico-de-crescimento.png" alt="">
                    </div>
                    <p class="leading-loose text-gray-500">
                        Quem deseja alavancar os seus resultados profissionais, transformando a forma como gerencia a sua própria carreira.
                    </p>
                </div>
            </div>
            <div class="swiper-slide max-w-sm lg:w-1/3">
                <div class="lg:h-60 w-full p-8 bg-white rounded-md shadow-lg">
                    <div class="inline-flex p-4 bg-[#A56565] rounded-full mb-4">
                        <img class="object-cover w-6 h-6" src="/wp-content/uploads/2023/05/fadiga.png" alt="">
                    </div>
                    <p class="leading-loose text-gray-500">
                        Profissionais que estão cansados de fazer cursos on-line e presenciais e não ter resultados.
                    </p>
                </div>
            </div>
            ...
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev flex absolute top-40 left-1/4 text-gray-950 border-gray-950 lg:top-20 lg:left-3/4 m-0 mr-8 p-8 rounded-full lg:text-white border lg:border-white"></div>
        <div class="swiper-button-next flex absolute top-40 right-1/4 text-gray-950 border-gray-950 lg:top-20 lg:right-40 m-0 p-8 rounded-full lg:text-white border lg:border-white"></div>
    </div>
</section>

<section class="bg-center bg-no-repeat bg-fixed bg-[url('/wp-content/themes/tailpress/resources/images/bg-coaching.png')] bg-cover bg-blend-multiply py-16 lg:py-28">
    <div class="container mx-auto">
        <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg lg:w-1/2 py-10 mx-auto flex justify-betweenr items-center rounded-lg flex-col px-8 lg:px-20 text-center">
            <h2 class="my-5 font-bold text-4xl text-white">Não é coaching !</h2>
            <p class="text-1xl text-[#D5D8DC]">Não é coaching. O Método GROWP tem como bases teórica e prática a Gestalt-terapia e na Psicologia da Carreira.</p>
        </div>
    </div>
</section>

<section class="bg-white py-20 lg:px-20">
    <div class="container mx-auto">
        <div>
            <h2 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl mb-20">É uma formação totalmente prática com o meu acompanhamento para que você consiga:</h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="lg:col-span-2 flex flex-col justify-between">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-5 lg:mb-0 lg:w-1/2 lg:px-32">
                        <div class="w-full flex text-center flex-col justify-center">
                            <img src="/wp-content/themes/tailpress/resources/images/dado1.png" class="w-20 mx-auto">
                            <h2 class="my-5 font-bold text-2xl">Realizar atendimentos</h2>
                            <p>Realizar atendimentos individuais de Orientação de Carreira com segurança.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:px-32">
                        <div class="w-full flex text-center flex-col justify-center">
                            <img src="/wp-content/themes/tailpress/resources/images/dado2.png" class="w-20 mx-auto">
                            <h2 class="my-5 font-bold text-2xl">Trabalhar com desenvolvimento humano</h2>
                            <p>Trabalhar com desenvolvimento humano, sem precisar estar no RH de uma empresa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 flex flex-col justify-between">
                <div class="flex justify-center">
                    <div class="lg:w-1/2 lg:px-32">
                        <div class="w-full flex text-center flex-col justify-center">
                            <img src="/wp-content/themes/tailpress/resources/images/dado3.png" class="w-20 mx-auto">
                            <h2 class="my-5 font-bold text-2xl">Mais Flexibilidade</h2>
                            <p>Ter mais flexibilidade de autonomia profissional.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 flex flex-col justify-between">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="mb-5 lg:mb-0 lg:w-1/2 lg:px-32">
                        <div class="w-full flex text-center flex-col justify-center">
                            <img src="/wp-content/themes/tailpress/resources/images/dado4.png" class="w-20 mx-auto">
                            <h2 class="my-5 font-bold text-2xl">Atender adultos com as seguintes demandas</h2>
                            <p>transição de carreira, desenvolvimento profissional, planejamento de carreira, desenvolvimento de líderes e orientação para aposentadoria.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2 lg:px-32">
                        <div class="w-full flex text-center flex-col justify-center">
                            <img src="/wp-content/themes/tailpress/resources/images/dado5.png" class="w-20 mx-auto">
                            <h2 class="my-5 font-bold text-2xl">Estruturar sua transição profissional</h2>
                            <p>para trabalhar com Orientação de Carreira, do seu jeito, sabendo: precificar e cobrar seu trabalho, vender aquilo que faz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="px-3 py-12 lg:px-5 lg:py-20 bg-blue-50">
    <div class="container mx-auto lg:max-w-7xl">
        <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">O que você vai aprender</h1>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-7xl md:px-24 lg:px-8 lg:py-20">
        <div class="grid lg:gap-6 row-gap-10 lg:grid-cols-2">
            <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                            01
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Teoria</p>
                    <p class="text-gray-700">
                        Nesta etapa você aprenderá os conceitos centrais da Gestalt-terapia que embasam o manejo com o cliente. Também aprenderá a história e os fundamentos da Psicologia da Carreira.
                    </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                                02
                            </div>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Prática</p>
                    <p class="text-gray-700">
                        Nesta etapa você aprenderá passo a passo do método e das técnicas para conduzir o processo de Orientação e e Desenvolvimento de Carreira.
                    </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                                03
                            </div>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Começando a Atuar</p>
                    <p class="text-gray-700">
                        Nesta etapa você aprenderá a construir o seu modelo comercial de trabalho em Orientação de Carreira, considerando: como cobrar por seus serviços, meios de pagamento, roteiro de apresentação e contrato. Também aprenderá o papel do orientador e como desenhar sua estratégia de formação continuada.
                    </p>
                    </div>
                </div>
            </div>
            <div class="lg:py-6 lg:pr-16">
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                                04
                            </div>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Projeto Final</p>
                    <p class="text-gray-700">
                        Nesta etapa você fará a elaboração de um projeto de finalização do curso, seguindo as diretrizes fornecidas. Não se preocupe! Você receberá apoio para montar o seu projeto.
                    </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                                05
                            </div>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Leituras Complementares</p>
                    <p class="text-gray-700">
                        Nesta etapa você receberá a indicação das leituras que deve fazer para se aprofundar em Orientação de Carreira.
                    </p>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex flex-col items-center mr-4">
                    <div>
                        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                            <div class="flex items-center justify-center w-10 h-10 border rounded-full bg-[#43667B] text-lg text-white font-extrabold">
                                06
                            </div>
                        </div>
                    </div>
                    <div class="w-px h-full bg-gray-300"></div>
                    </div>
                    <div class="pb-8">
                    <p class="mb-2 text-lg font-bold lg:text-3xl">Atualização e Reciclagem</p>
                    <p class="text-gray-700">
                        Mensalmente você terá uma aula ao vivo para complementar a sua capacitação.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-8">
    <div class="container lg:max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl text-center font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">Além disso, você terá acesso a mais de R$1.000,00 em bônus que alavancarão os seus resultados como Orientadora de Carreira</h1>
        <div class="mt-12 lg:mt-24 flex flex-col-reverse items-center justify-center lg:flex-row lg:space-y-0 lg:space-x-16">
            <div class="p-8 border border-gray-100 shadow-md rounded-lg space-y-5 relative">
                <label for="" class="text-[#43667B] font-semibold absolute bottom-full left-0 pb-2">Confira os bônus</label>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[Aula] Como adaptar o método para o atendimento de adolescentes</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[E-book] Aplicativos para se destacar na internet 2.0</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[Minicurso] Por onde começar a estratégia de branding do seu negócio</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[E-book] Copywriting para quem nunca ouviu falar sobre</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[E-book] Aspectos fiscais do Orientador de Carreira</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="mr-4 lg:mr-0">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-[#43667B]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-lg text-gray-500">[Aula] O Orientador Profissional do Século XXI</p>
                </div>
            </div>
            <div class="mb-20 lg:mb-0 py-8 px-20 border border-blue-200 shadow-md rounded-lg space-y-8">
                <div class="flex flex-col items-center space-y-2">
                    <span class="text-sm text-gray-500 font-semibold">12x de</span>
                    <h1 class="text-4xl text-center font-bold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">R$199,31</h1>
                    <span class="text-sm text-gray-500 font-semibold">ou</span>
                    <span class="flex text-sm text-gray-500 font-semibold">R$ 1997,00 à vista</span>
                </div>
                <button type="button" class="container text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-6 focus:outline-none">Começar agora</button>

            </div>
        </div>
    </div>
</section>

<section class="bg-blue-50 py-8">
    <div class="container lg:max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">Garantia</h1>
        <div class="mt-12 flex flex-col items-center space-y-12 lg:flex-row lg:space-y-0 lg:space-x-16">
            <div class="lg:w-1/4">
                <img class="w-full" src="/wp-content/uploads/2023/05/garantia.png" alt="">
            </div>
            <div class="lg:w-3/4">
                <h2 class="text-lg font-semibold lg:text-2xl text-gray-900 ">Estamos oferecendo uma garantia incondicional de 7 dias. Funciona assim: se você não ficar satisfeita dentro deste período, basta solicitar o cancelamento da compra na plataforma do aluno.</h2>
            </div>
        </div>
    </div>
</section>

<section class="bg-white lg:max-w-7xl mx-auto py-8 lg:py-16">
    <div class="container px-6 py-12 mx-auto">
        <h1 class="lg:w-2/5 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">O que só alunas do Método GROWP tem</h1>
        <div class="mt-12 grid space-y-5">
            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Aulas gravadas para assistir quantas vezes quiser, de qualquer lugar.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Acesso exclusivo ao grupo de alunas para networking e aprendizado.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Certificação de Capacitação Profissional, com título de extensão universitária, reconhecida pelo Ministério da Educação, através da Faculdade Brasília.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Acesso ao curso liberado por um ano.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white">
                        <path d="M3.69986 14.2502C3.84986 14.2502 3.99986 14.2502 4.09986 14.2002L9.64986 12.2502C10.0999 12.1002 10.3499 11.6002 10.1999 11.1502C10.0499 10.7002 9.54986 10.4502 9.09986 10.6002L5.74986 11.8002C7.39986 7.2502 11.7499 4.1502 16.7999 4.1502C22.1499 4.1502 26.8499 7.7002 28.1499 12.8502C28.2499 13.3002 28.7499 13.6002 29.1999 13.5002C29.6499 13.4002 29.9499 12.9002 29.8499 12.4502C28.3499 6.5502 22.9499 2.4502 16.7999 2.4502C10.7999 2.4502 5.59986 6.3002 3.89986 11.9002L2.34986 7.5502C2.19986 7.1002 1.69986 6.8502 1.24986 7.0002C0.799858 7.1502 0.549858 7.6502 0.699858 8.1002L2.59986 13.5502C2.74986 13.9502 3.24986 14.2502 3.69986 14.2502Z" fill="white"/>
                    <path d="M31.2999 24.9503L29.2499 19.5503C29.1499 19.2503 28.8999 19.0003 28.5999 18.9003C28.2999 18.8003 27.9999 18.7503 27.6999 18.9003L22.1999 21.0003C21.7499 21.1503 21.4999 21.7003 21.6999 22.1503C21.8499 22.6003 22.3999 22.8503 22.8499 22.6503L26.2499 21.3503C24.3499 25.3003 20.2999 27.9003 15.6999 27.9003C10.6499 27.9003 6.19986 24.7503 4.64986 20.0503C4.44986 19.6003 3.94986 19.3503 3.49986 19.5003C3.04986 19.6503 2.79986 20.1503 2.94986 20.6003C4.74986 26.0003 9.84986 29.6503 15.6499 29.6503C21.1499 29.6503 26.0499 26.4003 28.0499 21.4503L29.6499 25.6003C29.7999 25.9503 30.0999 26.1503 30.4499 26.1503C30.5499 26.1503 30.6499 26.1503 30.7499 26.1003C31.2499 25.9003 31.4999 25.4003 31.2999 24.9503Z" fill="white"/>
                    </svg>
                </div>
                <p class="text-lg font-semibold">Mensalmente, uma aula nova para atualização ou reciclagem.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Encontro mensal, ao vivo, para tirar dúvidas das alunas.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Suporte ao aluno via fórum para sanar todas as suas dúvidas.</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="mr-4 lg:mr-0 p-2 bg-[#146858] rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                </div>
                <p class="text-lg font-semibold">Cronograma para organizar seus estudos, de forma que se certifique como Orientadora de Carreira em cerca de 60 dias.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container lg:max-w-7xl px-6 py-10 mx-auto">
        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 capitalize lg:text-5xl">
                    Depoimentos
                </h1>
            </div>
        </div>
        <?php if ( $deps_query->have_posts() ) : ?>
            <div class="swiper-deps relative pt-10">
                <div class="swiper-wrapper">
                    <?php while ( $deps_query->have_posts() ) : $deps_query->the_post(); ?>
                        <div class="p-8 shadow-md rounded-lg swiper-slide max-w-sm lg:w-1/3">
                            <p class="leading-loose text-gray-500">
                                <?php echo the_content()?>
                            </p>
                            <div class="mt-8 -mx-2">
                                <div class="mx-2">
                                    <h1 class="font-semibold text-gray-800"><?php echo the_title() ?></h1>
                                    <span class="text-sm text-gray-500"><?php echo get_field('rede_social' , get_the_ID())?></span>
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
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Quanto custa ?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                O valor do investimento é informado pela consultora de carreira, depois que você preencher o formulário de contato.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">O certificado é reconhecido pelo Ministério da Educação?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! O certificado é reconhecido pelo Ministério da Educação.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Tem pré-requisito?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Querer trabalhar com desenvolvimento de pessoas com foco em carreira.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Terá aulas ao vivo ou todas as aulas estão gravadas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                O curso é gravado e mesmo as aulas ao vivo (inclusive as tutorias) terão as gravações disponibilizadas na plataforma. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Tem material complementar?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Cada aula terá o material correspondente ao tema.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Quanto tempo tem acesso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Por até um ano.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Não sou psicólogo, posso fazer o curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! O curso não é exclusivo para psicólogos. Por isso, na etapa de Teoria você aprenderá tudo o que precisa saber sobre psicologia para fazer os atendimentos em Orientação de Carreira.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Além do atendimento de adultos, gostaria de atender adolescentes. Vou aprender a fazer isso no Método GROWP?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Com o bônus “Adaptando o método para atender adolescentes” você aprenderá a fazer os atendimentos para apoiar este público a fazer sua primeira escolha profissional.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Ainda não me formei na faculdade, posso fazer o curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Minha recomendação é que você faça o curso no último ano de faculdade.  Assim você se sentirá mais segura para fazer os atendimentos. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Vou aprender a fazer atendimentos on-line e presenciais?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Você será capacitada para fazer atendimentos de Orientação de Carreira nos dois formatos: presencial e on-line. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Como saber que conseguirei acompanhar as aulas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Você receberá um cronograma proposto para se organizar e finalizar o curso em cerca de 2 meses. Além disso, como as aulas estão gravadas, pode assistir no tempo que tem livre.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Tem suporte ao aluno?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Sim! Você terá acompanhamento através da plataforma do aluno (através do fórum) e do encontro de  tutoria, realizado mensalmente, ao vivo. 
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Quantas horas de curso?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                O total é de 65 horas, contando com os conteúdos obrigatórios e as leituras complementares.
                </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Onde as aulas gravadas serão disponibilizadas?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">
                Através da plataforma Hotmart.
                </p>
            </div>
        </div>
    </div>
</section>