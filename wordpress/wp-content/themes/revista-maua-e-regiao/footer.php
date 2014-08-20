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
                <p>&copy; <?php echo date(Y); ?> Grupo Mauá e Região &#8212; Todos os direitos reservados</p>
            </div>
        </div>
    </div>
    <!-- # Rodapé -->
</div>
<!-- # Layout -->

    <?php
    wp_footer();
    wp_reset_query();

    if (is_page("todas-as-edicoes")) :
    ?>
        <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.pagination.min.js"></script>

    <?php
    endif;
    if (is_page("fale-conosco")) :
    ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9vwy72asMQwHF9T4zqK0HP6Q9htHZJZ0&amp;sensor=true"></script>
        <script src="<?php bloginfo('template_url'); ?>/scripts/google.maps.js"></script>

    <?php
    endif;
    ?>
        <script src="<?php bloginfo('template_url'); ?>/scripts/scripts.min.js"></script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-47556600-1']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol
                  ? 'https://ssl'
                  : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
