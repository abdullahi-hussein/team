<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome</title>
    </head>
  <body>
<header>
  <nav class="nav-wrapper indigo lighten-3">
    <div class="container">
      <a href="index.php" class="brand-logo">Home</a>
      <a href="" class="sidenav-trigger" data-target="mobile-menu">
        <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="web.html">Web development</a></li>
        <li><a href="index.php">Database management </a></li>
        <li><a href="index.php">Networking</a></li>
        <li><a href="index.php">Much more..</a></li>
        </ul>
      <ul class="sidenav grey lighten-2" id="mobile-menu">
        <li><a href="web.html">Web development</a></li>
        <li><a href="index.php">Database management </a></li>
        <li><a href="index.php">Networking</a></li>
        <li><a href="index.php">Much more..</a></li>
        
      </ul>
    </div>

  </nav>
</header>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
    <!-- javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
          $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal()
          })
          </script>
  </body>
</html>
