Revista = Revista or {}

Revista.apps =
  filtrarListaEdicoes: ->
    options =
      valueNames: ['numero']
    userList = new List 'revistas', options
    return

window.onload = ->
  Revista.apps.filtrarListaEdicoes()
  return