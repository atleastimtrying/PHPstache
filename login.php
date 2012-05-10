<!doctype html>  

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Mustache demo</title>
  <meta name="author" content="Anders Fisher">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <script type='text/html' id='pageTemplate'>
    <header>
      <h1>{{title}}</h1>
    </header>
    <article>
      <p class='summary'>{{summary}}</p>
      <section>{{copy}}</section>
    </article>
  </script>
  <a href='index.php#home' id='access'>Home</a>
  <nav>
    <ol>
      <li><a href='home'>home</a></li>
      <li><a href='about'>about</a></li>
      <li><a href='help'>help</a></li>
      <li><a href='snow'>snow</a></li>
    </ol>
  </nav>
  <div id='pageDisplay'></div>
  <script src="json/pages.js"></script>
  <script src="js/libs/jquery-1.5.min.js"></script>
  <script src="js/libs/mustache.js"></script>
  <script src="js/edit.js"></script>
	
</body>
</html>