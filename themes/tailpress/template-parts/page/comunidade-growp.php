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
                <img src="/wp-content/uploads/2023/06/logo_comunidade_growp.png" alt="" class="h-12 mb-4">
                <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl">Encontre em um único lugar tudo o que precisa para crescer e se desenvolver como Orientadora de Carreira.</h1>
                <p class="text-xl lg:text-2xl font-normal text-gray-300 mb-12">A maneira mais simples e rápida de se manter atualizada com conteúdo de qualidade para entregar o melhor atendimento aos seus clientes.</p>
                <a class="text-white bg-[#ED6A47] hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2 focus:outline-none">Quero fazer parte</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-900 lg:hidden">
    <div class="container pt-14">
        <img src="/wp-content/uploads/2023/06/logo_comunidade_growp.png" alt="" class="h-12 mb-4">
        <h1 class="mb-6 text-3xl font-extrabold tracking-tight leading-none text-white">Encontre em um único lugar tudo o que precisa para crescer e se desenvolver como Orientadora de Carreira.</h1>
        <p class="text-lg font-normal text-gray-300 mb-12">A maneira mais simples e rápida de se manter atualizada com conteúdo de qualidade para entregar o melhor atendimento aos seus clientes.</p>
        <a class="text-white bg-[#ED6A47] hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Quero fazer parte</a>
    </div>
    <div class="h-96 bg-left-bottom bg-no-repeat bg-[url('/wp-content/uploads/2023/05/1478sembg.png')] bg-contain bg-blend-multiply">
    </div>
</section>

<section class="bg-slate-100 py-12 lg:py-20">
    <div class="container mx-auto lg:max-w-7xl">
        <h2 class="text-3xl lg:text-5xl text-center tracking-tight font-extrabold text-[#ED6A47] mb-4">Na comunidade GrowP você vai receber:</h2>
        <div class="container mx-auto lg:max-w-4xl py-8 lg:py-12 grid grid-cols-1 lg:grid-cols-2 self-stretch gap-20">
            <div class="bg-white rounded-3xl p-5 flex flex-col justify-between border-b-4 border-orange-700">
                <div class="flex justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-camera-reels-fill text-gray-900" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"></path>
                    </svg>
                </div>
                <h4 class="text-lg lg:text-2xl text-center tracking-tight font-bold text-gray-900 mb-2">Aulas Gravadas</h4>
                <p class="text-center m-0 px-3">Aulas gravadas organizadas em quatro categorias: A prática da Orientação de Carreira, Sociedade e Trabalho, Organizacional, Cuidando da sua carreira.</p>
            </div>
            <div class="bg-white rounded-3xl p-5 flex flex-col justify-between border-b-4 border-orange-700">
                <div class="flex justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-camera-reels-fill text-gray-900" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h7z"></path>
                    </svg>
                </div>
                <h4 class="text-lg lg:text-2xl text-center tracking-tight font-bold text-gray-900 mb-2">Novas aulas</h4>
                <p class="text-center m-0 px-3">Todo mês haverá uma aula nova disponível para você.</p>
            </div>
            <div class="bg-white rounded-3xl p-5 flex flex-col justify-between border-b-4 border-orange-700">
                <div class="flex justify-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book-fill text-gray-900" viewBox="0 0 16 16">
                    <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                </div>
                <h4 class="text-lg lg:text-2xl text-center tracking-tight font-bold text-gray-900 mb-2">Materiais Didáticos</h4>
                <p class="text-center m-0 px-3">Acesso ao material didático da aula e leituras complementares para aprofundar o conhecimento sobre o tema.</p>
            </div>
            <div class="bg-white rounded-3xl p-5 flex flex-col justify-between border-b-4 border-orange-700">
                <div class="flex justify-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book-fill text-gray-900" viewBox="0 0 16 16">
                    <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                </div>
                <h4 class="text-lg lg:text-2xl text-center tracking-tight font-bold text-gray-900 mb-2">Portfólio</h4>
                <p class="text-center m-0 px-3">Técnicas de Orientação Profissional e de Carreira para aumentar o seu portfólio.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-12 lg:py-20">
    <div class="container mx-auto lg:max-w-7xl">
        <h1 class="text-5xl tracking-tight font-extrabold text-[#ED6A47] mb-4">Agora você pode fazer parte comunidade com as melhores Orientadoras de Carreira do Brasil</h1>
        <span class="flex bg-gray-900 h-1 w-10 mb-8 lg:mb-12 rounded-xl"></span>
        <p class="text-xl lg:text-2xl text-center text-gray-900 mb-8">A Comunidade GROWP nasceu para resolver dois grandes problemas das Orientadoras:</p>
        <div class="container mx-auto lg:max-w-4xl flex flex-col lg:flex-row gap-12 mb-6">
            <div class="">
                <div class="flex items-center gap-3 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-square text-red-600" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <p class="text-lg text-red-600 m-0">pouco tempo disponível para estudar e se manter atualizada.</p>
                </div>
            </div>
            <div class="">
                <div class="flex items-center gap-3 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-x-square text-red-600" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <p class="text-lg text-red-600 m-0">grana curta para investir em tantos livros e cursos disponíveis.</p>
                </div>
            </div>
        </div>
        <p class="text-xl lg:text-2xl text-gray-900 mb-8">Nunca tivemos tanto acesso à informação como temos hoje. Nunca as coisas mudaram tão rápido como estão mudando. E nunca tivemos tão pouco tempo para acompanhar essa avalanche de conteúdo.</p>
        <p class="text-xl lg:text-2xl text-gray-900 mb-8">Manter-se atualizada é condição de sobrevivência para quem trabalha com Orientação de Carreira! A grande questão é: como?</p>
        <p class="text-xl lg:text-2xl text-gray-900 mb-8">Depois de 21 anos trabalhando com treinamento e desenvolvimento de pessoas, 9 anos estudando e trabalhando como Orientadora de Carreira, com mais de 100 alunas formadas e milhares de horas investidas em treinamentos e leituras, eu resolvi organizar todo o conhecimento que adquiri e venho produzindo nas aulas que você encontrará aqui na CGP (Comunidade GROWP).</p>
        <p class="text-xl lg:text-2xl text-gray-900 mb-8">Em inglês o verbo “to grow up” significa CRESCER. E é justamente isso que a Comunidade GROWP trará para você: crescimento e desenvolvimento.</p>
    </div>
