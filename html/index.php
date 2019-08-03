<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link rel="stylesheet" href="../css/main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
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
        <li><a href="signIn.php">Sign In</a></li>
        <li><a href="signUp.php">Sign Up</a></li>
      </ul>
      <ul class="sidenav grey lighten-2" id="mobile-menu">
        <li><a href="signIn.php">Sign In</a></li>
        <li><a href="signUp.php">Sign Up</a></li>

      </ul>
    </div>

  </nav>
</header>
<main>
  <section class="section container" id="contact">
    <div class="row">
      <div class="col s12 ">
        <h2 class="indigo-text text-darken-4 center underline">Show off..</h2>
        <p class="center">Hello everyone..this is just a simple crud application..to show case my basic knowledge of web development..</p>
        </div>

    </div>
  </section>

</main>

<!-- include footer -->
<?php include 'footer.php';?>
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
