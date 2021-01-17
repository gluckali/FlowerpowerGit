<?php
class database{

  private $servername;
  private $database;
  private $username;
  private $password;
  private $conn;

// geef de waardes aan met de constructer
  function __construct() {
    $this->servername = 'localhost'; // 127.0.0.1
    $this->database = 'flowerpower';
    $this->username = 'root';
    $this->password = '';

    try{
      $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
      // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "Connected successfully";
    }  catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }


      public function login_klant($uname, $psw){

         // id, username en password ophalen uit database voor gegeven username en password

         $sql = "SELECT id, gebruikersnaam, wachtwoord FROM klant WHERE gebruikersnaam = :gebruikersnaam";
         // $sql = "SELECT id, gebruikersnaam, wachtwoord FROM medewerker WHERE gebruikersnaam = $uname";

         // prepare hier!!
         $stmt = $this->conn->prepare($sql);

         // hier je execute
         $stmt->execute([
           'gebruikersnaam' => $uname,

         ]);
         // fetch sql statement
         $result = $stmt->fetch(PDO::FETCH_ASSOC);// fetchdatahere
         print_r($result);
         print_r($result['wachtwoord']);
         // $result['id'];
         // $result['gebruikersnaam'];
         // $result['wachtwoord']; // user for hashed_password validation (password_verify)
         // check of decrypted password (password_verify()) -> vergelijk root met $result['wachtwoord']

         // check of $result daadwerkelijk een array is.
         if(is_array($result)){

           // check of de result array ook daadwerkelijk values bevat en dus niet leeg is
           if(count($result) > 0){
             // check of ingevoerde  username en password overeen komt met de gegevens in de database
             if($uname == $result['gebruikersnaam']  && password_verify($psw, $result['wachtwoord'])){

               session_start();
               $_SESSION['id'] = $result['id'];
               $_SESSION['uname'] = $result['gebruikersnaam'];

               header('location: ../klant/klant.php');

             }
           }else{
             echo 'Failed to login.';
           }


         }else{
                $_SESSION['message']="Incorrect Username or Password.";
                header("location:inloggenklant.php");
                echo '<h3>Invalid username or password</h3>';
            }


       // session_start();
       //
       // $username = $_POST["username"];
       // $error = "username/password incorrect";
       //
       // if($username == "admin"){
       //     $_SESSION["username"] = $username;
       //     header("location: homepage.php"); //send user to homepage, for example.
       // }else{
       //     $_SESSION["error"] = $error;
       //     header("location: inloggenmedewerker.php"); //send user back to the login page.
       // }

    // sql statement, prepare, execute daarna fetch




  }
}





// $voornaam = $_POST['voornaam'];
// $tussenvoegsel = $_POST['tussenvoegsel'];
// $achternaam = $_POST['achternaam'];
// $adres = $_POST['adres'];
// $postcode = $_POST['postcode'];
// $woonplaats = $_POST['woonplaats'];
// $gebruikersnaam = $_POST['gebruikersnaam'];
// $email = $_POST['email'];
// $wachtwoord = $_POST['wachtwoord'];
//
// // Database connection
// $conn = new mysqli('localhost','root','','test');
// if($conn->connect_error){
//   echo "$conn->connect_error";
//   die("Connection Failed : ". $conn->connect_error);
// } else {
//   $stmt = $conn->prepare("insert into registration(voornaam, tussenvoegsel, achternaam, adres, postcode, woonplaats, gebruikersnaam, email, wachtwoord) values(?, ?, ?, ?, ?, ?)");
//   $stmt->bind_param("sssssi", $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $woonplaats, $gebruikersnaam, $email, $wachtwoord);
//   $execval = $stmt->execute();
//   echo $execval;
//   echo "Registration successfully...";
//   $stmt->close();
//   $conn->close();
// }



/*
<?php

$obj = new datbase();
?>




<?php

class auto {

  // properties
  $kleur;
  $merk;
  $banden; // velgen
  $kenteken;

  // method
  function versnellen(){
    // go forward
  }
}

$auto1 = new auto();
$auto->kleur = 'groen';
$auto->merk = 'volkswagen';

$auto2 = new auto();
$auto->kleur = 'zwart';
$auto->merk = 'audi';

 ?> -->*/
 // public function insert_admin(){
 //   // sql statement (insert)
 //   $sql = "INSERT INTO medewerker VALUES (:id, :voorletters, :voorvoegsels, :achternaam, :gebruikersnaam, :wachtwoord);";
 //
 //   // prepare
 //   $stmt = $this->conn->prepare($sql);
 //
 //   // execute
 //   $stmt->execute([
 //     'id'=> NULL,
 //     'voorletters' => 'N',
 //     'voorvoegsels'=> '',
 //     'achternaam' => 'WOLDAI',
 //     'gebruikersnaam' => 'Nashon',
 //     'wachtwoord' => password_hash('root', PASSWORD_DEFAULT)
 //   ]);
 // }
 //
 // public function loginMedewerker($uname, $psw){
 //
 //   // id, username en password ophalen uit database voor gegeven username en password
 //
 //   $sql = "SELECT id, gebruikersnaam, wachtwoord FROM medewerker WHERE gebruikersnaam = :gebruikersnaam";
 //   // $sql = "SELECT id, gebruikersnaam, wachtwoord FROM medewerker WHERE gebruikersnaam = $uname";
 //
 //   // prepare hier!!
 //   $stmt = $this->conn->prepare($sql);
 //
 //   // hier je execute
 //   $stmt->execute([
 //     'gebruikersnaam' => $uname,
 //
 //   ]);
 //   // fetch sql statement
 //   $result = $stmt->fetch(PDO::FETCH_ASSOC);// fetchdatahere
 //   print_r($result);
 //   print_r($result['wachtwoord']);
 //   // $result['id'];
 //   // $result['gebruikersnaam'];
 //   // $result['wachtwoord']; // user for hashed_password validation (password_verify)
 //   // check of decrypted password (password_verify()) -> vergelijk root met $result['wachtwoord']
 //
 //   // check of $result daadwerkelijk een array is.
 //   if(is_array($result)){
 //
 //     // check of de result array ook daadwerkelijk values bevat en dus niet leeg is
 //     if(count($result) > 0){
 //       // check of ingevoerde  username en password overeen komt met de gegevens in de database
 //       if($uname == $result['gebruikersnaam']  && password_verify($psw, $result['wachtwoord'])){
 //
 //         session_start();
 //         $_SESSION['id'] = $result['id'];
 //         $_SESSION['uname'] = $result['gebruikersnaam'];
 //
 //         header('location: ../medewerker/homepage.php');
 //
 //       }
 //     }else{
 //       echo 'Failed to login.';
 //     }
 //
 //
 //   }else{
 //          $_SESSION['message']="Incorrect Username or Password.";
 //          header("location:inloggenmedewerker.php");
 //          echo '<h3>Invalid username or password</h3>';
 //      }
 //
 //
 //      public function insert_admin(){
 //        // sql statement (insert)
 //        $sql = "INSERT INTO klant VALUES (:id, :voorletters, :voorvoegsels, :achternaam, :gebruikersnaam, :wachtwoord);";
 //
 //        // prepare
 //        $stmt = $this->conn->prepare($sql);
 //
 //        // execute
 //        $stmt->execute([
 //          'id'=> NULL,
 //          'voorletters' => 'J',
 //          'voorvoegsels'=> '',
 //          'achternaam' => 'castro',
 //          'gebruikersnaam' => 'jonna',
 //          'wachtwoord' => password_hash('root', PASSWORD_DEFAULT)
 //        ]);
 //      }

?>
