<form method="post" action="form_peso.php">
<label>digite o 1º peso</label>
<input type="text" id="txt_peso1" name="txt_peso1" value=""/>
<br><br>
<label>digite o 2º peso</label>
<input type="text" id="txt_peso2" name="txt_peso2" value=""/>
<br><br>
<label>digite o 3º peso</label>
<input type="text" id="txt_peso3" name="txt_peso3" value=""/>
<br><br>
<input type="submit" value="Enviar" name="enviar"/>
<br><br>
<?php
$maior_peso;
$peso1 = $_POST['txt_peso1'];
$peso2 = $_POST['txt_peso2'];
$peso3 = $_POST['txt_peso3'];
$maior_peso = $peso1;
if($maior_peso < $peso2){
    $maior_peso = $peso2;
}
if($maior_peso < $peso3){
    $maior_peso = $peso3;
}
?>
<label>maior peso aferido</label>
<!-- no input onde recebera o valor iremos colocar o
codigo PHP o atributo value (value="<?php echo $maior_peso; ?>")--> 
<input type="text" id="resultado_peso" name="resultado_peso"
readonly="true" value="<?php echo $maior_peso?>"/>
</form>