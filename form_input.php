<form method="post" action="form_input.php"> 
    <label >nome</label>
    <input type="text" id="txt_nome"name="txt_nome"value=""/>
    <!-- type text parar campo de texto e 
    o type submit para o botão-->
    <input type="submit" value="enviar" name="enviar"/>
    <?php /*variavel aqui oh 👇 $qt*/
    $qt_lista = $_POST["txt_nome"];
    /*a variavel $qt_lista vai receber uma variavel do metodo
    post ['txt_nome'], este valor é recebido pelo input com o
    id txt_nome, depois exibido na tela pelo echo. o action
    do formulario vai chamar ele msm o forms_inputs.php e tudo
    que esta dentro do bloco php sera executado */
    echo  '<br> seu nome:',$qt_lista,'</br>';
    ?>
</form>