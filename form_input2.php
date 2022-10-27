<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<!-- Em situações q se estiver postando dados de volta ao
msm script ou formulario q ele se originou, podemos utilizar
variavel superglobal $_SERVER['PH_SELF'] o script php será
automaticamente designado a esta variavel.-->
<label>digite seu nome</label>
<input type="text" id="txt_nome" name="txt_nome" value=""/>
<input type="submit" value="enviar" name="enviar"/>
<?php
$qt_lista = $_POST['txt_nome'];
echo '<br>Seu nome: ', $qt_lista, '<br>';
?>
</form>