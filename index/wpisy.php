<?php





?>


<div id="panel">
<form method="POST">
<h2> Co chcesz ocenić? </h2>
<select name="opcje" required id="op">
    <option value="czerwony">Opinia o stronie</option>
    <option value="zielony">Opinia o gadżecie</option>
</select>
<br>
<br>

<h2> Na ile gwiazdek oceniasz? </h2>


<select name="rate" reqired id="rate">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>


<h2> Napisz swoją opinię poniżej! </h2>

<textarea required id="opinia" rows="4" cols="50" required>Daj znać co sądzisz! </textarea> <br><br>

<input type="submit" value="Dodaj opinię" name="send">

</form>
</div>


<?php


        if(isset($_POST['send'])) {
            header('Location: index.php?page=glowna');
}



?>