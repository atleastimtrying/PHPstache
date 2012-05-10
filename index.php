<doctype !html>
<html>
  <head>
    <title>Handmade Suffolk | Home</title>
    <link rel='stylesheet' href='css/style.css'>
  </head>
  <body>
    <div class="header">
      <img src="img/logo.png" alt="Handmade Suffolk">
      <ul class="navigation">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>
    </div>
    <div class="content"></div>
  
  <script src="json/pages.js"></script>
  <script src="js/libs/jquery-1.5.min.js"></script>
  <script src="js/libs/mustache.js"></script>
  <script src="js/application.js"></script>
	<?php 
  include 'templates/homeTemplate.php'; 
  include 'templates/aboutTemplate.php';
  include 'templates/contactTemplate.php'; 
  include 'templates/faqTemplate.php';
  ?>
</body>
</html>