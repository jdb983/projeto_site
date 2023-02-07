<?php
 if(isset($_POST["fname4"])){
    $nome4 = $_POST["fname4"];            
}

if(isset($_POST["phone4"])){
    $telefone4 = $_POST["phone4"];          
}

if(isset($_POST["birthday5"])){
    $dtnascimento5 = $_POST["birthday5"];          
}

if(isset($_POST["email3"])){
    $email3 = $_POST["email3"];          
}

if(isset($_POST["cpf3"])){
    $cpf3 = $_POST["cpf3"];          
}

if(isset($_POST["rg3"])){
    $rg3 = $_POST["rg3"];          
}

if(isset($_POST["estado4"])){
    $estado4 = $_POST["estado4"];          
}

if(isset($_POST["cidade4"])){
    $cidade4 = $_POST["cidade4"];          
}

if(isset($_POST["bairro4"])){
    $bairro4 = $_POST["bairro4"];          
}

if(isset($_POST["rua4"])){
    $rua4 = $_POST["rua4"];          
}

if(isset($_POST["numero4"])){
    $numero4 = $_POST["numero4"];          
}

if(isset($_POST["complemento4"])){
    $complemento4 = $_POST["complemento4"];          
}

if(isset($_POST["choose6"])){
    $sn6 = $_POST["choose6"];          
}

if(isset($_POST["texto2_4"])){
    $texto2_4 = $_POST["texto2_4"];          
}

if($nome4!="" and $telefone4!="" and $dtnascimento5!="" and $email3!="" and $cpf3!="" and $rg3!="" and $estado4!="" and $cidade4!="" and $bairro4!="" and $rua4!="" and $numero4!="" and $complemento4!="" and $sn6!="" and $texto2_4!=""){
    
    include 'conecta.php';

    $query = 'insert into doacao_db (nome,	telefone,	data_de_nascimento,	email,	cpf,	rg,	endereco_estado,	endereco_cidade,	endereco_bairro,	endereco_rua,	endereco_numero,	endereco_complemento,	horario,	dias_semana,	experiencia	historia	)
    values ("'.$nome4.'", "'.$telefone4.'", "'.$dtnascimento5.'", "'.$email3.'", "'.$cpf3.'", "'.$rg3.'", "'.$estado4.'", "'.$cidade4.'", "'.$bairro4.'", "'.$rua4.'", "'.$numero4.'", "'.$complemento4.'", "'.$sn6.'", "'.$texto2_4.'")';
    $result = mysqli_query($conecta, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($conecta);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>