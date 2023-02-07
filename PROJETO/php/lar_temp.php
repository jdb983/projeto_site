<?php
 if(isset($_POST["fname5"])){
    $nome5 = $_POST["fname5"];            
}

if(isset($_POST["phone5"])){
    $telefone5 = $_POST["phone5"];          
}

if(isset($_POST["birthday6"])){
    $dtnascimento6 = $_POST["birthday6"];          
}

if(isset($_POST["cpf4"])){
    $cpf4 = $_POST["cpf4"];          
}

if(isset($_POST["rg4"])){
    $rg4 = $_POST["rg4"];          
}

if(isset($_POST["estado5"])){
    $estado5 = $_POST["estado5"];          
}

if(isset($_POST["cidade5"])){
    $cidade5 = $_POST["cidade5"];          
}

if(isset($_POST["bairro5"])){
    $bairro5 = $_POST["bairro5"];          
}

if(isset($_POST["rua5"])){
    $rua5 = $_POST["rua5"];          
}

if(isset($_POST["numero5"])){
    $numero5 = $_POST["numero5"];          
}

if(isset($_POST["complemento5"])){
    $complemento5 = $_POST["complemento5"];          
}

if(isset($_POST["choose7"])){
    $sn7 = $_POST["choose7"];          
}

if(isset($_POST["texto2_5"])){
    $texto2_5 = $_POST["texto2_5"];          
}

if(isset($_POST["image3"])){
    $image3 = $_POST["image3"];          
}

if($nome5!="" and $telefone5!="" and $dtnascimento6!="" and $cpf4!="" and $rg4!="" and $estado5!="" and $cidade5!="" and $bairro5!="" and $rua5!="" and $numero5!="" and $complemento5!="" and $sn7!="" and $texto2_5!="" and $image3!=""){
    
    include 'conecta.php';

    $query = 'insert into doacao_db (nome,	telefone,	data_de_nascimento,	cpf,	rg,	endereco_estado,	endereco_cidade,	endereco_bairro,	endereco_rua,	endereco_numero,	endereco_complemento,	oferece_lar,	tempo,	foto)
    values ("'.$nome5.'", "'.$telefone5.'", "'.$dtnascimento6.'", "'.$cpf4.'", "'.$rg4.'", "'.$estado5.'", "'.$cidade5.'", "'.$bairro5.'", "'.$rua5.'", "'.$numero5.'", "'.$complemento5.'", "'.$sn7.'", "'.$texto2_5.'", "'.$image3.'")';
    $result = mysqli_query($conecta, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($conecta);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>