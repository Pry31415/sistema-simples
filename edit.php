<?php include_once "config.php"; ?>

<?php
//EDIÇÃO DE CADASTRO

$id = $_GET['id'];
$con = mysqli_connect($server, $db_user, $passord, $name);
mysqli_set_charset($con, "utf8");
$resultado_id = "SELECT * FROM tb_contribuinte WHERE id='$id'";        //seleciona o id ta tabela tb_contribuinte
$sql = mysqli_query($con, $resultado_id);                    //Executa a tabela tb_contribuinte


while($linha = mysqli_fetch_array($sql)){              //Enquanto "fatiar a linha faça 
    $id = $linha['id'];
    echo $nome = $linha['nome'];
    $nascimento = $linha['nascimento'];
    $cpf = $linha['cpf'];
    $sexo = $linha['sexo'];
    $cidade = $linha['cidade'];
    $bairro = $linha['bairro'];
    $numero = $linha['numero'];
    $complemento = $linha['complemento'];

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casdatro do Contribuinte</title>
    <!--Link CSS Style-->
    <link rel="stylesheet" href="  " type="text/css">
</head>

<body>
<div class="register">
        <form method="post" name="form_contribuinte" action="update.php">
            <legend>Cadastrar Contribuinte</legend>
                <div>
                    <label>Nome Completo</label>
                    <input type="text" name="nome" maxlength="100" value="<?php echo $nome; ?>" required > 
                    <input type="hiden" name="id" maxlength="100" value="<?php echo $id; ?>" required >     
                </div>
                <div>
                    <label>Data de nascimento</label>
                    <input type="date" name="nascimento" maxlength="20" value="<?php echo $nascimento; ?>" required > 
                </div>
                <div>
                    <label>CPF</label>
                    <input type="text" name="cpf" maxlength="14" value="<?php echo $cpf; ?>" required >
                </div>
                <div>
                    <label>Sexo</label>
                    <!--<input type="text" name="sexo" maxlength="150" placeholder="F/M" class="required ">
                    <div class="input">-->
			            <div>
				            <input type="radio" name="sexo" value="Feminino" <?php echo ($sexo == 'Feminino') ? 'checked' : '' ?> required/><span> Feminino</span>
			            </div>
			        <div>
				        <input type="radio" name="sexo" value="Masculino" <?php echo ($sexo == 'Masculino') ? 'checked' : '' ?> required/><span> Masculino</span>	
			        </div>
                </div>
                <div>
                    <p>Endereço</p>
                    <label>Cidade</label>
                        <input type="text" name="cidade" maxlength="100" value="<?php echo $cidade; ?>" >
                    <label>Bairro</label>
                        <input type="text" name="bairro" maxlength="100" value="<?php echo $bairro; ?>" >
                    <label>Número</label>
                        <input type="text" name="numero" maxlength="5" value="<?php echo $numero; ?>" >
                    <label>Complemento</label>
                        <input type="text" name="complemento" maxlength="20" value="<?php echo $complemento; ?>">
                </div>
                <input type="submit" name="acao" value="Salvar">
        </form>


</body>

</html>