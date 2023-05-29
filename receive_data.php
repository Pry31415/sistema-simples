<?php include_once "config.php"; ?>

<?php 
//RECEBE O DADOS DO CADASTRO E TRANSFERE PARA O MYSQLI

echo $nome = $_POST['nome'];
echo $nascimento = $_POST['nascimento'];
echo $cpf = $_POST['cpf'];
echo $sexo = $_POST['sexo'];
echo $cidade = $_POST['cidade'];
echo $bairro = $_POST['bairro'];
echo $numero = $_POST['numero'];
echo $complemento = $_POST['complemento'];

$sql = "INSERT INTO tb_contribuinte(nome,nascimento,cpf,sexo,cidade,bairro,numero,complemento)VALUES('$nome','$nascimento','$cpf','$sexo', '$cidade','$bairro','$numero', '$complemento')";

if (mysqli_query($con, $sql)){
    header("Location: index.php");
}else{
    echo "ERROR" . $sql . mysqli_error($con);
}
mysqli_close($con);

?>

