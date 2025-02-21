
<?php

/**
 * Template Name: Contatos
 */

get_header();
?>
<section class="cima-contato">
</section>
<section class="contato">
<h2>Entre em Contato</h2>
<div class="conteudo">
    <div class="left">
      <CENTER>
      <img src="<?php echo _URLTHEME; ?>/assets/img/logo-footer.png" alt="" style="height: 60px; width: auto; padding-bottom: 50px;">
      </CENTER>
    <p><span>Rua: A Gazeta d&#8217;Oeiras, Nº 14B, 2780-171 Oeiras</span></p>
<p><span >E-Mail: <a style="color: #616b43;" href="mailto:geral@bonadea.pt">geral@bonadea.pt</a></span></p>
<p><span>Telemóvel: 912 645 395</span></p>
    </div>
    <div class="right">
    <?php echo do_shortcode('[contact-form-7 id="b1999f6" title="Contato"]'); ?>

    </div>
    </div>
</section>

<?php
get_footer();
?>