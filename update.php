<?php include_once "config.php"; ?>

<?php
//ATUALIZAÇÃO DO CADASTRO
$id = $_POST['id'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$sql = "UPDATE tb_contribuinte SET nome ='$nome',nascimento ='$nascimento',cpf='$cpf',sexo='$sexo',cidade='$cidade',bairro='$bairro',numero='$numero',complemento='$complemento' WHERE id='$id'";    //SET* setar campos*

if (mysqli_query($con, $sql)){
    header("Location: index.php");
}else{
    echo "ERROR" . $sql . mysqli_error($con);
}
mysqli_close($con);

?>


