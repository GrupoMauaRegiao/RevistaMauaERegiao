<?php get_header(); ?>

<?php
include "bitly-url-shortener.php";
include "config.php";
?>

<div class="conteudo">
  <div class="cabecalho-edicao">
    <h1>Edições</h1>
  </div>

  <div class="edicao">

    <div class="player-edicao">
      <div class="player">
        <?php $numeroEdicao = "&p=" . $_GET["id"]; ?>
        <?php query_posts("posts_per_page=1" . $numeroEdicao); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php echo get_post_meta($post -> ID, "iframe ISSUU (sem width e height)", true); ?>
      </div>

        <?php $numeroEdicao = get_post_meta($post -> ID, "Edição", true); ?>

        <div class="numero-edicao">
          <h1>Edição <?php echo $numeroEdicao; ?></h1>
        </div>

        <?php
        $permalink = get_permalink();
        $titulo = get_the_title();
        ?>

        <div class="redes-sociais">
          <div class="icones">
            <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>">
              <div class="icone"></div>
            </a>

            <a target="_blank" href="https://twitter.com/intent/tweet?text=Edição <?php echo $numeroEdicao; ?>: <?php echo $titulo; ?>&amp;url=<?php echo urlShortBitly($permalink, $apiToken); ?>&amp;via=tvmauaeregiao&amp;hashtags=maua,revistamaua">
              <div class="icone"></div>
            </a>

            <a href="#outros">
              <div class="icone"></div>
            </a>
          </div>
        </div>
      </div>

      <div class="informacoes-edicao">
        <div class="titulo-edicao">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="data-edicao">
          <div class="icone-relogio"></div>
          <div class="mes">
            <span><?php echo get_post_meta($post -> ID, "MÊS ano (ex.: setembro 2013)", true); ?></span>
          </div>
        </div>
      </div>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <div class="secao-relembre">
      <div class="cabecalho-secao-relembre">
        <h2>Anteriores</h2>
      </div>

      <div class="revistas">
        <?php query_posts("orderby=asc&posts_per_page=4&category_name=revista"); ?>
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
</div>

<?php get_footer(); ?>