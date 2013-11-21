Revista = Revista or {}

Revista.apps =
  teste: ->
    console.log "scripts rodando"
    return

window.onload = ->
  Revista.apps.teste()
  return