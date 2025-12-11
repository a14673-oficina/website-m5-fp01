<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fp01</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $password = $_POST["password"];
        $tamanho = strlen($password);

        if($tamanho < 5){
            $passtamanho = "Password fraca, mete mais!";
        }elseif($tamanho >= 5 && $tamanho <=8 ){
            $passtamanho = "Passwprd média";
        }else{
            $passtamanho = "Password forte";
        }

        if($idade < 12 ){
            $idadeTexto = "uma Criança";
        }elseif($idade >= 12 && $idade <= 17){
            $idadeTexto = "um Adolescente";
        }else{
            $idadeTexto = "um Adulto";
        }

        echo "Olá, $nome! Seja bem-vindo.";
        echo "<br>";
        echo "És, $idadeTexto.";
        echo "<br>";
        echo "$passtamanho";
    ?> 
</body>
</html>