
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
            <p>www.bonadea.pt. All Right Reserved</p>
        </div>
    </footer>

    <script>



$(window).scroll(function() { 
    var scroll = $(window).scrollTop();

    if (scroll > 500) {
        $('.menu').css('background-color','yellow');
    } else {
        $('.menu').css('background-color','blue');
    }
});


        // Progress bar
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.progress-bar').style.width = scrolled + '%';
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>