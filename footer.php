    <!-- Footer -->
    <footer class="footer footer-center p-10 text-base-content rounded mt-10 bg-gray-100">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover" href="<?= get_site_url() ?>/terminos-y-condiciones">Términos y Condiciones</a>
            <a class="link link-hover" href="https://empresasee.do/corporativo/" target="_blank">Sobre Nosotros</a>
            <a class="link link-hover" href="https://empresasee.do/contacto/" target="_blank">Contacto</a>
        </nav>

        <!-- Social Media Menu -->
        <nav>
            <div class="grid grid-flow-col gap-4 text-3xl">
                <a href="https://www.facebook.com/LungomareBarLounge?mibextid=LQQJ4d" target="blank"><i class="fa-brands fa-square-facebook"></i></a>
				<a href="https://www.instagram.com/lungomarebarlounge/" target="blank"><i class="fa-brands fa-square-instagram"></i></a>
				<!-- <a href="http://www.empresasee.do/" target="blank"><i class="fa-solid fa-briefcase"></i></a> -->
            </div>
        </nav>

        <!-- Copyright Information -->
        <aside>
            <p>Eventos E&E © 2024 - Powered by <a class="underline" href="http://mbe-ecommerce.com" target="_blank">MBE
                    eCommerce</a></p>
        </aside>
    </footer>
    <?php wp_footer() ?>

    <script>
        jQuery(document).ready(function($) {
            let currentIndex = 0;
            const slides = $('#carousel .carousel-item');
            const totalSlides = slides.length;

            if (totalSlides === 0) {
                console.error('No se encontraron elementos del carrusel.');
                return;
            }

            console.log(`Se encontraron ${totalSlides} elementos del carrusel.`);

            const showSlide = (index) => {
                slides.eq(currentIndex).fadeOut(500); // Oculta la diapositiva actual gradualmente
                slides.eq(index).fadeIn(1000); // Muestra la nueva diapositiva gradualmente
                currentIndex = index; // Actualiza el índice actual
            };

            const nextSlide = () => {
                const nextIndex = (currentIndex + 1) % totalSlides;
                showSlide(nextIndex);
            };

            // Mostrar la primera diapositiva al cargar la página
            showSlide(0);

            setInterval(nextSlide, 7000); // Cambia la imagen cada 5 segundos
        });
    </script>





    </body>

    </html>
    <!-- END of Footer -->