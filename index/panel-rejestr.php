<?php

session_start();

$hostname = 'localhost'; // Nazwa hosta
$database = 'logowanie1'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);

if(isset($_POST['rejestr'])){

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$login = $_POST['login-re'];
$haslo = sha1($_POST['haslo-re']);
$email = $_POST['email'];

$sql = "INSERT INTO `użytkownicy`(`id`, `imie`, `nazwisko`, `login`, `haslo`, `email`) 
        VALUES (NULL, '$imie', '$nazwisko', '$login', '$haslo', '$email')";

if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";
}

?>
    
<div id="panel">
    
<form method="POST">


<h1 style="background-color: #a2bd31;
    color: #ffffff;
    text-shadow:   1px 1px #000000; width: 100%;"> REJESTRACJA </h1><br>
Imię:   <br>  <input type="text" name="imie" required><br><br>
Nazwisko: <br> <input type="text" name="nazwisko" required><br><br>
Login:   <br> <input type="text" name="login-re" required><br><br>
Hasło:   <br> <input type="password" name="haslo-re" required><br><br>
Powtórz hasło: <br> <input type="password" name="haslo-re2" required><br><br>
Email: <br> <input type="email" name="email" required><br><br>
<input type="submit" name="rejestr" value="Zarejestruj">

</form>
    
   
    
</div>

<?php



?>