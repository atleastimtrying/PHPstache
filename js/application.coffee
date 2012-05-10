class App
  constructor: ->
    @pageDisplay = $ '.content'
    @checkHashForPage()
    $('.navigation li a').click @navClick

  navClick: (event)=>
    name = $(event.currentTarget).attr 'href'
    @renderPage name.substring(1)
    false

  renderPage: (name)->
    name = 'home' if pages[name] is null or pages[name] is undefined
    pageObj = pages[name]
    pageTemplate = $("##{name}Template").html()
    location.hash = name
    
    render = Mustache.render pageTemplate, pageObj
    @pageDisplay.html render

  checkHashForPage: ->
    hash = location.hash.substring(1)
    @renderPage hash

$ -> window.app = new App