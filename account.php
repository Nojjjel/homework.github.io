<?php
  session_start();
  if(!isset($_SESSION['user'])) {
    header("Location: login.php"); exit();
  }

  if(isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header("location: login.php"); exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Felhasználói Főoldal</title>
</head>
<body>
    <div class="content">
      <header>
        <h2>Üdvözöllek <?php echo $_SESSION['user'];?></h2>
        <a href="?logout">Kijelentkezés</a>
    </div>
    </header>
      <main>
        <h3>Itt tudod feltölteni a házi feladatot/tanulni valót!</h3>
        <h1>FEJLESZTÉS ALATT</h1>
      </main>
</body>
</html>