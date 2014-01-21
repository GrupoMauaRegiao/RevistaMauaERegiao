<div class="conteudo">
  <div class="edicoes todas-edicoes">

    <div class="cabecalho-edicoes">
      <h1>Edições</h1>
    </div>


    <div class="lista-edicoes">
      <div class="revistas" id="revistas">

        <div class="area-busca">
          <div class="borda-topo">
          </div>
          <div class="formulario">
            <div class="mensagem">
              <label for="busca">
                Qual o número da<br>
                edição que deseja<br>
                encontrar?
              </label>
            </div>
            <input id="busca" type="text" name="busca" class="search" maxlength="2">
            <input type="button" name="botao-busca" value=" ">
          </div>
        </div>

        <div class="list">
          <?php query_posts("orderby=asc&posts_per_page=100&category_name=revista"); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php bloginfo("url") ?>/categorias/edicao/?id=<?php echo $post -> ID; ?>">
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
        <div class="paginador">
          <div class="marcadores-pagina">
            <ul class="pagination"></ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>