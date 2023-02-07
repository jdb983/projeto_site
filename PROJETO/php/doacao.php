<?php
 if(isset($_POST["fname1"])){
    $nome1 = $_POST["fname1"];            
}

if(isset($_POST["phone1"])){
    $telefone1 = $_POST["phone1"];          
}

if(isset($_POST["birthday1"])){
    $dtnascimento1 = $_POST["birthday1"];          
}

if(isset($_POST["estado1"])){
    $estado1 = $_POST["estado1"];          
}

if(isset($_POST["cidade1"])){
    $cidade1 = $_POST["cidade1"];          
}

if(isset($_POST["bairro1"])){
    $bairro1 = $_POST["bairro1"];          
}

if(isset($_POST["rua1"])){
    $rua1 = $_POST["rua1"];          
}

if(isset($_POST["numero1"])){
    $numero1 = $_POST["numero1"];          
}

if(isset($_POST["complemento1"])){
    $complemento1 = $_POST["complemento1"];          
}

if(isset($_POST["item1"])){
    $item1 = $_POST["item1"];          
}

if(isset($_POST["choose1"])){
    $sn1 = $_POST["choose1"];          
}

if($nome1!="" and $telefone1!="" and $dtnascimento1!="" and $estado1!="" and $cidade1!="" and $bairro1!="" and $rua1!="" and $numero1!="" and $complemento1!="" and $item1!="" and $sn1!=""){
    
    include 'conecta.php';

    $query = 'insert into doacao_db (nome, telefone,	data_de_nascimento,	endereco_estado,	endereco_cidade,	endereco_bairro,	endereco_rua,	endereco_numero,	endereco_complemento,	item_doado,	colaborador) 
    values ("'.$nome1.'", "'.$telefone1.'", "'.$dtnascimento1.'", "'.$estado1.'", "'.$cidade1.'", "'.$bairro1.'", "'.$rua1.'", "'.$numero1.'", "'.$complemento1.'", "'.$item1.'", "'.$sn1.'")';
    $result = mysqli_query($conecta, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($conecta);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>