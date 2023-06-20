<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cia do Gloss, veja nossos produtos">
    <title>Casdatro do Contribuinte</title>
    <!--Link CSS Style-->
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<header>
    <h1>Gestão Sys <h1>
</header>


<div class="register">
        <form method="post" name="form_contribuinte" action="receive_data.php">
            <legend class="tb1">Cadastrar Contribuinte</legend>
               <label>Nome Completo</label>
                    <div class="container">
                         <input type="text" name="nome" maxlength="100" placeholder="" required >   
                    </div>
                <label>Data de nascimento</label>
                    <div class="container">
                        <input type="date" name="nascimento" maxlength="20" placeholder="dd/mm/aaaa" required > 
                    </div>
                
                <label>CPF</label>
                    <div class="container">
                         <input type="text" name="cpf" maxlength="14" placeholder="" required >
                    </div>
                <label class="sex">Sexo</label>
                    <!--<input type="text" name="sexo" maxlength="150" placeholder="F/M" class="required ">
                    <div class="input">-->
                    <div class="container">
				        <input class="radio" type="radio" name="sexo" value="Feminino"/><span> Feminino</span>
			        </div>
                    <div class="container">
				        <input class="radio" type="radio" name="sexo" value="Masculino"/><span> Masculino</span>	
			        </div>

                    <label>Cidade</label>
                        <input type="text" name="cidade" maxlength="100" placeholder="" >
                    <label>Bairro</label>
                        <input type="text" name="bairro" maxlength="100" placeholder="" >
                    <label>Número</label>
                        <input type="text" name="numero" maxlength="5" placeholder="" >
                    <label>Complemento</label>
                        <input type="text" name="complemento" maxlength="20" placeholder="" >

                    <input type="submit" name="acao" value="Cadastrar">
        </form>
</div>

    <div class="pesquisar">
        <form method="get" name="form_pesquisa" action="search_tb.php" class="pesquisa">
            <h1>Pesquisar contribuinte cadastrado<h1>
                <input type="text" name="busca" required>
                    <div class="btnp">
                        <input type="submit" name="" value="Pesquisar">
                    </div>
        </form>
    </div>
</body>

</html>