</section>

<section class="bg-gray-900 py-12 lg:py-16">
    <div class="container lg:max-w-7xl mx-auto">
        <h1 class="text-5xl tracking-tight font-extrabold text-white mb-4">Entenda como funciona</h1>
        <span class="flex bg-white h-1 w-10 mb-4 lg:mb-6 rounded-xl"></span>
        <p class="text-xl lg:text-2xl text-gray-200">Todos os meses será produzida uma aula nova para que você se mantenha atualizada em relação a quatro grandes pilares de conhecimento e assim, ALAVANCAR a sua performance como Orientadora de Carreira.</p>
        <div class="container mx-auto lg:max-w-4xl py-6 lg:py-12 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="">
                <div class="">
                    <div class="p-2 bg-[#ED6A47] rounded-md mb-4 w-fit">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="" class="" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07687 0.6225L14.2269 15.6125C14.5669 16.4425 13.7169 17.2725 12.8969 16.9025L7.55687 14.5425C7.29687 14.4325 7.00687 14.4325 6.74687 14.5425L1.40687 16.9025C0.586874 17.2625 -0.263126 16.4425 0.076874 15.6125L6.22687 0.6225C6.55687 -0.2075 7.73687 -0.2075 8.07687 0.6225Z" fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-white text-3xl font-bold mb-3">A prática em Orientação de Carreira</h3>
                    <p class="text-white">Aqui estão concentrados os conteúdos para você realizar excelentes atendimentos.</p>
                </div>
            </div>
            <div class="">
                <div class="">
                    <div class="p-2 bg-[#ED6A47] rounded-md mb-4 w-fit">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="" class="" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07687 0.6225L14.2269 15.6125C14.5669 16.4425 13.7169 17.2725 12.8969 16.9025L7.55687 14.5425C7.29687 14.4325 7.00687 14.4325 6.74687 14.5425L1.40687 16.9025C0.586874 17.2625 -0.263126 16.4425 0.076874 15.6125L6.22687 0.6225C6.55687 -0.2075 7.73687 -0.2075 8.07687 0.6225Z" fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-white text-3xl font-bold mb-3">Sociedade e Trabalho</h3>
                    <p class="text-white">Nesta seção você encontrará aulas relacionadas às gerações, movimentos do mundo do trabalho e tendências.</p>
                </div>
            </div>
            <div class="">
                <div class="px-0 px-lg-5">
                    <div class="p-2 bg-[#ED6A47] rounded-md mb-4 w-fit">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="" class="" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07687 0.6225L14.2269 15.6125C14.5669 16.4425 13.7169 17.2725 12.8969 16.9025L7.55687 14.5425C7.29687 14.4325 7.00687 14.4325 6.74687 14.5425L1.40687 16.9025C0.586874 17.2625 -0.263126 16.4425 0.076874 15.6125L6.22687 0.6225C6.55687 -0.2075 7.73687 -0.2075 8.07687 0.6225Z" fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-white text-3xl font-bold mb-3">Organizacional</h3>
                    <p class="text-white">Neste módulo estão os conteúdos focados em gestão de carreira nas empresas.</p>
                </div>
            </div>
            <div class="">
                <div class="px-0 px-lg-5">
                    <div class="p-2 bg-[#ED6A47] rounded-md mb-4 w-fit">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="" class="" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07687 0.6225L14.2269 15.6125C14.5669 16.4425 13.7169 17.2725 12.8969 16.9025L7.55687 14.5425C7.29687 14.4325 7.00687 14.4325 6.74687 14.5425L1.40687 16.9025C0.586874 17.2625 -0.263126 16.4425 0.076874 15.6125L6.22687 0.6225C6.55687 -0.2075 7.73687 -0.2075 8.07687 0.6225Z" fill="white" />
                        </svg>
                    </div>
                    <h3 class="text-white text-3xl font-bold mb-3">Cuidando da sua carreira</h3>
                    <p class="text-white">Um módulo com conteúdos dedicados ao seu crescimento como Orientadora.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="container lg:max-w-7xl mx-auto">
        <h1 class="text-5xl tracking-tight font-extrabold text-[#ED6A47] mb-4">Confira as aulas que já estão disponíveis para você acessar:</h1>
        <span class="flex bg-gray-900 h-1 w-10 mb-8 lg:mb-12 rounded-xl"></span>
        
        <div class="container border rounded-lg p-3 mb-5">
            <div class="flex flex-col lg:flex-row">
                <div class="tab flex flex-col justify-between bg-white border-none">
                    <button class="tablinks py-4 px-2.5 rounded-md bg-gray-900 text-white">A prática em Orientação de Carreira</button>
                    <button class="tablinks py-4 px-2.5 rounded-md">Sociedade e Trabalho</button>
                    <button class="tablinks py-4 px-2.5 rounded-md">Organizacional</button>
                    <button class="tablinks py-4 px-2.5 rounded-md">Cuidando da sua carreira</button>
                </div>
                <div class="px-3 lg:px-5 py-5 lg:py-3">
                    <div id="tab1" class="tabcontent w-full" style="display: block;">
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">A diferença entre serviços de carreira (coaching, mentoria , aconselhamento e consultoria)</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Como utilizar a análise SWOT em Orientação de Carreira</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Orientação de carreira com clientes que estão fora do Brasil</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Como e quando aplicar testes em Orientação de carreira</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Como conduzir Orientação de Carreira em grupo</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">O que fazer quando o cliente tem dificuldades de planejar a carreira</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Gestalt-terapia e a prática de Orientação de Carreira</h5>
                        </div>
                        <div class="box-subject mb-6">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Tudo o que precisa saber sobre Orientação para Aposentadoria</h5>
                        </div>
                    </div>
                    <div id="tab2" class="tabcontent w-full" style="display: none;">
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Quiet Quitting e A Grande Renúncia</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Burnout e Orientação de Carreira</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Geração Z</h5>
                        </div>
                    </div>
                    <div id="tab3" class="tabcontent w-full" style="display: none;">
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Trajetórias de carreira nas organizações</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Modelo de Competências</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Tendências em desenvolvimento de líderes</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Estrutura de um programa de desenvolvimento de líderes</h5>
                        </div>
                    </div>
                    <div id="tab4" class="tabcontent w-full" style="display: none;">
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Transição de carreira para trabalhar com Orientação e Desenvolvimento de Carreira</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Como valorizar o seu trabalho em OC</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Planejamento estratégico de Carreira para Orientadores</h5>
                        </div>
                        <div class="box-subject mb-4">
                            <h5 class="text-xl lg:text-2xl font-bold text-gray-600">Estratégias para ter mais clientes de Orientação Profissional e de Carreira</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-900 py-12 lg:py-16">
    <div class="container lg:max-w-7xl mx-auto">
        <h1 class="text-5xl tracking-tight font-extrabold text-white mb-4">O que você ganhará entrando para Comunidade GROWP:</h1>
        <span class="flex bg-white h-1 w-10 mb-8 lg:mb-12 rounded-xl"></span>
        <ul class="grid gap-6">
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Acesso a todas as aulas já disponíveis na comunidade (são mais de 20!).
            </li>
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Material didático e leituras complementares.
            </li>
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Uma nova técnica de Orientação Profissional e de Carreira por mês, para aumentar o seu portfólio.
            </li>
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Acesso à Comunidade de Orientadoras de Carreira no Whatsapp. Uma potência para fazer networking e trocar experiências com as melhores Orientadoras de Carreira: as alunas da Fabi Abath.
            </li>
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Uma aula nova, todos os meses!
            </li>
            <li class="flex items-center text-white gap-3 text-lg">
                <div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle text-[#ED6A47]" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                </svg></div>
                Suporte para tirar suas dúvidas através do fórum da própria comunidade.
            </li>
        </ul>
    </div>
</section>

<section class="py-12 lg:py-16">
    <div class="container lg:max-w-7xl mx-auto">
        <h1 class="text-5xl tracking-tight font-extrabold text-[#ED6A47] mb-4">Escolha o melhor plano de assinatura para você!</h1>
        <span class="flex bg-gray-900 h-1 w-10 mb-8 lg:mb-12 rounded-xl"></span>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
          <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
              <!-- Pricing Card -->
              <div class="flex flex-col justify-between p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                  <h3 class="mb-4 text-2xl font-semibold">Plano Mensal</h3>
                  <div class="flex justify-center items-baseline my-8">
                      <span class="mr-2 text-5xl font-extrabold">R$157,00</span>
                      <span class="text-gray-500">/mês</span>
                  </div>
                  <!-- <p class="font-light text-gray-500 sm:text-xl mt-3 mb-8">Valor à vista: R$250</p> -->
                  <!-- List -->
                  <ul role="list" class="mb-8 space-y-4 text-left">
                      <li class="flex items-center space-x-3">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Acesso por 30 dias à Comunidade GROWP</span>
                      </li>
                  </ul>
                  <a href="https://pay.hotmart.com/Q78326252I?off=834rylel&bid=1686581262242" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Quero assinar</a>
              </div>
              <!-- Pricing Card -->
              <div class="flex flex-col justify-between p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                  <h3 class="mb-4 text-2xl font-semibold">Plano Trimestral</h3>
                  <div class="flex justify-center items-baseline mt-8">
                      <span class="mr-2 text-5xl font-extrabold">R$83,33</span>
                      <span class="text-gray-500">/mês</span>
                  </div>
                  <p class="font-light text-gray-500 sm:text-xl mt-3 mb-8">Valor à vista: R$250</p>
                  <!-- List -->
                  <ul role="list" class="mb-8 space-y-4 text-left">
                      <li class="flex items-center space-x-3">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Acesso por 90 dias à Comunidade GROWP</span>
                      </li>
                      <li class="flex items-center space-x-3">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Economia de R$221 em relação ao plano mensal </span>
                      </li>
                  </ul>
                  <a href="https://pay.hotmart.com/Q78326252I?off=834rylel&bid=1686581262242" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Quero assinar</a>
              </div>
              <!-- Pricing Card -->
              <div class="flex flex-col justify-between p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow">
                  <h3 class="mb-4 text-2xl font-semibold">Plano Semestral</h3>
                  <div class="flex justify-center items-baseline mt-8">
                      <span class="mr-2 text-5xl font-extrabold">R$60,00</span>
                      <span class="text-gray-500">/mês</span>
                  </div>
                  <p class="font-light text-gray-500 sm:text-xl mt-3 mb-8">Valor à vista: R$360</p>
                  <!-- List -->
                  <ul role="list" class="mb-8 space-y-4 text-left">
                      <li class="flex items-center space-x-3">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Acesso por 180 dias à Comunidade GROWP</span>
                      </li>
                      <li class="flex items-center space-x-3">
                          <!-- Icon -->
                          <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                          <span>Economia de R$582 em relação ao plano mensal </span>
                      </li>
                  </ul>
                  <a href="https://pay.hotmart.com/Q78326252I?off=834rylel&bid=1686581262242" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Quero assinar</a>
              </div>
          </div>
        </div>
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Ainda está em dúvida. Fique tranquila!</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl">Ao fazer sua inscrição na Comunidade GROWP você terá 24h de TESTE de forma totalmente gratuita.  É isso mesmo! A cobrança da assinatura só será efetuada depois que o período de teste acabar.</p>
            <p class="font-light text-gray-500 sm:text-xl">Além disso você tem 7 dias de garantia para pedir o reembolso do produto.</p>
        </div>
    </div>
</section>

<section class="relative bg-gray-900 pt-12 lg:pt-20">
    <div class="hidden lg:block h-12 w-12 lg:h-16 lg:w-16 bg-gray-900 rotate-45 absolute -bottom-6 right-[45%] lg:right-[47%]"></div>
    <div class="flex flex-col-reverse lg:flex-row">
        <div class="lg:w-1/4 flex items-end">
            <img src="/wp-content/themes/tailpress/resources/images/1478sembg.png" alt="" class="w-full">
        </div>
        <div class="lg:w-3/4 flex justify-center">
            <div class="w-3/4 pb-8">
                <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl">Conheça Fabiana Abath, criadora da Comunidade GROWP</h1>
                <p class="text-xl lg:text-2xl font-normal text-gray-300 mb-8">Sou Fabiana Abath, psicóloga, orientadora de carreira, consultora de gestão e desenvolvimento de carreira para empresas, especialista em desenvolvimento humano e organizacional. A maneira mais simples e rápida de se manter atualizada com conteúdo de qualidade para entregar o melhor atendimento aos seus clientes.</p>
                <p class="text-xl lg:text-2xl font-normal text-gray-300 mb-8">Há 21 anos trabalho para empresas apoiando no desenho e operação das estratégias de treinamento e desenvolvimento. Já facilitei o desenvolvimento de centenas líderes ao longo da minha trajetória e me orgulho em ter participado do desenho de estratégias de gestão de pessoas que já colocaram dois de meus clientes na Lista GPTW - Melhores Empresas para Trabalhar no Rio de Janeiro, por mais de uma vez.</p>
                <p class="text-xl lg:text-2xl font-normal text-gray-300 mb-8">Desde 2014 trabalho com Orientação Profissional e de Carreira e comecei a me especializar no atendimento de adultos em 2016. Criei o Método GROWP, com base na psicologia da carreira,  que já transformou a vida de muitos profissionais! E é esse o método que ensino no Método GROWP | Capacitação profissional em orientação de carreira</p>
                <p class="text-xl lg:text-2xl font-bold text-gray-300 mb-8">Hoje já são mais de 100 alunas formadas aplicando o que aprenderam comigo e tendo resultados incríveis!</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container lg:max-w-7xl px-6 py-16 mx-auto">
        <div class="mt-6 md:flex md:items-center md:justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-800 capitalize lg:text-5xl">
                    O que dizem sobre o meu trabalho:
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

<section class="bg-blue-50 py-8">
    <div class="container lg:max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-5xl">Garantia</h1>
        <div class="mt-12 flex flex-col items-center space-y-12 lg:flex-row lg:space-y-0 lg:space-x-16">
            <div class="lg:w-1/4">
                <img class="w-full" src="/wp-content/uploads/2023/05/garantia.png" alt="">
            </div>
            <div class="lg:w-3/4">
                <h2 class="text-lg font-semibold lg:text-2xl text-gray-900 ">Ao garantir seu acesso à Comunidade GROWP, você está completamente protegida, pois, seguimos as normas do Código de Defesa do Consumidor que protege a sua compra e garante a satisfação com o seu investimento. Por isso, eu garanto que se dentro de 7 dias, você não estiver satisfeita com o material/conteúdo liberado, eu devolverei todo o seu dinheiro.  </h2>
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
                    
                    <h1 class="font-semibold text-gray-700">Ainda sou estudante de psicologia, a CGP é para mim?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Sim! Na Comunidade GROWP você terá acesso a conteúdos que complementarão a sua formação como psicóloga lhe darão mais segurança para começar a atuar profissionalmente com Orientação de Carreira assim que estiver formada.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Ainda não trabalho com Orientação de Carreira, a CGP é para mim?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Sim! A Comunidade GROWP é para todas as profissionais que trabalham com desenvolvimento humano, mesmo que ainda não tenham começado a fazer atendimentos de Orientação de Carreira.  Se você é profissional de RH, pedagoga, psicóloga ou gestora de pessoas (independentemente de sua formação) a CGP é para você.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Trabalho apenas com Orientação Profissional com foco em adolescentes, a CGP é para mim?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Sim! Na Comunidade GROWP você encontrará conteúdos nos pilares Sociedade e trabalho e Cuidando da sua carreira para crescer na área de OPC, mesmo que atenda somente adolescentes.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Poderei fazer download dos materiais disponibilizados?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Sim! Os materiais de apoio, utilizados para realização das aulas, serão disponibilizados para download.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Se tiver alguma dúvida sobre o conteúdo, terei suporte?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Sim! Você terá suas dúvidas sanadas através do fórum da própria plataforma da Comunidade GROWP. Funciona assim: você registra sua dúvida nos comentários da aula e ela será respondida também pelos comentários.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Por quanto tempo terei às aulas e conteúdos da CGP?</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">O tempo de acesso variará de acordo com o plano de assinatura que escolheu. Há opções do plano mensal, trimestral e semestral.</p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Como faço para ter mais tempo de acesso? </h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Não se preocupe! O plano de assinatura contratado será renovado automaticamente ao final do período. </p>
            </div>

            <div class="p-8 bg-gray-100 rounded-lg">
                <button class="flex items-center justify-between rounded-md px-4 py-2 text-gray-700 w-full faq">
                    
                    <h1 class="font-semibold text-gray-700">Ainda estou em dúvida se a Comunidade GrowP GROWP é para mim.</h1>

                    <span class="text-gray-400 bg-gray-200 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </span>
                </button>

               <p class="hidden bg-gray-200 rounded-md p-4 mt-2 transition-all duration-500 opacity-0">Não se preocupe. Você terá 24h de teste, sem nenhum custo, para acessar a CGP e conferir as aulas que já estão disponíveis por lá.  Também pode mandar um e-mail para contato@fabianaabath.com.br que vamos nos falando por lá.</p>
            </div>
        </div>
        <div class="w-full text-center">
            <button type="button" onclick="window.location.href = 'https://pay.hotmart.com/R61210971O'" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-6 focus:outline-none lg:w-1/5">Quero começar agora</button>
        </div>
    </div>
</section>