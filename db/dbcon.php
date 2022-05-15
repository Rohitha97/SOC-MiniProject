<?php
class DbConnection extends PDO {
  public function __construct(){
    $servername = "localhost";
    $username = "root";
    $password = "";

      parent::__construct("mysql:host=$servername;dbname= ukrainerussianwar", $username, $password,
      array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


}
}

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname= ukrainerussianwar", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>