<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <center> <h1> Student Login Form </h1> </center>
      <form action="action_page.php" method="post">
        </div>

        <div class="container">
          <label for="uname"><b>gebruikersnaam</b></label>
          <input type="text" placeholder="gebruikersnaam" name="uname" required>

          <label for="psw"><b>wachtwoord</b></label>
          <input type="password" placeholder="wachtwoord invoeren" name="psw" required>

          <button type="submit">inloggen</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> herinner mijn account
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <span class="psw"> <a href="register.php">geen account?</a></span>
        </div>
      </form>

  </body>
</html>
