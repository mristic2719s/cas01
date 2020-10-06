<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
</head>
<body>
    <h1> Prijava </h1> <hr>
    <form method="POST">
     <label for="username"> Username </label>
     <input type="text" name="username" placeholder="Unesite vas username" minlength="3" required><br>
     <br>
     <label for="password"> Password </label>
     <input type="password" name="password" placeholder="Unesite vasu sifru" minlength="3" required ><br>
     <br>
     <input type="submit" name="Submit" id="sub"> <br>
    </form>

</body>
</html>

<?php
  if (isset($_POST['Submit'])) {

      $ime=$_POST['username'];
      $sifra=$_POST['password'];

      if($ime=='username' && $sifra=='password'){
          header("location:welcome.html");
          exit();
          
      }
      else
      {
          echo "<br> Pogresan username i pass !";
      }
  }
?>