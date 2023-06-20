<?php include_once "config.php"; ?>
 
<?php
//PESQUISA DO NOME DO CONTRIBUINTE
$busca = $_GET['busca'];

$resultado_nome = "SELECT * FROM tb_contribuinte WHERE nome like '%$busca%' or cpf like '%$busca%'";
$resultado = mysqli_query($con, $resultado_nome);

    while($linha = mysqli_fetch_array($resultado)){
        echo $nome = $linha['nome'];
        echo '<a href=edit.php?id=' .$linha['id']. '> Editar | </a>';
        echo '<a href=delete.php?id=' .$linha['id']. '> Deletar | </a>'; 
        echo '<a href=view.php?id=' .$linha['id']. '> Visualizar </a>';
        echo '<br>';
    }
?>








<?php
/* 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--Link CSS Style-->
    <link rel="stylesheet" href="" type="text/css">
</head>

<body>
    
<?php
    $data = "SELECT * FROM tb_contribuinte ORDER BY id DESC";
    $data_result = mysqli_query($con, $data);

?>
<div class=table1>
    <table class="table1-1">
            <thead>
                <tr> 
                <th scope="col">NOME</th>
                <th scope="col">DATA DE NASCIMENTO</th>
                <th scope="col">SEXO</th>
                <th scope="col">CIDADE</th>
                <th scope="col">BAIRRO</th>
                <th scope="col">NÚMERO</th>
                <th scope="col">COMPLEMENTO</th>
                </tr>
            </thead>
            <tbody> 
            <?php
                while($user_data = mysqli_fetch_assoc($data_result))
                {
                    echo "<tr>";
                    echo "<td>" .$user_data['nome']."</td>"; 
                    echo "<td>" .$user_data['nascimento']."</td>";
                    echo "<td>" .$user_data['sexo']."</td>";
                    echo "<td>" .$user_data['cidade']."</td>";
                    echo "<td>" .$user_data['bairro']."</td>";
                    echo "<td>" .$user_data['numero']."</td>";
                    echo "<td>" .$user_data['complemento']."</td>";
                    echo "<td>
                       <a href=edit.php?id=$user_data[id]. '> Editar | </a>
                       <a href=delete.php?id=$user_data[id]. '> Deletar </a>
                        
                    </td>";
                    echo "</tr>";
                } 
            ?>
            </tbody>
        </table>

    </div>
</body>

</html>
*/



