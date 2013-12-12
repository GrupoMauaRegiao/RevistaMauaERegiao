<?php get_header(); ?>

<div class="banner pagina-home">
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

<div class="conteudo">
  <div class="vitrine-issuu">
    <div class="cabecalho-vitrine-issuu">
      <h2>Edição Atual</h2>
    </div>

    <div class="vitrine">
      <?php query_posts("orderby=asc&posts_per_page=1&category_name=revista"); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php echo get_post_meta($post -> ID, "iframe ISSUU (sem width e height)", true); ?>
      <?php endwhile; else: ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="secao-relembre">
    <div class="cabecalho-secao-relembre">
      <h2>Relembre</h2>
    </div>

    <div class="revistas">
      <?php query_posts("orderby=rand&posts_per_page=4&category_name=revista"); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php bloginfo("url") ?>/index.php/categorias/edicao/?id=<?php echo $post->ID; ?>">
          <div class="revista">
            <div class="imagem">
              <img src="<?php echo get_post_meta($post -> ID, "Imagem CAPA", true); ?>" alt="">
            </div>
            <div class="informacoes">
              <div class="numero-edicao">
                <h5>Edição <span class="numero"><?php echo get_post_meta($post -> ID, "Edição", true); ?></span></h5>
              </div>
              <div class="titulo-edicao">
                <p><?php the_title(); ?></p>
              </div>
            </div>
          </div>
        </a>
      <?php endwhile; else: ?>
      <?php endif; ?>
    </div>

  </div>
</div>
<!-- # Conteúdo -->

<?php get_footer(); ?>