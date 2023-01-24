<?php require("register.class.php") ?>

<?php
if(isset($_POST['submit'])){
  $user = new RegisterUser($_POST['username'], $_POST['password']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Főoldal</title>
</head>
<body>
<h3><a href="login.php">Bejelentkezés</a></h3>
<form action="" method="post" enctype="multipart/from-data" autocomplete="off">
  <h2>Regisztrációs felület</h2>
  <h4>A regsiztrációhoz szükséges <br> -egy tetszőleges név(ami nem tartalmaz ékezeteket), <br> -illetve egy szabadon választott jelszó</h4>

<label >Felhasználónév</label>
<input type="text" name="username" id="">


<label for="">Jelszó</label>
<input type="text" name="password" id="">

<button type="submit" name="submit">Regisztráció megerősítése</button>

<p class="error"><?php echo @$user->error ?></p>
<p class="succes"><?php echo @$user->succes ?></p>

</form>

</body>
</html>