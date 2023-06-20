<?php include_once "config2.php"; ?>

<?php 
//RECEBE/INSERE OS DADOS DO PROTOCOLO PARA MYSQLI
echo $descricao = $_POST['descricao'];
echo $data = $_POST['data'];
echo $prazo = $_POST['prazo'];
echo $demandante = $_POST['demandante'];

$query = "INSERT INTO tb_protocolo(descricao,data,prazo,demandante)VALUES('$descricao', '$data','$prazo', '$demandante')";

//Receber os dados do formulário
if (mysqli_query($con, $query)){
    header("Location: index2.php");
}else{
    echo "ERROR" . $query . mysqli_error($con);
}
mysqli_close($con);

?>
