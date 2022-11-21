<!DOCTYPE html>
    <head>
        <title>Logowanie</title>
        <meta charset="utf-8">
        <link href="style4.css" rel="stylesheet" >
        <link rel="icon" href="logo.png" sizes="30x30" type="image/png">
    </head>


 <body>

<header>

    <img src="logo.png" width="150" height="150" style=" margin-top: -9px;" >

    
    <div id="login">
        
        <a href="https://www.szczecin.eu/pl" class="myButton">Zaloguj</a>
    </div>

    <div id="rejestr">
        
        <a href="https://www.szczecin.eu/pl" class="myButton">Zarejestruj</a>
    </div>

</header>

<nav>

  
</nav>

<content>

    
<div id="panel">
    
<form class="second" action="./formularz-projekt.php" method="POST">


<h3> Podaj login: </h3>
<input type="text" name="login"><br>
<h3> Podaj hasło: </h3>
<input type="password" name="haslo"><br><br>
<input type="submit" value="Zaloguj" name="wyslij"><br><br>

</form>

<?php

if(isset($_POST['wyslij'])){
    echo "Jestes zalogowany" . "<br>";

}



$hostname = 'localhost'; // Nazwa hosta
$database = 'logowanie1'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);


?>




<form class="second">
   
    
</div>

</content>

<footer> 

    <div id="all">
    <div id="ikona1">
        
        <a href="https://www.youtube.com/watch?v=qUoUgLvE23w" class="myButton">Oglądaj tutaj</a>

    </div>


    <div id="ikona1">
        
        <a href="https://www.szczecin.eu/pl" class="myButton">Informacje</a>
    </div>

        

    <div id="ikona1">
        <a href="https://pl-pl.facebook.com/PrezydentSzczecina/" class="myButton">Kontakt</a>
    </div>
</div>
</footer>

</body>