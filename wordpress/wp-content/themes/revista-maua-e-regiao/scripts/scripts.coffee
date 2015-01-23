Revista = Revista or {}

Revista.apps =
  filtrarListaEdicoes: ->
    lista = document.querySelector '.list'
    if lista
      options =
        valueNames: ['numero']
        page: 10
        plugins: [ ListPagination {} ]
      listaRevistas = new List 'revistas', options
    return

  enviarEmail: ->
    formulario = document.querySelector '.formulario form'
    if formulario
      cNome = document.querySelector '#nome'
      cEmail = document.querySelector '#e-mail'
      cMsg = document.querySelector '#mensagem'
      msgSucesso = document.querySelector '.mensagem-sucesso'
      botao = document.querySelector '#enviar'

      if cNome is null
        cNome =
          value: 'Amigo'
        flag = true

      if cMsg is null
        cMsg =
          value: 'Dados enviados por meio da página ANUNCIE.'

      botao.addEventListener 'click', (evt) ->
        xhr = new XMLHttpRequest()
        regexEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        msg = ''

        if cNome.value isnt ''
          if cEmail.value isnt '' and cEmail.value.match(regexEmail) isnt null
            if cMsg.value isnt ''
              msg += 'nome=' + encodeURI(cNome.value)
              msg += '&e-mail=' + encodeURI(cEmail.value)
              msg += '&mensagem=' + encodeURI(cMsg.value)
              if flag
                msg += '&flag=' + flag

              xhr.open formulario.method, formulario.action + '?' + msg, true
              xhr.send msg
              xhr.onreadystatechange = ->
                if xhr.readyState is 4 and xhr.status is 200
                  formulario.style.display = 'none'
                  msgSucesso.setAttribute 'class', 'mensagem-sucesso exibir'
                return
            else
              cMsg.focus()
              cMsg.setAttribute 'class', 'erro'
          else
            cEmail.focus()
            cEmail.setAttribute 'class', 'erro'
        else
          cNome.focus()
          cNome.setAttribute 'class', 'erro'

        evt.preventDefault()
        evt.stopPropagation()
        return
    return

  controlarBoxEnviarParaAmigo: ->
    iconeEnviarParaAmigo = document.querySelector '.enviar-para-um-amigo'
    if iconeEnviarParaAmigo
      _exibirOcultarBox = ->
        boxEnviarParaAmigo = document.querySelector '.enviar-para-amigo'
        style = boxEnviarParaAmigo.style.display
        if style isnt 'block'
          boxEnviarParaAmigo.style.display = 'block'
        else
          boxEnviarParaAmigo.style.display = 'none'
        return

      iconeEnviarParaAmigo.addEventListener 'click', _exibirOcultarBox
    return

  efeitoScrollCabecalho: ->
    cabecalho = document.querySelector '.cabecalho'
    banner = document.querySelector '.banner'
    esconder = document.querySelector '.esconder'
    conteudo = document.querySelector '.conteudo'
    resultadoBusca = document.querySelector '.resultado-busca'
    faleConosco = document.querySelector '.cabecalho-fale-conosco h1'
    edicao = document.querySelector '.cabecalho-edicao h1'

    _scroll = ->
      if this.pageYOffset > 0
        if faleConosco
          faleConosco.style.marginTop = '206px'
        else if edicao
          edicao.style.marginTop = '210px'
        else if resultadoBusca
          resultadoBusca.style.marginTop = '200px'
        else if banner
          banner.style.marginTop = '206px'
        if esconder
          conteudo.style.marginTop = '206px'
        cabecalho.setAttribute 'class', 'fase2'
      else
        if faleConosco
          faleConosco.style.marginTop = '0'
        else if edicao
          edicao.style.marginTop = '0'
        else if resultadoBusca
          resultadoBusca.style.marginTop = '0'
        else if banner
          banner.style.marginTop = '0'
        if esconder
          conteudo.style.marginTop = '0'
        cabecalho.setAttribute 'class', 'cabecalho'
      return

    window.addEventListener 'scroll', _scroll
    return

  controlarExibicaoLocalidade: ->
    cidades = $ '.local .cidade'

    if cidades[0]
      locais = $ '.local .locais'

      cidades.on 'click', (evt) ->
        cidades =  $ '.local .cidade'
        index = cidades.index this
        $this = $ this

        locais
          .stop()
          .eq(index)
          .slideToggle()

        $this
          .toggleClass 'elemento-aberto'

        locais
          .not(locais.eq(index))
          .slideUp()

        cidades
          .not(cidades.eq(index))
          .removeClass 'elemento-aberto'

do ->
  Revista.apps.efeitoScrollCabecalho()
  Revista.apps.filtrarListaEdicoes()
  Revista.apps.controlarBoxEnviarParaAmigo()
  Revista.apps.enviarEmail()
  Revista.apps.controlarExibicaoLocalidade()
  return
