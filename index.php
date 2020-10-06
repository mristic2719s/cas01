<?php
  if (isset($_POST['Submit'])){
      $ime=$_POST['username'];
      $sifra=$_POST['password'];

      if($ime == 'username' && $sifra == 'password'){
          header("location:welcome.html");
          exit();
          
      }
      else
      {
          echo "Pogresan username i pass";
      }
  }
?>