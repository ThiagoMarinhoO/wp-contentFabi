
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="border-t border-gray-100">
		<div class="lg:max-w-7xl mx-auto py-16 grid grid-cols-1 md:grid-cols-3 gap-15 md:mb-4 p-5">
			<h3 class="italic font-medium mb-6 lg:mb-0">Fabiana Abath é especialista em gestão e desenvolvimento de carreira, com mais de 20 anos de experiência em desenvolvimento humano e organizacional.  Sua missão é transformar a relação das pessoas com o trabalho, contribuindo para existirem cada vez mais profissionais satisfeitos com suas carreiras e empresas prósperas.</h3>
			<div class="lg:px-5 flex lg:justify-center gap-x-4 mb-6 lg:mb-0">
				<div class="lg:pt-1">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>
				</div>
				<div class="ml-4 lg:ml-0">
					<h3 class="text-lg font-semibold mb-3">Links Rápidos</h3>
					<?php
						wp_nav_menu(
							array(
								'container_id'    => 'primary-menu',
								'container_class' => '',
								'menu_class'      => 'flex flex-col gap-3 font-medium text-sm',
								'theme_location'  => 'primary',
								'li_class'        => '',
								'fallback_cb'     => false,
								'add_a_class'     => 'text-gray-500 font-medium hover:underline',
							)
						);
					?>
				</div>
			</div>
			<div class="lg:px-5 flex gap-x-4">
				<div class="lg:pt-1">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-700">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
					</svg>
				</div>
				<div class="ml-4 lg:ml-0">
					<h3 class="text-lg font-semibold">Email</h3>
					<p class="text-gray-500 font-medium">contato@fabianaabath.com.br</p>
				</div>
			</div>
		</div>
		<div class="lg:max-w-7xl mx-auto py-5 border-t border-gray-300">
			<div class="flex flex-col lg:flex-row flex-wrap justify-between items-center py-4 px-5 lg:px-8">
				<a href="<?php echo get_bloginfo( 'url' );?>" class="flex items-center mb-6 lg:mb-0">
					<img src="/wp-content/uploads/2023/05/Identidade-Horizontal-reflexo-azul-1.png" class="h-9"/>
				</a>
				<div class="text-gray-500 mb-6 lg:mb-0">
					<img src="/wp-content/themes/tailpress/resources/images/abop.png" alt="" class="h-12">
				</div>
				<div class="flex items-center gap-5">
					<a href="https://www.youtube.com/@FabianaAbath" class="hover:underline">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube text-gray-500">
							<path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
							<polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
						</svg>
					</a>
					<a href="https://www.linkedin.com/in/fabianaabath/" class="hover:underline mr-4 lg:mr-0">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin text-gray-500" viewBox="0 0 16 16">
							<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
						</svg>
					</a>
					<a href="https://www.instagram.com/fabiana.abath/" class="hover:underline">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-gray-500" viewBox="0 0 16 16">
							<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
