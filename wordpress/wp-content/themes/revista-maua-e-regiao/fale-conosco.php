<div class="conteudo">
  <div class="fale-conosco">
    <div class="conteudo-topo">
      <div class="area-endereco">
        <div class="borda-topo"></div>
        <div class="mensagem">
          <p>
            Rua Clodoaldo<br>
            Portugal Caribé, 276<br>
            Vila Assis Brasil<br>
            Mauá - São Paulo
          </p>

          <p><span>+55 11</span>4513-1591</p>

          <p>
            ou entre em contato pelo<br>
            <a href="mailto:atendimento@revistamaua.com.br">atendimento@revistamaua.com.br</a>
          </p>
        </div>
      </div>

      <div class="area-mapa">
        <div class="icone-mapa"></div>
        <div id="mapa" class="mapa"></div>
      </div>
    </div>

    <div class="formulario">
      <form action="<?php bloginfo('template_url'); ?>/enviar-mensagem.php" method="get">
        <div class="nome">
          <label for="nome">Nome</label><br>
          <input type="text" id="nome" name="nome">
        </div>

        <div class="e-mail">
          <label for="e-mail">E-mail</label><br>
          <input type="text" id="e-mail" name="e-mail">
        </div>

        <br>

        <div class="mensagem">
          <label for="mensagem">Mensagem</label><br>
          <textarea name="mensagem" id="mensagem"></textarea><br>
        </div>

        <div class="enviar">
          <input type="button" id="enviar" value=" " name="enviar">
        </div>
      </form>

      <div class="mensagem-sucesso">
        <p>Mensagem enviada com sucesso. Obrigado!</p>
      </div>
    </div>
  </div>
</div>