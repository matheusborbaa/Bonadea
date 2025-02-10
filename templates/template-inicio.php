
    <?php

/**
 * Template Name: Início
 */

get_header();
?>
<section class="hero" id="home">
    <?php if (wp_is_mobile()) : ?>
        <!-- Versão para Mobile: Seções empilhadas -->
        <div class="section left">
            <div class="text">
                <h2 class="cima">Elevamos a sua <br>Auto-Estima</h2>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mulher-creme.png" alt="Mulher aplicando creme no rosto">
            </div>
            <h2 class="baixo">Tratamento Estético</h2>
            <p>Transforme sua rotina de beleza com nossos tratamentos exclusivos.</p>
        </div>

        <div class="section center">
            <div class="content">
                <div class="sol">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sol.png" width='50px' height="auto" alt="Sol">
                </div>
                <div class="estrela">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/estrela.png" width='50px' height="auto" alt="Estrela">
                </div>
                <h1>Inspirados pela <div class="capitalize">Natureza</div></h1>
                <p>Experimente o luxo da simplicidade. Tratamentos para sua pele e alma.</p>
                <button class="btn">SAIBA MAIS</button>
            </div>
        </div>

        <div class="section right">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mulher02.png" alt="Corpo feminino">
            </div>
            <div class="vertical-text">INSTITUTO DE BELEZA</div>
        </div>

    <?php else : ?>
        <!-- Versão para Desktop: Layout original com seções lado a lado -->
        <div class="banner">
            <div class="section left">
                <div class="text">
                    <h2 class="cima">Elevamos a sua <br>Auto-Estima</h2>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mulher-creme.png" alt="Mulher aplicando creme no rosto">
                </div>
                <h2 class="baixo">Tratamento Estético</h2>
                <p>Transforme sua rotina de beleza com nossos tratamentos exclusivos.</p>
            </div>

            <div class="section center">
                <div class="content">
                    <div class="sol">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sol.png" width='50px' height="auto" alt="Sol">
                    </div>
                    <div class="estrela">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/estrela.png" width='50px' height="auto" alt="Estrela">
                    </div>
                    <h1>Inspirados pela <div class="capitalize">Natureza</div></h1>
                    <p>Experimente o luxo da simplicidade. Tratamentos para sua pele e alma.</p>
                    <button class="btn">SAIBA MAIS</button>
                </div>
            </div>

            <div class="section right">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mulher02.png" alt="Corpo feminino">
                </div>
                <div class="vertical-text">INSTITUTO DE BELEZA</div>
            </div>
        </div>
    <?php endif; ?>
</section>


<section class="services" id="beleza">
    <h2>Nossos serviços</h2>
    <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis ex nihil dolore non
        doloremque harum.</p>

    <div class="services-carousel">
        <div class="service-card">
            <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/olho.png')"></div>
            <h3>Beauty Care</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
        <h3>HIFU</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Face Care</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Hair Care</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>BrowFiller</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>HIFU</h3>
            <h4>(Ultrassom localizado de alta intencidade)</h4>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Lazer de Fungos</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Pedicure Médica</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Microagulhamento</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
        <div class="service-card">
        <div class="service-image" style="background-image: url('<?php echo _URLTHEME; ?>/assets/img/hifu.png')"></div>
            <h3>Limpeza de Pele Profunda</h3>
            <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="testimonials-carousel">
        <div class="testimonials-grid">
            <!-- Primeiro par de cards -->
            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/mulher3.jpg" alt="Teresa Sobral" />
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </p>
                    <h3 class="testimonial-author">Teresa Sobral</h3>
                    <p class="testimonial-role">/ Advogada</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="<?php echo _URLTHEME; ?>/assets/img/mulher2.jpg" alt="Amanda Batista" />
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </p>
                    <h3 class="testimonial-author">Amanda Batista</h3>
                    <p class="testimonial-role">/ Engenheira</p>
                </div>
            </div>
            

            <!-- Segundo par de cards -->
            <div class="testimonial-card">
                <div class="testimonial-image">
                     <img src="<?php echo _URLTHEME; ?>/assets/img/mulher1.jpg" alt="Carla Lopez" />
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </p>
                    <h3 class="testimonial-author">Carla Lopez</h3>
                    <p class="testimonial-role">/ Professora</p>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-image">
                      <img src="<?php echo _URLTHEME; ?>/assets/img/image 10.png" alt="Jennifer" />
                </div>
                <div class="testimonial-content">
                    <p class="testimonial-quote">
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </p>
                    <h3 class="testimonial-author">Jennifer</h3>
                    <p class="testimonial-role">/ Lojista</p>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicators">
        <span class="indicator active"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
    </div>
</section>


<!-- 
<section class="testimonials" id="estetica">
    <div class="testimonials-carousel">
        <div class="testimonial-card">
            <img class="testimonial-image" src="" alt="">
            <div class="testimonial-right">
                <h3>Beauty Care</h3>
                <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
                <p class="author">Teresa Sobral</p>
                <p class="role">/ Advogada</p>
            </div>
        </div>
        <div class="testimonial-card">
            <img class="testimonial-image" src="" alt="">
            <div class="testimonial-right">
                <h3>Beauty Care</h3>
                <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
                <p class="author">Amanda Batista</p>
                <p class="role">/ Engenheira</p>
            </div>

        </div>
        <div class="testimonial-card">
            <img class="testimonial-image" src="" alt="">
            <div class="testimonial-right">
                <h3>Beauty Care</h3>
                <p>Lorem ipsum dolor sit amet. In quaerat rerum est minus asperiores ut rerum perspiciatis.</p>
                <p class="author">Carla Lopez</p>
                <p class="role">/ Professora</p>
            </div>

        </div>
    </div>
    <div class="scroll-indicators">
        <span class="indicator active"></span>
        <span class="indicator"></span>
        <span class="indicator"></span>
    </div>
</section>-->

<?php

/**
 * Template Name: Início
 */

get_footer();
?>