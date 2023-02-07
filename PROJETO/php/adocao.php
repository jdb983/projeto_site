<?php
 if(isset($_POST["fname2"])){
    $nome2 = $_POST["fname2"];            
}

if(isset($_POST["animal1"])){
    $animal1 = $_POST["animal1"];          
}

if(isset($_POST["faname1"])){
    $nanimal1 = $_POST["faname1"];          
}

if(isset($_POST["phone2"])){
    $telefone2 = $_POST["phone2"];          
}

if(isset($_POST["email1"])){
    $email1 = $_POST["email1"];          
}

if(isset($_POST["birthday2"])){
    $dtnascimento2 = $_POST["birthday2"];          
}

if(isset($_POST["cpf1"])){
    $cpf1 = $_POST["cpf1"];          
}

if(isset($_POST["rg1"])){
    $rg1 = $_POST["rg1"];          
}

if(isset($_POST["profissao1"])){
    $profissao1 = $_POST["profissao1"];          
}

if(isset($_POST["estado2"])){
    $estado2 = $_POST["estado2"];          
}

if(isset($_POST["cidade2"])){
    $cidade2 = $_POST["cidade2"];          
}

if(isset($_POST["bairro2"])){
    $bairro2 = $_POST["bairro2"];          
}

if(isset($_POST["rua2"])){
    $rua2 = $_POST["rua2"];          
}

if(isset($_POST["numero2"])){
    $numero2 = $_POST["numero2"];          
}

if(isset($_POST["complemento2"])){
    $complemento2 = $_POST["complemento2"];          
}

if(isset($_POST["iamge1"])){
    $image1 = $_POST["image1"];          
}

if(isset($_POST["motivo1"])){
    $motivo1 = $_POST["motivo1"];          
}

if(isset($_POST["moradia1"])){
    $moradia1 = $_POST["moradia1"];          
}

if(isset($_POST["choose2"])){
    $sn2 = $_POST["choose2"];          
}

if(isset($_POST["texto4_1"])){
    $texto4_1 = $_POST["texto4_1"];          
}

if(isset($_POST["texto5_1"])){
    $texto5_1 = $_POST["texto5_1"];          
}

if($nome2!="" and $animal1!="" and $nanimal1!="" and $telefone2!="" and $email1!="" and $dtnascimento1!="" and $cpf1!="" and $rg1!="" and $profissao1!="" and $estado2!="" and $cidade2!="" and $bairro2!="" and $rua2!="" and $numero2!="" and $complemento2!="" and $image1!="" and $motivo1!="" and $moradia1!="" and $sn2!="" and $texto4_1!="" and $texto5_1!=""){
    
    include 'conecta.php';

    $query = 'insert into doacao_db (nome,	tipo_de_animal,	nome_pet,	telefone,	email,	data_de_nascimento,	cpf,	rg,	profissao,	endereco_estado,	endereco_cidade,	endereco_bairro,	endereco_rua,	endereco_numero,	endereco_complemento,	fotos,	motivo_adocao,	tipo_de_moradia,	permissao_de_animais,	mudanca	outros_animais) 
    values ("'.$nome2.'", "'.$animal1.'", "'.$nanimal1.'", "'.$telefone2.'", "'.$email1.'", "'.$dtnascimento1.'", "'.$cpf1.'", "'.$rg1.'", "'.$profissao1.'", "'.$estado2.'", "'.$cidade2.'", "'.$bairro2.'", "'.$rua2.'", "'.$numero2.'", "'.$complemento2.'", "'.$image1.'", "'.$motivo1.'", "'.$moradia1.'", "'.$sn2.'", "'.$texto4_1.'", "'.$texto5_1.'")';
    $result = mysqli_query($conecta, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($conecta);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>