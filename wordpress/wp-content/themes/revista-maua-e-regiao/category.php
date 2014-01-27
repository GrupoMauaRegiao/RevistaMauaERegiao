<?php get_header(); ?>

<?php
include "bitly-url-shortener.php";
include "config.php";
$linkAtual = "http://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
?>

<div class="conteudo">
  <div class="cabecalho-edicao">
    <h1>Edições</h1>
  </div>

  <div class="edicao">

    <div class="player-edicao">
      <div class="player">
        <?php $IDEdicao = "&p=" . $_GET["id"]; ?>
        <?php query_posts("posts_per_page=1" . $IDEdicao); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php echo get_post_meta($post -> ID, "iframe ISSUU (sem width e height)", true); ?>
      </div>

        <?php $numeroEdicao = get_post_meta($post -> ID, "Edição", true); ?>

        <div class="numero-edicao">
          <h1>Edição <?php echo $numeroEdicao; ?></h1>
        </div>

        <?php
        $titulo = get_the_title();
        $textoTweet = 'Edição ' . $numeroEdicao . ': ' . $titulo;
        ?>

        <div class="redes-sociais">
          <div class="icones">
            <a title="Compartilhe no facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $linkAtual; ?>">
              <div class="icone"></div>
            </a>

            <a title="Compartilhe no twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo urlencode($textoTweet); ?>&amp;url=<?php echo urlShortBitly($linkAtual, $apiToken); ?>&amp;via=tvmauaeregiao&amp;hashtags=maua">
              <div class="icone"></div>
            </a>

            <a title="Envie a um amigo" class="enviar-para-um-amigo" href="#enviar-a-um-amigo">
              <div class="icone"></div>
            </a>
          </div>
        </div>
      </div>

      <div class="enviar-para-amigo">
        <div class="formulario">
          <form action="<?php bloginfo('template_url'); ?>/enviar-mensagem.php" method="get">
            <label for="e-mail">Enviar a um amigo por e-mail:</label><br>
            <input type="text" id="e-mail" name="e-mail">
            <input type="text" id="ignorado" name="ignorado" style="display:none;">
            <input type="button" id="enviar" value="Enviar" name="enviar">
            <input type="hidden" id="mensagem" name="mensagem" value="<?php echo 'Um amigo enviou para você o link para ler a edição ' . $numeroEdicao . ' da Revista Mauá e Região: ' . $linkAtual; ?>">
            <input type="hidden" id="flag" name="flag">
          </form>

          <div class="mensagem-sucesso">
            <p>
              E-mail enviado com sucesso.<br>
              O seu amigo irá gostar!</p>
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
        <h2>Outras edições</h2>
      </div>
      <div class="revistas">
        <?php $id = $post -> ID; ?>
        <?php
        query_posts(
            array(
                "orderby" => "asc",
                "posts_per_page" => 4,
                "category_name" => "revista",
                "post__not_in" => array($id)
            )
        );
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a title="Edição <?php echo get_post_meta($post -> ID, "Edição", true); ?>" href="<?php bloginfo("url") ?>/categorias/edicao/?id=<?php echo $post -> ID; ?>">
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