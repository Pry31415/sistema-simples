<?php
//terminal -> projeto: composer require spatie/db-dumper
require 'vendor/autoload.php';          
use Spatie\DbDumper\Databases\MySql;   

try{
    MySQL ::create()                   //:: para chamar um método estático.
        ->setDumpBinaryPath('C:\wamp64\bin\mysql\mysql5.7.36\bin')  //Fornece acesso aos excutáveis do mysqli 
        ->setHost('localhost')        //parametros para conecxão com o mysql host
        ->setDbName('cadastro_contribuinte_db')
        ->setUserName('root')
        ->setPassword('')
        ->dumpToFile('backup/backups' .date('YmdHis') . 'sql');   //nome do arquivo criado/nome do arquivo  ... . 'sql'(cria um arquivo novo para não sobrepor o velho)

        print "<script>alert('Dump gerado com sucesso.');</script>";
}

catch(Exception $e){
    echo 'Erro ao gerar dump:' . $e->getMessage();
}

?>

