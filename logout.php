<?php
  require('header.php');
  session_destroy(); // Destroy All Sessions.
//  session_unset();  // Remove All Sessions Variables.
  if(isset($_SESSION)){
    header("Location: index.php");
  }
  else{
    print_r($_SESSION);
}
  require('footer.php');
?>
