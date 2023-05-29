<?php include_once "config.php"; ?>
<?php 

//PESQUISA DO NOME DO CONTRIBUINTE

$busca = $_GET['busca'];

$resultado_nome = "SELECT * FROM tb_contribuinte WHERE nome like '%$busca%'";
$resultado = mysqli_query($con, $resultado_nome);

    while($linha = mysqli_fetch_array($resultado)){
        echo $nome = $linha['nome'];
        echo '<a href=delete.php?id=' .$linha['id']. '> Deletar | </a>'; 
        echo '<a href=edit.php?id=' .$linha['id']. '> Editar </a>';
        echo '<br>';
    }
?>



