<?php 
session_start();
if($_SESSION["poprawne_haslo"]){
   Tutaj jest chroniona zawartość...
} 
else{
   echo "Brak dostępu";
}

?>