(function() {
  var App;
  var __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  App = (function() {

    function App() {
      this.navClick = __bind(this.navClick, this);      this.pageDisplay = $('.content');
      this.checkHashForPage();
      $('.navigation li a').click(this.navClick);
    }

    App.prototype.navClick = function(event) {
      var name;
      name = $(event.currentTarget).attr('href');
      this.renderPage(name.substring(1));
      return false;
    };

    App.prototype.renderPage = function(name) {
      var pageObj, pageTemplate, render;
      if (pages[name] === null || pages[name] === void 0) name = 'home';
      pageObj = pages[name];
      pageTemplate = $("#" + name + "Template").html();
      location.hash = name;
      render = Mustache.render(pageTemplate, pageObj);
      return this.pageDisplay.html(render);
    };

    App.prototype.checkHashForPage = function() {
      var hash;
      hash = location.hash.substring(1);
      return this.renderPage(hash);
    };

    return App;

  })();

  $(function() {
    return window.app = new App;
  });

}).call(this);
