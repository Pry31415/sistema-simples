<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cia do Gloss, veja nossos produtos">
    <title>Casdatro do Contribuinte</title>
    <!--Link CSS Style-->
    <link rel="stylesheet" href="" type="text/css">
</head>

<body>
<header>
    <h1>Gestão Sys<h1>
</header>

    <form method="post" name="form_protocolo" action="receive_data_protocol.php">
            <legend>Protocolo</legend>
                    <label>Descrição<label>
				    <textarea type="text" name="descricao" maxlength="250" placeholder="Demanda do contribuinte" required></textarea>
		            <!--</div><input type="text" name="descricao" maxlength="2000" placeholder="Demanda do contribuinte" class="required datanasc"> -->
                </div>
                <div>
                    <label>Data do registro</label>
                    <input type="date" name="data" maxlength="20"  required>
                </div>
                <div>
                    <label>Prazo para o atendimento</label>
                    <input type="date" name="prazo" maxlength="20"  required>
                </div>
                <div>
                    <label> Contribuinte demandante </label>
                    <input type="text" name="demandante" maxlength="250" placeholder="" required>
                </div>
                <input type="submit" name="" value="Enviar">
        </form>

        <form method="get" name="form_pesquisa" action="search_tb.php" class="pesquisa">
            <h1>Pesquisar contribuinte cadastrado<h1>
            <input type="text" name="busca" required>
            <input type="submit" name="" value="Pesquisar">
        </form>

</body>

</html>

