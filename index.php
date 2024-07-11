<link rel="stylesheet" href="style.css">
<h2>Lista de Compras</h2>
<form action="validar.php">
    <label for="item">Adicionar Item</label><br>
    <input type="text" name="item">
    <input type="submit" value="Adicionar"><br><br>

    <?php 
    $itens = file_get_contents("itens.txt");
    echo $itens."<br>";
    
?>


</form>

<form action="apagar.php">
    <label for="apagar">Remover Item</label>
    <input type="text" name="apagar">
    
    <input type="submit" value="Apagar">
    
</form>




