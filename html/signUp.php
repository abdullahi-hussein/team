<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- add header file -->
<?php include 'header.php';?>
<main class="center">
  <div class="row login">
    <form class="" action="verifySignUp.php" method="post">


    <div class="col s10 m6 l4 offset-s1 offset-m3 offset-l4">
      <div class="card">
        <div class="card-action black white-text lighten-3">
          <h3 class="center">Sign Up</h3>
        </div>
        <div class="form-field">
          <label for="fname">First Name</label>
          <input type="text" id="name" name="name">
        </div>
          <div class="form-field">
            <label for="email">Email</label>
            <input type="email" id="email" class="validate" name="email">
          </div><br>

          <div class="form-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div><br>

          <div class="form-field">
            <label>
              <input type="checkbox" name="checkbox"/><span>Accept Terms and Conditions</span>
            </label>
          </div>

          <div class="form-field center">
              <button class="btn waves-effect waves-light green" type="submit" name="action" method="post">Sign Up
                <i class="material-icons right">send</i>
                </button>
          </div><br>
        </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</main>
<?php include 'footer.php';?>
  </body>
</html>
