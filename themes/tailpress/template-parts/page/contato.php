<div class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto py-20 flex gap-16">
        <div class="p-3 flex flex-col items-center gap-2">
            <div class="inline-block bg-blue-200 p-6 rounded-full">
                <!-- add class text-green -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-green">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                </svg>
            </div>
            <p class="m-0 text-lg text-center font-semibold">Email</p>
            <p class="m-0 text-gray-500">info@example.com</p>
            <p class="m-0 text-gray-500">info@example.com</p>
        </div>
        <section class="container">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Como podemos te Ajudar ?</h2>
            <p class="font-light text-gray-500 sm:text-xl lg:w-1/3">Entre em contato e nos informe de que modo podemos te ajudar !</p>
            <form class="mt-8 container flex flex-col items-end gap-6">
                <div class="container">
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Seu nome</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Nome">
                </div>
                <div class="container">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Seu email</label>
                    <input type="email" id="email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="name@fabianaabath.com" required>
                </div>
                <div class="container sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Sua mensagem</label>
                    <textarea id="message" rows="6" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500" placeholder="Deixe sua pergunta..."></textarea>
                </div>
                <button type="button" class="lg:w-fit text-white bg-emerald-900 hover:bg-emerald-950 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Enviar</button>
            </form>
        </section>
    </div>
</div>