<?php
get_header();

if (!$wp_query) {
    global $wp_query;
}

$args = array(
                "category_name" => "revista"
        );

$args = array_merge(
                $args,
                $wp_query->query
        );

?>
<div class="conteudo">
    <div class="resultado-busca">
        <div class="revistas">
            <div class="cabecalho-revistas">
                <h2>Resultados para <i><?php echo get_search_query(); ?></i></h2>
            </div>
            <div class="display">
                <?php
                query_posts($args);
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <div class="revista">
                    <div class="imagem">
                        <img src="<?php echo get_post_meta($post -> ID, "Imagem CAPA", true); ?>" alt="">
                    </div>
                    <div class="informacoes">
                        <div class="busca-edicao">
                            <span>Edição <?php echo get_post_meta($post -> ID, "Edição", true); ?></span>
                        </div>
                        <div class="busca-titulo-edicao">
                            <a href="<?php bloginfo('url'); ?>/categorias/edicao/?id=<?php echo $post -> ID; ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="tags">
                            <ul>
                                <li><span>Tags: </span></li>
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                ?>
                                        <li><a href="<?php bloginfo('url'); ?>/?tag=<?php echo $tag -> slug; ?>"><?php echo $tag -> name; ?></a></li>
                                        <li><span class="marcador">&#8226;</span></li>
                                    <?php
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            endwhile; else :
            ?>
                <div class="informacoes-adicionais">
                    <p>
                        Infelizmente sua busca por <i><?php echo get_search_query(); ?></i> não obteve resultados.<br>
                        Por favor, procure com outros termos ou leia outras edições:
                    </p>
                </div>
                <?php
                query_posts("orderby=rand&posts_per_page=10&category_name=revista");
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                    <div class="revista">
                        <div class="imagem">
                            <img src="<?php echo get_post_meta($post -> ID, "Imagem CAPA", true); ?>" alt="">
                        </div>
                        <div class="informacoes">
                        <div class="busca-edicao">
                            <span>Edição <?php echo get_post_meta($post -> ID, "Edição", true); ?></span>
                        </div>
                        <div class="busca-titulo-edicao">
                            <a href="<?php bloginfo('url'); ?>/categorias/edicao/?id=<?php echo $post -> ID; ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="tags">
                            <ul>
                                <li><span>Tags: </span></li>
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                ?>
                                    <li><a href="<?php bloginfo('url'); ?>/?tag=<?php echo $tag -> slug; ?>"><?php echo $tag -> name; ?></a></li>
                                    <li><span class="marcador">&#8226;</span></li>
                                <?php
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            endwhile; else :
            endif;
            endif;
            ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
