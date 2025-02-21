
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
    <div class="titulo"><h2>Nossos serviços</h2>
    <p>Confira abaixo um pouco de nossos serviços</p>
    </div>


      
        <div id="cCarousel">
    <div class="arrow" id="prev"><i class="fa fa-arrow-left"></i></div>
    <div class="arrow" id="next"><i class="fa fa-arrow-right"></i></div>

    <div id="carousel-vp">
      <div id="cCarousel-inner">

     
      <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/beautycare.png">
          <div class="infos">
          <h3>Beauty Care</h3>
         <p class="text">          Um serviço que cuida da sua beleza, utilizando das técnicas mais avançadas do mercado.
         </p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/bodycare.png">
          <div class="infos">
          <h3>Body Care</h3>
         <p class="text">         Um serviço especializado que se dedica para cuidando do seu corpo.
         </p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/facecare.png">
          <div class="infos">
          <h3>Face Care</h3>
         <p class="text">          Um serviço especializado que vai além da estética, cuidando da saúde do seu rosto.
         </p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/haircare.png">
          <div class="infos">
          <h3>Hair Care</h3>
         <p class="text"> 
         Mudar é inovar, arriscar e destacar. Dê uma reviravolta na sua auto-estima.
Cortes com textura e encaixe idealmente ajustado ao seu tipo de cabelo e rosto.




        </p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/browfiller.png">
          <div class="infos">
          <h3>Browfiller</h3>
         <p class="text">O Browfiller é a técnica perfeita para sobrancelhas mais preenchidas e definidas, proporcionando um olhar impactante e harmonioso. Ideal para quem deseja corrigir falhas, realçar o formato ou obter um efeito natural e volumoso.</p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/hifu.png">
          <div class="infos">
          <h3>HIFU<br><small>(Ultrassom Focalizado de Alta Intensidade)</small></h3>
         <p class="text"> O HIFU é um tratamento não invasivo que utiliza ultrassom para estimular a produção de colagénio, promovendo firmeza e rejuvenescimento da pele. Ideal para lifting facial, redução de rugas e flacidez, garantindo resultados visíveis e duradouros.
         </p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/laserfungos.png">
          <div class="infos">
          <h3>Laser de Fungos</h3>
         <p class="text"> Tratamento eficaz e seguro para a eliminação de fungos nas unhas. O laser atua diretamente sobre a área afetada, promovendo a recuperação da unha saudável sem dor ou necessidade de tratamentos invasivos.</p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/pedicuremedica.png">
          <div class="infos">
          <h3>Pedicure Médica</h3>
         <p class="text"> Um serviço especializado que vai além da estética, cuidando da saúde dos pés. Indicado para tratar calos, unhas encravadas, fissuras e outros problemas, garantindo conforto, bem-estar e um resultado impecável.</p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/microagulhamento.png">
          <div class="infos">
          <h3>Microagulhamento</h3>
         <p class="text"> O microagulhamento estimula a renovação da pele através da produção de colagénio. Perfeito para tratar manchas, cicatrizes de acne, rugas e poros dilatados, devolvendo à pele firmeza, luminosidade e um aspeto rejuvenescido.</p>
          </div>
        </article>
        <article class="service-card">
          <img class="service-image" src="<?php echo _URLTHEME; ?>/assets/img/services/limpezapeleprofunda.png">
          <div class="infos">
          <h3>Limpeza de Pele Profunda</h3>
         <p class="text"> A limpeza de pele profunda é ideal para remover impurezas, desobstruir poros e promover uma pele saudável e revitalizada. Um tratamento essencial para quem procura um rosto limpo, hidratado e com um brilho natural.</p>
          </div>
    </article>
      </div>
    </div>
    </div>
