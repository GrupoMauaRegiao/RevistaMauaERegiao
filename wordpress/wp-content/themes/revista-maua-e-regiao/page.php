<?php get_header(); ?>

<?php if (is_page("fale-conosco")) { ?>
<div class="cabecalho-fale-conosco">
  <h1>Fale conosco</h1>
</div>
<?php } ?>


<div class="banner <?php echo definirClasseParaPaginas(); ?>">
  <div class="conteudos">
    <div class="texto">
      <h1>
        Inovar<br>
        é o que nos <b>move</b>.
        </h1>
    </div>
  </div>
</div>

<!-- # Banner -->
<?php
  if (is_page("todas-as-edicoes")) {
    include "todas-as-edicoes.php";
  } elseif (is_page("gabaritos")) {
    include "gabaritos.php";
  } elseif (is_page("sobre-nos")) {
    include "sobre-nos.php";
  } elseif(is_page("anuncie")) {
    include "anuncie.php";
  } elseif (is_page("fale-conosco")) {
    include "fale-conosco.php";
  }
?>
<?php get_footer(); ?>