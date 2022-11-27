

    
<div id="panel">
    
<form class="second" action="./formularz-projekt.php" method="POST">

<h1 style="background-color: #a2bd31;
    color: #ffffff;
    text-shadow:   1px 1px #000000; min-width: 100%;"> LOGOWANIE </h1>

<h3> Podaj login: </h3>
<input type="text" name="x"><br>
<h3> Podaj hasło: </h3>
<input type="password" name="haslo"><br><br>
<input type="submit" value="Zaloguj" name="wyslij"><br><br>

</form>

</div>

<?php

$x = $_POST['login'];

if(isset($_POST['wyslij'])){

    echo "Jestes zalogowany jako ". $_POST['login'] . "<br>";

}




?>


