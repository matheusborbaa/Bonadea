
<footer id="contato">
        <div class="footer-content">
            <img src="<?php echo _URLTHEME; ?>/assets/img/logo-footer.png" alt="">
            <div class="informations">
                <div>
                    <p>Endereço: 133/2 - Lisboa - PT</p>
                    <p>www.bonadea.pt</p>
                </div>
                <div>
                    <p>contato@bonadea.pt</p>
                    <p>91264-5395</p>
                </div>
                <div>
                    <p>De Terça a Sábado das 9h às 19h</p>
                    <p>Mais de 160 MIL Mulheres transformadas</p>
                </div>

            </div>
        </div>
    </footer>



   







    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.testemunhos').slick({
		  dots: false,
		  arrows: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      rows: 2,
		  slidesToScroll: 1,
      slidesPerRow: 2,
      useCSS: false,
      responsive: [
        {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          slidesPerRow: 2,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
      ]
});
    });
  </script>










<?php wp_footer(); ?>
</body>
</html>