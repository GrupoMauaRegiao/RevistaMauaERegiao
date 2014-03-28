<!doctype html>
<html prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="UTF-8">

    <meta property="og:url" content="<?php echo UrlAtual(); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Revista Mauá e Região <?php echo definirTitulo(); ?>" />
    <meta property="og:description" content="A Revista Mauá e região é um dos nomes mais fortes e respeitados da região. Isso se deve ao trabalho nela investido. Abordando assuntos sérios e de interesse da população de onde ela é entregue, com o objetivo de ser mais que uma revista de fofoca ou que apenas julga, a Revista Mauá e Região busca junto as pessoas soluções para seu município, e vai direto as autoridades buscar resultados." />
    <meta property="og:image" content="<?php echo get_post_meta($_GET["id"], "Imagem CAPA", true); ?>" />

    <meta name="keywords" content="revista maua, maua, sp, maua e regiao, grupo maua e regiao, empresas de mauá, ribeirão pires, revista maua, jornal maua, comprar em maua, comprar em rio grande da serra, comprar em ribeirão pires">
    <meta name="description" content="A Revista Mauá e região é um dos nomes mais fortes e respeitados da região. Isso se deve ao trabalho nela investido. Abordando assuntos sérios e de interesse da população de onde ela é entregue, com o objetivo de ser mais que uma revista de fofoca ou que apenas julga, a Revista Mauá e Região busca junto as pessoas soluções para seu município, e vai direto as autoridades buscar resultados.">
    <meta name="author" content="Grupo Mauá e Região de Comunicação">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imagens/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/styles.min.css">
    <title>Revista Mauá e Região <?php echo definirTitulo(); ?></title>
  </head>
  <body>
    <div class="layout">
      <div class="cabecalho">
        <div class="topo">
          <div class="layout-960px">
            <div class="espaco"></div>
            <div class="gabaritos">
              <ul>
                <li><a href="<?php bloginfo('url'); ?>/gabaritos">Gabaritos</a></li>
              </ul>
            </div>
            <div class="redes-sociais">
              <a target="_blank" href="http://www.youtube.com/revistamaua" title="Youtube">
                <div class="icone"></div>
              </a>
              <a target="_blank" href="https://twitter.com/tvmauaeregiao" title="Twitter">
                <div class="icone"></div>
              </a>
              <a target="_blank" href="https://www.facebook.com/revistamaua" title="Facebook">
                <div class="icone"></div>
              </a>
            </div>
          </div>
        </div>
        <div class="navegacao">
          <div class="conteudos">
            <a href="<?php bloginfo('url'); ?>" title="Revista Mauá e Região">
              <div class="logotipo"></div>
            </a>

            <div class="menu">
              <div class="link-todas-edicoes">
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/todas-as-edicoes">Todas as edições</a></li>
                </ul>
              </div>
              <div class="busca">
                <form action="<?php echo esc_url(home_url('/')); ?>" class="formulario-busca-topo">
                  <input type="text" name="s" placeholder="BUSQUE ASSUNTOS">
                  <input type="submit" value=" ">
                </form>
              </div>
              <div class="links">
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/sobre-nos">Sobre nós</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/anuncie">Anuncie</a></li>
                  <li><a href="<?php bloginfo('url'); ?>/fale-conosco">Fale conosco</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- # Cabeçalho -->