<!-- Omar Elmedny OITAOO8B -->

<?php


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>inlog pagina klant</title>
</head>
<body>
	<form id='login' action='inloggenklant.php' method='post' accept-charset='UTF-8'>
		<fieldset>
			<p> Login Klant / medewerker terminal </p>
			<legend>inloggen</legend>
			<input type="text" name="uname" placeholder="Username" required/>
			<input type="password" name="pword" placeholder="Password" required/>
			<input type='submit' name='Submit' value='Submit' />
			<p>
				geen account? <a href="../Register.php">registeren</a>
			</p>
			<!-- <p> geen account medewerker? <a href="medewerkerreg.php"> Medewerker registeren! </a>
			</p> -->
			<p>
				wachtwoord resetten? <a href="../reset.php">Resetten</a>
			</p>
		</fieldset>
	</form>
</body>
</html>
