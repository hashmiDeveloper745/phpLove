<?php
class functions{
  public function __construct(){
  }
  public function hello(){
    echo "Hello World...";
  }
  public function connectDatabase(){
	  $serverHost = "localhost";
	  $serverUsername = "";
	  $serverPassword = "";
	  $serverDatabase = "phpLove";
	  $connect = new PDO("mysql:host = $serverHost; dbname = $serverDatabase",$serverUsername,$serverPassword);
	  if($connect){
		  echo "Database Connected Successfully.";
	  }
	  else{
		  die("Database Connection Error.");
	  }
  }
}
?>

