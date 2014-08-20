<?php
function linksPaginas() {
    $categories = wp_list_pages("echo=0&title_li");
    // Adiciona a div com a classe borda-link-menu
    $categories = str_replace("<a", "<div class='borda-link-menu'></div><a", $categories);
    return $categories;
}

function definirClasseParaPaginas() {
    if (is_page("gabaritos")) {
        $classe = "pagina-gabaritos";
    } elseif (is_page("sobre-nos")) {
        $classe = "pagina-sobre-nos";
    } elseif (is_page("anuncie")) {
        $classe = "pagina-anuncie";
    } elseif (is_page("fale-conosco")) {
        $classe = "pagina-fale-conosco";
    } elseif (is_category("edicao")) {
        $classe = "pagina-edicao";
    } else {
        $classe = "esconder";
    }
    return $classe;
}

function definirTitulo() {
    if (is_page()) {
        $titulo = "&#8212; " . get_the_title();
    } elseif (is_category()) {
        $titulo = "&#8212;  Edição: " . get_post_meta($_GET["id"], "Edição", true);
    }
    return $titulo;
}

function UrlAtual() {
    return "http://" . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
}
?>
