Revista = Revista or {}

Revista.apps =
  filtrarListaEdicoes: ->
    revistas = document.querySelector '.revistas'
    if revistas
      options =
        valueNames: ['numero']
      userList = new List 'revistas', options
    return

  enviarEmail: ->
    formulario = document.querySelector '.formulario form'
    if formulario
      cNome = document.querySelector '#nome'
      cEmail = document.querySelector '#e-mail'
      cMsg = document.querySelector '#mensagem'
      msgSucesso = document.querySelector '.mensagem-sucesso'
      botao = document.querySelector '#enviar'

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
        return
    return

window.onload = ->
  Revista.apps.filtrarListaEdicoes()
  Revista.apps.enviarEmail()
  return