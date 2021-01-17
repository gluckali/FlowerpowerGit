<!-- Omar Elmedny OITAOO8B -->
<?php

include '../database/database.php';
// run once when application starts to populate database with admin user
// $db = new database();
// $db->insert_admin();

if(isset($_POST['submit'])){

	// array with values of the name attribute of the input field
	$fields = ['uname', 'pword'];

	// zolang deze dus false is, is het goed!
	$error = false;

	// field validation -> validate mandatory fields.
	foreach($fields as $field){
		if(!isset($_POST[$field]) || empty($_POST[$field])){
			$error = true; // wij willen niet dat dit gebeurd!
		}
	}

	if(!$error){
		// store posted form values in variables
		$username= $_POST['uname'];
		$password= $_POST['pword'];

		$db = new database();

		// login function
		$db->loginklant($username, $password);
	}
}

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
