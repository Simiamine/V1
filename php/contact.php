<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokeshop</title>
    <script src="https://kit.fontawesome.com/d6a49ddf6e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<section id="header">
        <div class="logo">
            <a href="../index.php"><img src="../img/icon.png" alt="pokeball" class = "logo" width="50"></a>
        </div>

            <ul id="navbar">
      <li><a  href="../index.php" id="menu">Menu</a></li>
      <li><a href="catalogue.php" id="type">Catalogue</a></li>
      <li><a  href="avantage.php" id="abonnement">Avantages</a></li>
      <li><a class="active" href="contact.php" id="contact">Contact</a></li>
      <li><a href="login.php" id="connexion">Connexion</a></li>
      <li><a id="panier" href="#"><i class="fa-solid fa-bag-shopping fa-xl"></i></a></li>
        </ul>

