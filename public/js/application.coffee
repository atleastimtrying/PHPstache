class App
  constructor: ->
    @pageDisplay = $ '#pageDisplay'
    @pageTemplate = $('#pageTemplate').html()
    @checkHashForPage()
    $('nav ol li a').click @navClick

  navClick: (event)=>
    name = $(event.currentTarget).attr 'href'
    @renderPage name
    false

  renderPage: (name)->
    if pages[name] isnt null
      pageObj = pages[name]
      location.hash = name
    else
      pageObj = pages['home']
      location.hash = home
    render = Mustache.render @pageTemplate, pageObj
    $('html').css backgroundImage: "url(#{pageObj.image})"
    @pageDisplay.html render

  checkHashForPage: ->
    hash = location.hash.substring(1)
    @renderPage hash

$ -> window.app = new App