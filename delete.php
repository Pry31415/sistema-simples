<?php include_once "config.php"; ?>

<?php
//DELETA O CADASTRO

$id = $_GET['id'];
$sql = "DELETE FROM tb_contribuinte WHERE id='$id'";

if (mysqli_query($con, $sql)) {            //executa a linha de comando sql
    header("Location: index.php");
}else{
    echo 'Não foi possível deletar o id '; echo $id,'.';
}
?>