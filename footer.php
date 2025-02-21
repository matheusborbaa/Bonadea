
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
<script type="text/javascript" src="/<?php echo _URLTHEME; ?>/assets/js/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('#slide').slick({
        slidesToShow: 2,
        rows: 2,
    autoplay: false,
    arrows: false,
    dots: false,
    autoplaySpeed: 3000,
      });
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
    document.querySelector(".cCarousel-item").getBoundingClientRect().width,
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










<?php wp_footer(); ?>
</body>
</html>