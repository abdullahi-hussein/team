<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/signUp.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Sign In</title>
</head>
<body>
<div class="row login">
  <form class="" action="verifySignIn.php" method="post">


  <div class="col s10 m6 l4 offset-s1 offset-m3 offset-l4">
    <div class="card">
      <div class="card-action black white-text lighten-3">
        <h3 class="center">Sign In</h3>
      </div>

        <div class="form-field">
          <label for="email">Email</label>
          <input type="email" id="email" class="validate" name="email">
        </div><br>

        <div class="form-field">
          <label for="password">Password</label>
          <input type="password" id="password" name="pass">
        </div><br>
        <div class="form-field center">
            <button class="btn waves-effect waves-light" type="submit" name="action" method="post">Submit
              <i class="material-icons right">send</i>

              </button>
        </div><br>
      </div>

      </div>
    </div>
  </div>
  </form>
</div>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" charset="utf-8"></script>
    <!-- javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
          $(document).ready(function(){
            $('.sidenav').sidenav();

          })
</script>
</body>
</html>
