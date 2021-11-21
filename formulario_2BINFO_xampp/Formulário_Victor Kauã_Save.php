<?php
    $firma = $_POST["firma"];
    $date =  $_POST["date"];
    $numero = $_POST["numero"];
    $endereco = $_POST["endereco"];
    $complemento =  $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $city = $_POST["city"];
    $estado =  $_POST["estado"];
    $cep = $_POST["cep"];
    $cnpj = $_POST["cnpj"];
    $inscricao =  $_POST["inscricao"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $email =  $_POST["email"];
    if(empty($firma) and empty($numero) and empty($cnpj) and empty($city) ) {
        echo "<p>O Formulário não foi enviado.O mesmo não teve as Informações de Firma,Número,CPNJ e Cidade.</p>";
    }
    else {
        echo "<p> Olá <b>$firma</b>!! Seu Formulário foi recebido.Obrigado por escolher o nosso formulário!</p>";
        file_put_contents("dados.csv" , "$firma,$date,$numero,$endereco,$complemento,$bairro,$city,$estado,$cep,$cnpj,$inscricao,$telefone,$celular,$email\n", FILE_APPEND);    
    }

?>