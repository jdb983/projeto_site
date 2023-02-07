<?php

    $actionDoacao = "php/doacao.php";
    $actionAdocao = "php/adocao.php";
    $actionHotel = "php/hotel.php";
    $actionTrabalhe = "php/trabalhe_conosco.php";
    $actionLar = "php/lar_temp.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>SALIKÃO</title>
    <link rel="stylesheet" type="text/css" href="css/estilo1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

    <script language="javascript" src="javascript/funcoes.js" defer></script>

<body>
    <div id="cabecalho">
            <img id="icone" src="imagens/iconetest.png">
        <header id="acabecalho">
            <h1 id="titulo">SALIKÃO</h1>
            <h3 id="subtitulo"><i>--Lar de animais--</i></h3>
    </div>

    <div id="menu">
        <nav id="menu">
            <ul type="disc">
                <li onmouseover="mudaFoto('imagens/icone2.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="interface"><b>HOME</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone3.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="denuncie"><b>DENUNCIE MAUS TRATOS</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone4.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="doacao"><b>FAÇA SUA DOAÇÃO</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone5.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="adocao"><b>ADOTE UM ANIMAL</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone6.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="hotel"><b>HOTELZINHO</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone7.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="trabalhe_conosco"><b>TRABALHE CONOSCO</b></a></li>
                <li onmouseover="mudaFoto('imagens/icone8.png')" onmouseout="mudaFoto('imagens/iconetest.png')"><a href="#" class="menu" for="lar_temporario"><b>LAR TEMPORÁRIO</b></a></li>
        </nav>
        </header>
    </div> <br>

    <div class="interface" id="interface">
        <section id="corpo"> <br>
            <h2 id="titulo1interface">Quem nós somos?</h2>
            <p class="p1">Somos uma instituição sem fins lucrativos, que foi fundada com a missão de dar uma identidade para os animais.
            Não somos um abrigo, buscamos ajudar, dando dignidade, acolhimento e uma nova oportunidade de uma
            vida melhor, sem distinção de raça, porte ou origem. Até que consigam uma casa definitiva.<br><br>
            Todo Animal transmite um amor puro, gratuito, sem interesse, esta energia afeta diretamente a nós, tanto na saúde 
            física como ao nosso espírito, por isso nunca, jamais maltrate um animal, ele tem todos os sentimentos que nós 
            humanos temos. Por isso, tratamos cada animal como um indivíduo, respeitando suas diferenças e história de vida.
            </p><br> <br> <br>
    
            <table>
                <tr>
                    <td><img id="img2" src="imagens/img2.jpeg"></td>
                    <td>
                        <p>Nossos animais de estimação têm vida tão curta e, ainda assim, passam a maior parte do tempo esperando que 
                        voltemos para casa todos os dias. É impressionante quanto amor e alegria eles trazem para nossas vidas, e 
                        quanto nos aproximamos uns dos outros por causa deles.
                        </p>
            
                        <p>Algumas pessoas ainda não acreditam, mas existe uma grande influência dos animais de estimação na vida 
                        e na autoestima das pessoas. Atualmente existe um trabalho feito com animais, também como forma de terapia, 
                        onde o objetivo é que os animais tragam conforto e carinho para pessoas enfermas.
                        É fato que conviver com animais dóceis traz alegria e bem-estar, e o convívio é sempre agradável e reconfortante.
                        Os animais de estimação são capazes de transmitir a sensação de bem-estar por serem carinhosos e cuidarem das 
                        pessoas que estão ao seu redor, de forma pura e sincera. O nosso cérebro é capaz de reconhecer um gesto sincero 
                        e, por isso, os benefícios desta convivência são sempre muito positivos.
                        </p>
                    </td>
                </tr>
            </table>
        </section>

    </div>

    <div class="denuncie" id="denuncie">
        <section id="corpo"> <br>
            <h1 id="titulodenuncie">DENUNCIE MAUS TRATOS!</h1> <hr>
            <img id="imgdenuncie" src="imagens/denuncie.jpg"/>
        </section>
    </div>

    <div class="form1" id="doacao">
        <div id="body1">
                <h1 id="form1titulo">FORMULÁRIO SALIKÃO</h1>
                <h2 id="form1subtitulo"><b><u> -- FAÇA SUA DOAÇÃO AQUI -- </u></b></h2>
            <form action="<?= $actionDoacao?>" method="post">
                <fieldset>
                    <legend><h4>DADOS PESSOAIS:</h4></legend>
                        <label for="name1"><p class="textoform">NOME:</p></label>
                        <input type="text" id="name1" name="fname1" placeholder="Digite seu nome"> <br>

                        <label for="telefone1"><p class="textoform">TELEFONE:</p></label>
                        <input type="tel" id="telefone1" name="phone1" class="input-padrao" required placeholder="(xx) xxxxx-xxxx"> <br>

                        <label for="datebirthday1"><p class="textoform">DATA DE NASCIMENTO:</p></label>
                        <input type="date" id="datebirthday1" name="birthday1"> <br>

                    <p>ENDEREÇO:
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label for="localestado1">Estado:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localestado1" name="estado1">
                                </td>
                                <td>
                                    <label for="localcidade1">Cidade:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcidade1" name="cidade1">
                                </td>
                                <tr>
                                <td>
                                    <label for="localbairro1">Bairro: </label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localbairro1" name="bairro1">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="localrua1">Rua:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localrua1" name="rua1">
                                </td>
                                <td>
                                    <label for="localnumero1">Numero:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localnumero1" name="numero1" size="4">
                                </td>
                                <td>
                                    <label for="localcomplemento1">Complemento:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcomplemento1" name="complemento1">
                                </td>
                            </tr>
                        </table>
                    </p> <br>

                    <p>O QUE DESEJA DOAR? <br><br>
                        <select name="item1">
                            <option value="padrao" checked> Item</option>
                            <option value="rc"> Ração de cachorro</option>
                            <option value="rg"> Ração de gato</option>
                            <option value="r"> Roupas</option>
                            <option value="cob"> Cobertores </option>
                            <option value="acess"> Acessórios</option>
                            <option value="papel"> Jornais/Revistas</option>
                            <option value="remed"> Remédios</option>
                            <option value="outros"> Outros</option>
                        </select>
                    </p> <br>

                    <p>JÁ FEZ ALGUMA COLABORAÇÃO ANTES? <br>
                        <label for="sim1"> Sim</label>
                        <input type="radio" id="sim1" name="choose1" value="sim">
                        <label for="nao1"> Não</label>
                        <input type="radio" id="nao1" name="choose1" value="nao">
                    </p>
                    <input type="submit" name="enviar" value="Enviar">	
                    <input type="reset" value="Limpar">
                </fieldset>
            </form>
        </div> <hr> <br>

    </div>

    <div class="form2" id="adocao">
        <div id="body2">
                <h1 id="form2titulo">FORMULÁRIO SALIKÃO</h1>
                <h2 id="form2subtitulo"><b><u>Deseja adotar um amigo de 4 patas?</u></b></h2>
            <form action="<?= $actionAdocao?>" method="post">
                <fieldset>
                    <legend><h4 id="form2adocao">FORMULÁRIO DE ADOÇÃO:</h4></legend>

                    <label for="name2">NOME COMPLETO:</label>
                    <input type="text" id="name2" name="fname2" placeholder="Digite seu nome completo"> <br>

                    <p> TIPO DE ANIMAL: <br><br>
                        <select name="animal1">
                            <option value="padrao" checked> Escolha</option>
                            <option value="gato"> Gato</option>
                            <option value="cachorro"> Cachorro</option>
                            <option value="outro"> Outro</option>
                        </select>
                    </p> <br>

                    <label for="aname1">NOME DO ANIMAL A SER ADOTADO:</label>
                    <input type="text" id="aname1" name="faname1"> <br>

                    <label for="telefone2">TELEFONE:</label>
                    <input type="tel" id="telefone2" name="phone2" class="input-padrao" required placeholder="(xx) xxxxx-xxxx"> <br>

                    <label for="aemail1">E-MAIL:</label>
                    <input type="aemail1" name="email1" placeholder="Digite seu e-mail"> <br>

                    <label for="datebirthday2">DATA DE NASCIMENTO:</label>
                    <input type="date" id="datebirthday2" name="birthday2"> <br>

                    <label for="campo_cpf">CPF:</label>
                    <input type="text" id="campo_cpf" name="cpf1" required placeholder="xxx.xxx.xxx-xx"> <br>

                    <label for="ident1">RG:</label>
                    <input type="text" id="ident1" name="rg1"> <br>

                    <label for="prof1">PROFISSÃO:</label>
                    <input type="text" id="prof1" name="profissao1"> <br>

                    <p>ENDEREÇO:
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label for="localestado2">Estado:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localestado2" name="estado2">
                                </td>
                                <td>
                                    <label for="localcidade2">Cidade:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcidade2" name="cidade2">
                                </td>
                            <tr>
                                <td>
                                    <label for="localbairro2">Bairro: </label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localbairro2" name="bairro2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="localrua2">Rua:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localrua2" name="rua2">
                                </td>
                                <td>
                                    <label for="localnumero2">Numero:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localnumero2" name="numero2" size="4">
                                </td>
                                <td>
                                    <label for="localcomplemento2">Complemento:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcomplemento2" name="complemento2">
                                </td>
                            </tr>
                            </tr>
                        </table>
                    </p> <br>

                    <label for="img1">SE POSSÍVEL, ENVIE FOTOS DO AMBIENTE QUE O ANIMAL PODERÁ FICAR:</label> <br>
                    <input type="file" id="img1" name="image1"> <br><br>

                </fieldset>

                <fieldset>
                    <legend><h4>CONTE UM POUCO SOBRE VOCÊ:</h4></legend>

                    <p> 1.VOCÊ ESTÁ ADOTANDO O ANIMAL PARA SER: <br><br>
                        <select name="motivo1">
                            <option value="padrao" checked> Escolha</option>
                            <option value="comp"> Companhia/Membro da Família</option>
                            <option value="guarda"> Guarda/Proteger a casa</option>
                            <option value="outro"> Outro</option>
                        </select>
                    </p> <br>

                    <p> 2.MORA EM: <br><br>
                        <select name="moradia1">
                            <option value="padrao" checked> Escolha</option>
                            <option value="casa"> Casa</option>
                            <option value="apt"> Apartamento</option>
                        </select>
                    </p> <br>

                    <p> 3.VOCÊ TEM CERTEZA QUE É PERMITIDO ANIMAIS NO IMÓVEL? <br>
                        <label for="sim2"> Sim</label>
                        <input type="radio" id="sim2" name="choose2" value="sim">
                        <label for="nao2"> Não</label>
                        <input type="radio" id="nao2" name="choose2" value="nao">
                    </p> <br>

                    <p> 4.O QUE VOCÊ FARIA COM O ANIMAL SE PRECISASSE MUDAR DE RESIDÊNCIA, CIDADE OU ESTADO? <br><br>
                        <textarea name="texto4_1" cols="100" rows="10"></textarea>
                    </p> <br>

                    <p> 5.EXISTE OUTROS ANIMAIS NA CASA? SE SIM, QUAIS? SÃO CASTRADOS E VACINADOS? <br><br>
                        <textarea name="texto5_1" cols="100" rows="10"></textarea>
                    </p> <br>

                    <p><b>TERMO DE RESPONSABILIDADE:</b></p>
                
                    <p>Eu me comprometo a cuidar bem desse animal até 
                    seu último dia de vida, continuar o amando e respeitando quando 
                    estiver idoso, caso tenha doenças crônicas e/ou deficiência mental/física.
                    </p>
    
                    <p>Tenho certeza de que não estou adotando por impulso, só porque
                    o cãozinho ainda é filhote, por causa da raça ou por que meu filho ou filha insistiu para ganhar um.
                    </p>
                    
                    <label for="concordo"> Eu concordo</label>
                    <input type="radio" name="concordo" value="concordo">
                    <label for="nconcordo"> Não concordo</label>
                    <input type="radio" name="concordo" value="nconcordo"> <br><br>

                    <input type="submit" name="enviar" value="Enviar">	
                    <input type="reset" name="limpar" value="Limpar">
                </fieldset>
            </form> <hr> <br>
        </div>
    </div>

    <div class="form3" id="hotel">
        <div id="body3">
                <h1 id="form3titulo">FORMULÁRIO SALIKÃO</h1>
                <h2 id="form3subtitulo"><b><u>HOTELZINHO PET</u></b></h2>
            <form action="<?= $actionHotel?>" method="post">
                <fieldset>
                    <legend><h4>DADOS DO DONO:</h4></legend> <br>
                    <label for="name3">NOME COMPLETO:</label>
                    <input type="text" id="name3" name="fname3" placeholder="Digite seu nome completo"> <br>

                    <label for="telefone3">TELEFONE:</label>
                    <input type="tel" id="telefone3" name="phone3" class="input-padrao" required placeholder="(xx) xxxxx-xxxx"> <br>

                    <label for="datebirthday3">DATA DE NASCIMENTO:</label>
                    <input type="date" id="datebirthday3" name="birthday3"> <br>

                    <label for="aemail2">E-MAIL:</label>
                    <input type="aemail2" name="email2" placeholder="Digite seu e-mail"> <br>

                    <label for="campo_cpf2">CPF:</label>
                    <input type="text" id="campo_cpf2" name="cpf2" required placeholder="xxx.xxx.xxx-xx"> <br>

                    <label for="ident2">RG:</label>
                    <input type="text" id="ident2" name="rg2"> <br>

                    <p>ENDEREÇO:
                        <table cellspacing="10">
                            <tr>
                                <td>
                                    <label for="localestado3">Estado:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localestado3" name="estado3">
                                </td>
                                <td>
                                    <label for="localcidade3">Cidade:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcidade3" name="cidade3">
                                </td>
                            <tr>
                                <td>
                                    <label for="localbairro3">Bairro: </label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localbairro3" name="bairro3">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="localrua3">Rua:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localrua3" name="rua3">
                                </td>
                                <td>
                                    <label for="localnumero3">Numero:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localnumero3" name="numero3" size="4">
                
                                    <label for="localcomplemento3">Complemento:</label>
                                </td>
                                <td text-align="left">
                                    <input type="text" id="localcomplemento3" name="complemento3">
                                </td>
                            </tr>
                            </tr>
                        </table>
                    </p> <br><br>

                </fieldset>

                <fieldset>
                    <legend><h4>DADOS DO PET:</h4></legend> <br>

                    <label for="aname2">NOME:</label>
                    <input type="text" id="aname2" name="faname2" placeholder="Digite o nome"> <br>

                    <label for="aniidade1">IDADE:</label>
                    <input type="number" id="aniidade1" name="aidade1" placeholder="Anos"> <br>

                    <label for="datebirthday4">DATA DE NASCIMENTO:</label>
                    <input type="date" id="datebirthday4" name="birthday4"> <br>

                    <label for="araca1">RAÇA:</label>
                    <input type="text" id="araca1" name="raca1"> <br>

                    <p> POSSUI ALGUMA ALERGIA? <br>
                        <label for="sim3"> Sim</label>
                        <input type="radio" id="sim3" name="choose3" value="sim">
                        <label for="nao3"> Não</label>
                        <input type="radio" id="nao3" name="choose3" value="nao">
                    </p>
            
                    <p> QUAL? <br><br>
                        <textarea name="texto1_3" cols="50" rows="10"></textarea>
                    </p>

                </fieldset> <br><br>

                <fieldset>
                    <legend><h4>SOBRE A ESTADIA:</h4></legend> <br>

                    <p> QUANTO TEMPO A ESTADIA IRÁ DURAR? <br><br>
                        <input type="number" id="dias1" name="temp1" placeholder="dias">
                    </p> <br>

                    <p> O ANIMAL POSSUI ALGUM PROBLEMA DE SAÚDE? <br><br>
                        <label for="sim4"> Sim</label>
                        <input type="radio" id="sim4" name="choose4" value="sim">
                        <label for="nao4"> Não</label>
                        <input type="radio" id="nao4" name="choose4" value="nao"> <br><br>
                        <textarea name="texto4" cols="100" rows="5"></textarea>
                    </p> <br>

                    <p> O ANIMAL FAZ USO DE ALGUM MEDICAMENTO? QUAL? <br><br>
                        <label for="sim5"> Sim</label>
                        <input type="radio" id="sim5" name="choose5" value="sim">
                        <label for="nao5"> Não</label>
                        <input type="radio" id="nao5" name="choose5" value="nao"> <br><br>
                        <textarea name="texto5" cols="100" rows="5"></textarea>
                    </p> <br><br>

                    <input type="submit" name="enviar" value="Enviar">	
                    <input type="reset" name="limpar" value="Limpar">

                </fieldset>
            </form>
        </div>
    </div>

    <div class="form4" id="trabalhe_conosco">
        <div id="body3">
        <h2><b><u> -- TRABALHE CONOSCO -- </u></b></h2>
        <form action="<?= $actionAdocao?>" method="post">
            <fieldset>
                <legend><h4>DADOS PESSOAIS:</h4></legend>
            <label for="name4">NOME COMPLETO:</label>
            <input type="text" id="name4" name="fname4" placeholder="Digite seu nome completo">
            <br>

            <label for="telefone4">TELEFONE:</label>
            <input type="tel" id="telefone4" name="phone4" class="input-padrao" required placeholder="(xx) xxxxx-xxxx">
            <br>

            <label for="datebirthday5">DATA DE NASCIMENTO:</label>
            <input type="date" id="datebirthday5" name="birthday5">
            <br>

            <label for="aemail3">E-MAIL:</label>
            <input type="aemail3" name="email3" placeholder="Digite seu e-mail">
            <br>

            <label for="campo_cpf3">CPF:</label>
            <input type="text" id="campo_cpf3" name="cpf3" required placeholder="xxx.xxx.xxx-xx">
            <br>

            <label for="ident3">RG:</label>
            <input type="text" id="ident3" name="rg3">
            <br>

            <p>ENDEREÇO:
            <table cellspacing="10">

                <tr>
                    <td>
                     <label for="localestado4">Estado:</label>
                    </td>
                    <td text-align="left">
                        <input type="text" id="localestado4" name="estado4">
                    </td>
                    <td>
                        <label for="localcidade4">Cidade:</label>
                    </td>
                    <td text-align="left">
                        <input type="text" id="localcidade4" name="cidade4">
                    </td>
                    <tr>
                        <td>
                         <label for="localbairro4">Bairro: </label>
                        </td>
                        <td text-align="left">
                         <input type="text" id="localbairro4" name="bairro4">
                        </td>
                       </tr>
                <tr>
                 <td>
                  <label for="localrua4">Rua:</label>
                 </td>
                 <td text-align="left">
                  <input type="text" id="localrua4" name="rua4">
                 </td>
                 <td>
                  <label for="localnumero4">Numero:</label>
                 </td>
                 <td text-align="left">
                  <input type="text" id="localnumero4" name="numero4" size="4">
                 </td>
                 <td>
                    <label for="localcomplemento4">Complemento:</label>
                 </td>
                 <td text-align="left">
                    <input type="text" id="localcomplemento4" name="complemento4">
                 </td>
                </tr>
            </tr>
            </table>
            </p>
                <br>
            </fieldset>

            <fieldset>
                <legend><h4>CONTE UM POUCO SOBRE VOCÊ:</h4></legend>
                <br>

                <p> QUAL A SUA DISPONIBILIDADE DE HORÁRIO?
                    <br><br>

                        <label for="manha"> Manhã</label>
                        <input type="checkbox" name="manha" value="m">
                        <label for="tarde"> Tarde</label>
                        <input type="checkbox" name="tarde" value="t">
                        <label for="noite"> Noite</label>
                        <input type="checkbox" name="noite" value="n">
                        <label for="qqr"> Qualquer dia</label>
                        <input type="checkbox" name="qqr" value="q">
                </p>
                <br>

                <p> QUAIS DIAS DA SEMANA TEM DISPONIBILIDADE PARA AJUDAR?
                    <br><br>

                        <label for="seg"> Segunda-feira</label>
                        <input type="checkbox" name="seg" value="seg">
                        <label for="ter"> Terça-feira</label>
                        <input type="checkbox" name="ter" value="ter">
                        <label for="qua"> Quarta-feira</label>
                        <input type="checkbox" name="qua" value="qua">
                        <label for="qui"> Quinta-feira</label>
                        <input type="checkbox" name="qui" value="qui">
                        <label for="sex"> Sexta-feira</label>
                        <input type="checkbox" name="sex" value="sex">
                        <label for="sab"> Sábado</label>
                        <input type="checkbox" name="sab" value="sab">
                        <label for="dom"> Domingo</label>
                        <input type="checkbox" name="dom" value="dom">
                </p>
                <br>

                <p> JÁ TEVE ALGUMA EXPERIÊNCIA COM TRABALHO VOLUNTÁRIO?
                    <br><br>

                    <label for="sim6">Sim</label>
                    <input type="radio" id="sim6" name="choose6" value="sim">
                    <label for="nao6">Não</label>
                    <input type="radio" id="nao6" name="choose6" value="nao">
                </p>
                <br>
                <p> CONTE UM POUCO SOBRE VOCÊ E SOBRE SUA HISTÓRIA COM ANIMAIS:
                    <br><br>
                    <textarea name="texto2_4" cols="100" rows="10"></textarea>
                </p>
                <br><br>
                <input type="submit" name="enviar" value="Enviar">	
                <input type="reset" name="limpar" value="Limpar">
                <br>
            </fieldset>
        </form>
        <br>
        <hr>
    </div>

    <div class="form5" id="lar_temporario">
        <h2><b><u> -- QUERO OFERECER LAR TEMPORÁRIO -- </u></b></h2>
        <form action="<?= $actionLar?>" method="post">
            <fieldset>
                <legend><h4>DADOS PESSOAIS:</h4></legend>
            <label for="name5">NOME:</label>
            <input type="text" id="name5" name="fname5" placeholder="Digite seu nome">
            <br>

            <label for="telefone5">TELEFONE:</label>
            <input type="tel" id="telefone5" name="phone5" class="input-padrao" required placeholder="(xx) xxxxx-xxxx">
            <br>

            <label for="datebirthday6">DATA DE NASCIMENTO:</label>
            <input type="date" id="datebirthday6" name="birthday6">
            <br>

            <label for="campo_cpf4">CPF:</label>
            <input type="text" id="campo_cpf4" name="cpf4" required placeholder="xxx.xxx.xxx-xx">
            <br>

            <label for="ident4">RG:</label>
            <input type="text" id="ident4" name="rg4">
            <br>

            <p>ENDEREÇO:
            <table cellspacing="10">

                <tr>
                    <td>
                     <label for="localestado5">Estado:</label>
                    </td>
                    <td text-align="left">
                        <input type="text" id="localestado5" name="estado5">
                    </td>
                    <td>
                        <label for="localcidade5">Cidade:</label>
                    </td>
                    <td text-align="left">
                        <input type="text" id="localcidade5" name="cidade5">
                    </td>
                    <tr>
                        <td>
                         <label for="localbairro5">Bairro: </label>
                        </td>
                        <td text-align="left">
                         <input type="text" id="localbairro5" name="bairro5">
                        </td>
                       </tr>
                <tr>
                 <td>
                  <label for="localrua5">Rua:</label>
                 </td>
                 <td text-align="left">
                  <input type="text" id="localrua5" name="rua5">
                 </td>
                 <td>
                  <label for="localnumero5">Numero:</label>
                 </td>
                 <td text-align="left">
                  <input type="text" id="localnumero5" name="numero5" size="4">
                 </td>
                 <td>
                    <label for="localcomplemento5">Complemento:</label>
                 </td>
                 <td text-align="left">
                    <input type="text" id="localcomplemento5" name="complemento5">
                 </td>
                </tr>
            </tr>
            </table>
            </p>
                <br>
            </fieldset>

            <fieldset>
                <legend><h4>CONTE UM POUCO SOBRE SEU LAR:</h4></legend>
                <br>

                <p> É A PRIMEIRA VEZ QUE OFERECE LAR TEMPORÁRIO?
                    <br><br>
                <label for="sim7"> Sim</label>
                <input type="radio" id="sim7" name="choose7" value="sim">
                <label for="nao7"> Não</label>
                <input type="radio" id="nao7" name="choose7" value="nao">
                </p>

                <p> POR QUANTO TEMPO VOCÊ PODE OFERECER O LAR, CASO O ANIMAL NÃO SEJA ADOTADO?
                    <br><br>
                    <textarea name="texto2_5" cols="15" rows="1"></textarea>
                </p>
                <br>

                <label for="img3">SE POSSÍVEL, ENVIE FOTOS DO AMBIENTE QUE O ANIMAL PODERÁ FICAR:</label>
                <br>
                <input type="file" id="img3" name="image3">
                <br><br><br>

                <input type="submit" name="enviar" value="Enviar">	
                <input type="reset" name="limpar" value="Limpar">
                <br>

            </fieldset>
        </form>
        <br>
        <hr>
    </div>
</body>

    <footer id="rodape">
        <p>(21)989585186
            Facebook/twiter
        </p>

    </footer>
</html>

<script>
    $(document).ready(function () {
        $(".denuncie").hide();
        $(".form1").hide();
        $(".form2").hide();
        $(".form3").hide();
        $(".form4").hide();
        $(".form5").hide();

        $("a.menu").click(function() {
            $(".interface").hide();
            $(".denuncie").hide();
            $(".form1").hide();
            $(".form2").hide();
            $(".form3").hide();
            $(".form4").hide();
            $(".form5").hide();

            $('#' + $(this).attr("for")).show();
        })
    });
</script>