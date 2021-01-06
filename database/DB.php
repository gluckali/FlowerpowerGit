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
}

$obj = new database();
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
?>
