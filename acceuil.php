<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hello class</title>
</head>
<body>
<h1>ACCEUIL</h1>
<form method="POST"action="editeur.php">
Veuillez entrez votre login et votre mot de passe</br>
login:<input type="text" name="login"></br>
mot de passe:<input type="password_check" name"password_check">
<input type="submit" value="connexion">  
</form>   
</body>
</html>
<?php
$login="admin";
$password="admin";
$login1="user";
$password1="user";
if(isset ($_POST['login']) && isset ($_POST['password'])){
    if ($_POST['login']==$login && $_POST['password']==$password){
        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        header('location: acceuil.php');  
    }
    if($_POST['login']==$login1 && $_POST['password']==$password1){
        session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['password']=$_POST['password'];
        header('location: calculatrice1.php');
    }
    else{
        echo "donnees invalides";
    }
}