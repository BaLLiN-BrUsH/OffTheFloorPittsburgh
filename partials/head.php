<?php
  if(!isset($_ENV['DATABASE_URL'])) {
    require('env.php');
  }
?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
  if(PAGE_TITLE == 'Home') {
    echo "<title>Off The Floor Pittsburgh</title>";
  } else {
    echo "<title>".PAGE_TITLE." | Off The Floor Pittsburgh</title>";
  }
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/yeti/bootstrap.min.css" integrity="sha256-W2ya1Ygm18l60afsKnKMJEJDN/LjR4hn1kK3ngv/J4o=" crossorigin="anonymous">
<link rel="stylesheet" href="/css/app.css">
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>