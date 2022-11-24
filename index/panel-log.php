

    
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



