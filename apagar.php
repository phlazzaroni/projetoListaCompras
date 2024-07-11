<link rel="stylesheet" href="style.css">
<?php 
$apagar = filter_input(INPUT_GET,"apagar");
$itens = file_get_contents("itens.txt");
$itens = explode("\n", $itens);
for($i=0;$i<count($itens); $i++){

    if($itens[$i]=="$apagar<br>"){

        unset($itens[$i]);
        
    }
}
$itens = array_values($itens);
file_put_contents("itens.txt", implode("\n", $itens) . "\n");
header("location:index.php");
exit;
