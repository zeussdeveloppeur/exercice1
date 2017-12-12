<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['profil']))
{
    extract($_POST);
    if($login=='admin' && $password=='admin' && $profil=='admin')
    {
        $_SESSION['visiteur']='admin';
        echo"
            <center><fieldset style='margin-top: 3%; background-color:moccasin; width: 350px;'>
            <legend><h2>Bienvenue dans la session Admin</h2></legend>
            <h3>Menu</h3>
                <ol>
                    <li><a href='editeur.php'>Site de l'editeur</a></li>
                    <li><a href='tableau.php'>Site du tableau</a></li>
                </ol>
                <form method='post' action='#'>
                    <input type='submit' name='deconnexion' value='Déconnxion'/>
                </form>
            </fieldset></center>
        ";
        if (isset($_POST['deconnexion']))
        {
            session_destroy();
            header("location: accueil.php");
        }
    }
    elseif($login=='admin' && $password=='admin' && $profil!='admin')
    {
        echo"Vousn n'avez pas choisi la bonne profil. SVP revoyez votre profil.";
    }
    elseif($login=='user' && $password=='user' && $profil=='user')
    {
        extract($_POST);
        $_SESSION['visiteur']='user';
        echo"
            <center><fieldset style='margin-top: 3%; background-color:moccasin; width: 350px;'>
            <legend><h2>Bienvenue dans la session User</h2></legend>
            <h3>Menu</h3>
                <ol>
                    <li><a href='calcul.php'>Site du calculatrice</a></li>
                    <li><a href='heure.php'>Site de l'heure</a></li>
                </ol>
                <form method='post' action='#'>
                    <input type='submit' name='deconnexion' value='Déconnxion'/>
                </form>
            </fieldset></center>
        ";
        if (isset($_POST['deconnexion']))
        {
            session_destroy();
            header("location: accueil.php");
        }
    }
    elseif($login=='user' && $password=='user' && $profil!='user')
    {
        echo"Vousn n'avez pas choisi la bonne profil. SVP revoyez votre profil.";
    }
    else
    {
        echo"LOGIN ou PASSWORD incorrecte, revoyez ce que vous avez tapé.";
    }
}
elseif(isset($_SESSION['visiteur']))
{
    if($_SESSION['visiteur']=='admin')
    {
        echo"
            <center><fieldset style='margin-top: 3%; background-color:moccasin; width: 350px;'>
            <legend><h2>Bienvenue dans la session Admin</h2></legend>
            <h3>Menu</h3>
                <ol>
                    <li><a href='editeur.php'>Site de l'editeur</a></li>
                    <li><a href='tableau.php'>Site du tableau</a></li>
                </ol>
                <form method='post' action='#'>
                    <input type='submit' name='deconnexion' value='Déconnxion'/>
                </form>
            </fieldset></center>
        ";
        if (isset($_POST['deconnexion']))
        {
            session_destroy();
            header("location: accueil.php");
        }
    }
    elseif ($_SESSION['visiteur']=='user')
    {
        echo"
            <center><fieldset style='margin-top: 3%; background-color:moccasin; width: 350px;'>
            <legend><h2>Bienvenue dans la session User</h2></legend>
            <h3>Menu</h3>
                <ol>
                    <li><a href='calcul.php'>Site du calculatrice</a></li>
                    <li><a href='heure.php'>Site de l'heure</a></li>
                </ol>
                <form method='post' action='#'>
                    <input type='submit' name='deconnexion' value='Déconnxion'/>
                </form>
            </fieldset></center>
        ";
        if (isset($_POST['deconnexion']))
        {
            session_destroy();
            header("location: accueil.php");
        }
    }
    else
    {
        header("location: accueil.php");
    }
}
else
{
    header("location: accueil.php");
}
?>