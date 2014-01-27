     <div class="rodape">
        <div class="conteudos">
          <div class="menu">
            <ul>
              <?php echo linksPaginas(); ?>
            </ul>
          </div>

          <div class="logotipo">
            <a href="http://grupomauaeregiao.com.br" target="_blank">
              <div class="logotipo-grupo-maua-e-regiao" title="Grupo Mauá e Região"></div>
            </a>
          </div>

          <div class="direitos-autorais">
            <p>&copy; 2013 Grupo Mauá e Região &#8212; Todos os direitos reservados</p>
          </div>
        </div>
      </div>
      <!-- # Rodapé -->
    </div>
    <!-- # Layout -->

    <?php wp_footer(); ?>
    <?php wp_reset_query(); ?>
    <?php if (is_page("todas-as-edicoes")) : ?>
      <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.pagination.min.js"></script>
    <?php endif; ?>
    <?php if (is_page("fale-conosco")) : ?>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vwy72asMQwHF9T4zqK0HP6Q9htHZJZ0&amp;sensor=true"></script>
      <script src="<?php bloginfo('template_url'); ?>/scripts/google.maps.js"></script>
    <?php endif; ?>
    <script src="<?php bloginfo('template_url'); ?>/scripts/scripts.min.js"></script>
  </body>
</html>