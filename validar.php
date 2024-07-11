<?php 

$item = filter_input(INPUT_GET,"item");

if(isset($item)) {
    $arquivo = file_get_contents("itens.txt");
    $arquivo .= "$item<br>\n";
    $arquivo .= file_put_contents("itens.txt", $arquivo);
    header("location:index.php");
    exit;
}else{
    header("location:header.php");
}