</section>
<section class="testemunho-sessao">
<div class="testemunhos">
		<div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/10.png" alt="" class="pessoa">
            </div>
            <div class="right">
            <h3>
        Atendimento 5 estrelas, profissionais nota máxima! Espaço cuidado a pensar no bem estar das clientes! Recomendo vivamente e vou voltar sempre que estiver em Portugal!
            </h3>
            <br>
            Vânia
            </div>
        </div>
        
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/05.png" alt="" class="pessoa">
            </div>
            <div class="right">
                <h3>O meu instituto de beleza favorito ❤️ Bons produtos, muito bom ambiente e acima de tudo excelentes profissionais. Muito sucesso!</h3>
                <Br>Silvia Vieira	
            </div>
        </div>
       
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/11.png" alt="" class="pessoa">
            </div>
            <div class="right">
            <h3>
                Obrigada Bonadea! Atendimento atencioso e um serviço 5 estrelas. Para mim o melhor espaço de beleza na zona de Lisboa. Um serviço cuidado e personalizado às necessidades da cliente. Sempre que volto tenho vontade de experimentar novos serviços. ☺️ Um beijinho e obrigada por tratarem bem de mim.
            </h3>
            <br>
            Rita Ribeiro
            </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/09.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>Adoro tudo! Desde o espaço  que por sinal de muito bom gosto; das meninas: Bruna e Yolanda que são umas doçuras e óptimas profissionais! Já fiz sobrancelha definitiva em 3D; lifting de pestanas; extensão de pestanas e faço todos os meses depilação de buço e sobrancelha. Além da minha filhota de nove anos que virou cliente também!! Recomendo a todas conhecerem!</h3>
                    <br>
                    Elaine Correia
                </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/08.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>
                    Não há nada como termos realmente a sensação de que é verdade quando nos dizem: Seja bem vinda! Na Bonadea temos três certezas: vamos ser atendidas por profissionais, vamos ser mimadas e vamos ter um sorriso sempre à nossa espera. Está feita a receita para o sucesso! 
                    </h3>
                    <br>
                    Vera Leão
            </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/07.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>Não troco os serviços da BonaDea por nada deste mundo. Óptimo espaço, profissionais de qualidade e um atendimento que deixa qualquer uma com um sorriso na cara. Obrigada pelo trabalho, pelo profissionalismo e pela simpatia inigualável ☺️</h3>
                    <BR>Ivana Castelo Branco
            </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/06.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>Superprofissionais! As melhores e já não vivo sem a minha extensão de pestanas e sem a BonaDea claro! Adoro!</h3>
                    <BR>
                    Carolina Mira
            </div>

        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/04.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>Conheço o instituto à cerca de dois anos e desde aí não conheço outro. ☺️ Foi quase amor à primeira vista! Desde pestanas, unhas, tratamentos de pele, massagens relaxantes... é um elenco de tratamentos que qualquer mulher se derrete. Sou uma cliente assídua e pretendo continuar a usufruir da dedicação intensa que a BonaDea tem para me oferecer! Obrigada Bruna por teres aparecido na minha vida. Um beijo grande para todas, vocês são as melhores!</h3>
                    <BR> Anita Prazeres
            </div>
        </div>
        
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/10.png" alt="" class="pessoa">
            </div>
            <div class="right">
            <h3>
        Atendimento 5 estrelas, profissionais nota máxima! Espaço cuidado a pensar no bem estar das clientes! Recomendo vivamente e vou voltar sempre que estiver em Portugal!
            </h3>
            <br>
            Vânia
            </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/03.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>A Bonadea está top! Inspira qualquer pessoa a visitar o espaço, que sem sombra de dúvida é o melhor espaço de beleza que já vi. O verdadeiro paraíso de qualquer Mulher! Obrigada a todos por me receberem sempre tão bem, a boa vibe do local é contagiante, é impossível sair de lá sem um enorme sorriso  Sou feliz por ter uma Bruna Barbosa na minha vida  Parabéns pelo excelente trabalho.
                    </h3>
                    <BR>
                    Joasilenea Silva
            </div>
        </div>
       
    <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/02.png" alt="" class="pessoa">
            </div>
            <div class="right">
                    <h3>Adoro tudo! Desde o atendimento e simpatia aos resultados. As minhas unhas ficam exatamente como gosto e as pestanas dão logo outra vida à minha cara. Mas o que não troco por nada é o cuidado, disponibilidade e atenção com que me tratam sempre. Obrigada!</h3>
                    <BR>Marta Alburqueque	
            </div>
        </div>
        <div class="testemunho">
            <div class="left">
                <img src="<?php echo _URLTHEME; ?>/assets/img/testemunhos/06.png" alt="" class="pessoa">
            </div>
            <div class="right">
            <h3>Superprofissionais! As melhores e já não vivo sem a minha extensão de pestanas e sem a BonaDea claro! Adoro!</h3>
                    <BR>
                    Carolina Mira
            </div>
        </div>

        
		
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


<script>


$(window).scroll(function() { 
    var scroll = $(window).scrollTop();
 
    if (scroll > 500) {
        $('header').addClass('menu-auxiliar');
    } else {
        $('header').removeClass('menu-auxiliar');
    }
});



</script>

<script>




        const prev = document.querySelector("#prev");
const next = document.querySelector("#next");

let carouselVp = document.querySelector("#carousel-vp");

let cCarouselInner = document.querySelector("#cCarousel-inner");
let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;

let leftValue = 0;

// Variable used to set the carousel movement value (card's width + gap)
const totalMovementSize =
  parseFloat(
    document.querySelector(".service-card").getBoundingClientRect().width,
    10
  ) +
  parseFloat(
    window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
    10
  );

prev.addEventListener("click", () => {
  if (!leftValue == 0) {
    leftValue -= -totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }
});

next.addEventListener("click", () => {
  const carouselVpWidth = carouselVp.getBoundingClientRect().width;
  if (carouselInnerWidth - Math.abs(leftValue) > carouselVpWidth) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
  }
});

const mediaQuery510 = window.matchMedia("(max-width: 510px)");
const mediaQuery770 = window.matchMedia("(max-width: 770px)");

mediaQuery510.addEventListener("change", mediaManagement);
mediaQuery770.addEventListener("change", mediaManagement);

let oldViewportWidth = window.innerWidth;

function mediaManagement() {
  const newViewportWidth = window.innerWidth;

  if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
    leftValue += totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  } else if (
    leftValue <= -totalMovementSize &&
    oldViewportWidth > newViewportWidth
  ) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = leftValue + "px";
    oldViewportWidth = newViewportWidth;
  }
}

        </script>



<?php

/**
 * Template Name: Início
 */

get_footer();
?>