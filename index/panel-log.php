<?php
session_start();

$hostname = 'localhost'; // Nazwa hosta
$database = 'logowanie1'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);


$query = "SELECT * FROM użytkownicy";
$result = $conn->query($query);

if(isset($_POST['submit'])) {

while($row = $result->fetch_assoc()){
   if($_POST['login']==$row['login'] && $_POST['haslo']==$row['haslo']) {
    echo "Jesteś zalogowany";
   }
}

$result -> close();
$conn -> close();
}


?>

    
<div id="panel">
    
<form class="second" method="POST">

<h1 style="background-color: #a2bd31;
    color: #ffffff;
    text-shadow:   1px 1px #000000; min-width: 100%;"> LOGOWANIE </h1>

<h3> Podaj login: </h3>
<input type="text" name="login" required><br>
<h3> Podaj hasło: </h3>
<input type="password" name="haslo" required><br><br>
<input type="submit" value="Zaloguj" name="submit"><br><br>

</form>

</div>

<?php



    if(isset($_POST['login'])){

      $_SESSION["login"] = $_POST['login'];
      echo "LOGIN :".$_SESSION["login"]. " ".$_POST["login"];

    }



    echo("<br>");

               

    if(isset($_POST['haslo'])){

        $_SESSION["haslo"] = ($_POST['haslo']);

    }




    ?>


 







