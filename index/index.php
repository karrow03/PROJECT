<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = "glowna";

echo "strona: ".$strona."<br>";


?>


<!DOCTYPE html>
    <head>
        <title>Gadżety Szczecina</title>
        <meta charset="utf-8">
        <link href="style3.css" rel="stylesheet" >
        <link rel="icon" href="logo.png" sizes="30x30" type="image/png">
            
            
    </head>


 <body>

<header>

            <div id="ikonag">
            <a href="./index.php?page=glowna">
    <img src="logo.png" width="150" height="150" style=" margin-top: -9px;" >
    </a>
            </div>
    
    <div id="login">
        
        <a href="./index.php?page=panel-log" class="myButton">Zaloguj</a>
    </div>

    <div id="rejestr">
        
        <a href="./index.php?page=panel-rejestr" class="myButton">Zarejestruj</a>
    </div>

</header>

<nav>

  
</nav>

<content>

<?php if(($strona)!=null) include($strona.".php"); ?>

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