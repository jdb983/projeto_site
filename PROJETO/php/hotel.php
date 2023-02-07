<?php
 if(isset($_POST["fname3"])){
    $nome3 = $_POST["fname3"];            
}

if(isset($_POST["phone3"])){
    $telefone3 = $_POST["phone3"];          
}

if(isset($_POST["birthday3"])){
    $dtnascimento3 = $_POST["birthday3"];          
}

if(isset($_POST["email2"])){
    $email2 = $_POST["email2"];          
}

if(isset($_POST["cpf2"])){
    $cpf2 = $_POST["cpf2"];          
}

if(isset($_POST["rg2"])){
    $rg2 = $_POST["rg2"];          
}

if(isset($_POST["estado3"])){
    $estado3 = $_POST["estado3"];          
}

if(isset($_POST["cidade3"])){
    $cidade3 = $_POST["cidade3"];          
}

if(isset($_POST["bairro3"])){
    $bairro3 = $_POST["bairro3"];          
}

if(isset($_POST["rua3"])){
    $rua3 = $_POST["rua3"];          
}

if(isset($_POST["numero3"])){
    $numero3 = $_POST["numero3"];          
}

if(isset($_POST["complemento3"])){
    $complemento3 = $_POST["complemento3"];          
}

if(isset($_POST["faname2"])){
    $nanimal2 = $_POST["faname2"];          
}

if(isset($_POST["aidade1"])){
    $aidade1 = $_POST["aidade1"];          
}

if(isset($_POST["birthday4"])){
    $dtnascimento4 = $_POST["birthday4"];          
}

if(isset($_POST["raca1"])){
    $raca1 = $_POST["raca1"];          
}

if(isset($_POST["choose3"])){
    $sn3 = $_POST["choose3"];          
}

if(isset($_POST["texto1_3"])){
    $texto1_3 = $_POST["texto1_3"];          
}

if(isset($_POST["temp1"])){
    $temp1 = $_POST["temp1"];          
}

if(isset($_POST["choose4"])){
    $sn4 = $_POST["choose4"];          
}

if(isset($_POST["choose5"])){
    $sn5 = $_POST["choose5"];          
}

if($nome3!="" and $telefone3!="" and $dtnascimento3!="" and $email2!="" and $cpf2!="" and $rg2!="" and $estado3!="" and $cidade3!="" and $bairro3!="" and $rua3!="" and $numero3!="" and $complemento3!="" and $nanimal2!="" and $aidade1!="" and $dtnascimento4!="" and  $raca1!="" and $sn3!="" and $texto1_3!="" and $temp1!="" and $sn4!="" and $sn5!=""){
    
    include 'conecta.php';

    $query = 'insert into doacao_db (nome,	telefone,	data_de_nascimento,	email,	cpf,	rg,	endereco_estado,	endereco_cidade,	endereco_bairro,	endereco_rua,	endereco_numero,	endereco_complemento,	nome_pet,	idade_pet,	data_de_nascimento_pet,	raca,	alergia,	duracao_estadia,	problema_de_saude,	medicamento) 
    values ("'.$nome3.'", "'.$telefone3.'", "'.$dtnascimento3.'", "'.$email2.'", "'.$cpf2.'", "'.$rg2.'", "'.$estado3.'", "'.$cidade3.'", "'.$bairro3.'", "'.$rua3.'", "'.$numero3.'", "'.$complemento3.'", "'.$nanimal2.'", "'.$aidade1.'", "'.$dtnascimento4.'", "'.$raca1.'", "'.$sn3.'", "'.$texto1_3.'", "'.$temp1.'", "'.$sn4.'", "'.$sn5.'")';
    $result = mysqli_query($conecta, $query) or die('Query failed: ' . mysql_error());
    mysqli_close($conecta);

    echo "CADASTRADO COM SUCESSO!!!";
}
?>