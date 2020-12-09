<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <form action="action_page.php">
    <div class="container">
      <h1>Registeren voor Klant</h1>
      <p>Flowerpower login</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

          <label for="voornaam"><b>Voornaam</b></label>
      <input type="voornaam" placeholder="voornaam" name="voornaam" id="voornaam" required>


          <label for="Achternaam"><b>Achternaam</b></label>
      <input type="text" placeholder="Achternaam" name="Achternaam" id="Achternaam" required>


          <label for="gebruikersnaam"><b>gebruikersnaam</b></label>
      <input type="gebruikersnaam" placeholder="gebruikersnaam" name="gebruikersnaam" id="gebruikersnaam" required>


      <label for="psw"><b>Wachtwoord</b></label>
      <input type="password" placeholder="Wachtwoord" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Wachtwoord nogmaals</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>
      <button type="submit" class="registerbtn">Register</button>
  </div>
    </div>

    <div class="container signin">
      <p>heeft u al een account?? <a href="login.php">log in</a>.</p>
    </div>
  </form>
</html>
