<?php
function linksPaginas() {
  $categories = wp_list_pages("echo=0&title_li");
  // Adiciona a div com a classe borda-link-menu
  $categories = str_replace("<a", "<div class='borda-link-menu'></div><a", $categories);
  return $categories;
}

function definirClasseParaPaginas() {
  if (is_page("sobre-nos")) {
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
?>