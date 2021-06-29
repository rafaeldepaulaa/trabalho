<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css">

    <title>Fenix Education</title>
    <link rel="shortcut icon" href="img/logo.png">
</head>
<body>

<header class="menu">
        <div class="div2">
            <ul class="ul1">
                <img class="img" src="img/logo.png">
                <div class ="div3">
                    <form class="form2" method="POST">
                        <input class="pesquisa" type="text" name="pesquisa" id="pesquisa" placeholder="Nome do aluno..." required="">
                        <button name="botaoPesquisa" class="botao2" type="submit" ><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <a class="a1" href="#sobre"><h2>Sobre nós</h2></a>
                <a class="a2" href="#contato"><h2>Contato</h2></a>
            </ul>
        </div>
    </header> 
    <table>
    <?php
        include("conexao.php");
        if(isset($_POST["botaoPesquisa"])){
        $inputPesquisa = $_POST["pesquisa"];
        $pesquisa = "SELECT * FROM dados WHERE UPPER(nome) LIKE '%$inputPesquisa%'";

        try{
            $resultadoPesquisa = $conect -> prepare($pesquisa);
            $resultadoPesquisa -> execute();
                 
             $conferir = $resultadoPesquisa -> rowCount();
             if($conferir > 0){
                echo "<tr class='linha'>
                <td>Aluno</td>
                <td>Turma</td>
                <td>N°</td>

                <td>POR</td>
                <td>ESP</td>
                <td>ING</td>
                <td>ED FI</td>
                <td>LIT</td>
                <td>GEO</td>
                <td>HIS</td>
                <td>SOC</td>
                <td>FIL</td>
                <td>FIS</td>       
                <td>BIO</td>
                <td>QUI</td>
                <td>MAT</td>
                <td>AÇÕES</td>
                
    </tr>";
                
             while($mostrarPesquisa = $resultadoPesquisa -> FETCH(PDO::FETCH_OBJ)){
    ?>
    <tr>
        <td><?php echo $mostrarPesquisa -> nome;?></td>
        <td><?php echo $mostrarPesquisa -> turma;?></td>
        <td><?php echo $mostrarPesquisa -> numero;?></td>
        <td><?php echo $mostrarPesquisa -> media1;?></td>
        <td><?php echo $mostrarPesquisa -> media2;?></td>
        <td><?php echo $mostrarPesquisa -> media3;?></td>
        <td><?php echo $mostrarPesquisa -> media4;?></td>
        <td><?php echo $mostrarPesquisa -> media5;?></td>
        <td><?php echo $mostrarPesquisa -> media6;?></td>
        <td><?php echo $mostrarPesquisa -> media7;?></td>
        <td><?php echo $mostrarPesquisa -> media8;?></td>
        <td><?php echo $mostrarPesquisa -> media9;?></td>
        <td><?php echo $mostrarPesquisa -> media10;?></td>
        <td><?php echo $mostrarPesquisa -> media11;?></td>
        <td><?php echo $mostrarPesquisa -> media12;?></td>
        <td><?php echo $mostrarPesquisa -> media13;?></td>
        <td class="acoes">
        
        <a class="delete" href="deletar.php?id=<?php echo $mostrarPesquisa -> id;?>" class="deletar" 
            onclick="return confirm('Tem certeza que deseja apagar este cadastro?')"><i class="fas fa-user-times"></i></a>
            <a class="edit" href="edicao.php?id=<?php echo $mostrarPesquisa -> id;?>" class="editar"><i class="fas fa-user-edit"></i></a>

        </td>
    </tr>
    
    <?php
    
    }
}
    }catch(PDOException $error){
       echo "ERRO NO CÓDIGO" . $error -> getMessage();
         }
        }
    ?>
     </table>

<h1 class="h1media">Fenix</h1>
    <form class="formmedia" method="POST"> 
        <h3 class="hmedia">Dados do aluno</h3>
        <input class="inputmedia" type="text" placeholder ="Digite seu nome completo..." name ="nome" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua turma..." name ="turma" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite seu numero da chamada..." name ="numero" required =""><br>

        <h3 class= "h3media">LÍNGUA PORTUGUESA</h3> 
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="portugues1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="portugues2" required =""><br>
        
        <h3 class= "h3media">ESPANHOL</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="espanhol1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="espanhol2" required =""><br>

        <h3 class= "h3media">INGLES</h3>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="ingles1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="ingles2" required =""><br>

        <h3 class= "h3media">EDUCAÇÃO FISICA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="edfisica1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="edfisica2" required =""><br>
       
        <h3 class= "h3media">LITERATURA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="literatura1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="literatura2" required =""><br>
    
        <h3 class= "h3media">GEOGRAFIA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="geografia1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="geografia2" required =""><br>
    
        <h3 class= "h3media">HISTÓRIA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="historia1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="historia2" required =""><br>

        <h3 class= "h3media">SOCIOLOGIA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="sociologia1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="sociologia2" required =""><br>

        <h3 class= "h3media">FILOSOFIA</h3>   
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="filosofia1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="filosofia2" required =""><br>

        <h3 class= "h3media">FÍSICA</h3>   
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="fisica1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="fisica2" required =""><br>

        <h3 class= "h3media">BIOLOGIA</h3>    
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="biologia1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="biologia2" required =""><br>

        <h3 class= "h3media">QUÍMICA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="quimica1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="quimica2" required =""><br>

        <h3 class= "h3media">MATEMÁTICA</h3>  
        <input class="inputmedia" type="text" placeholder = "Digite sua nota parcial..." name ="matematica1" required =""><br>
        <input class="inputmedia" type="text" placeholder = "Digite sua nota global..." name ="matematica2" required =""><br>
        <button class="botaomedia" type="submit" name="btn"> ENVIAR</button>
         
    </form>

    <?php
        
            if(isset($_POST["btn"])){
                $nome = $_POST["nome"];
                $turma = $_POST["turma"];
                $numero = $_POST["numero"];

                $portugues1 = $_POST["portugues1"];
                $portugues1 = str_replace(",",".", $portugues1);
                $portugues2 = $_POST["portugues2"];
                $portugues2 = str_replace(",",".", $portugues2);
                $media1 = ($portugues1 + $portugues2) /2;

                $espanhol1 = $_POST["espanhol1"];
                $espanhol1 = str_replace(",",".", $espanhol1);
                $espanhol2 = $_POST["espanhol2"];
                $espanhol2 = str_replace(",",".", $espanhol2);
                $media2 = ($espanhol1 + $espanhol2) /2;

                $ingles1 = $_POST["ingles1"];
                $ingles1 = str_replace(",",".", $ingles1);
                $ingles2 = $_POST["ingles2"];
                $ingles2 = str_replace(",",".", $ingles2);
                $media3 = ($ingles1+ $ingles2) /2;

                $edfisica1 = $_POST["edfisica1"];
                $edfisica1 = str_replace(",",".", $edfisica1);
                $edfisica2 = $_POST["edfisica2"];
                $edfisica2 = str_replace(",",".", $edfisica2);
                $media4 = ($edfisica1+ $edfisica2) /2;

                $literatura1 = $_POST["literatura1"];
                $literatura1 = str_replace(",",".", $literatura1);
                $literatura2 = $_POST["literatura2"];
                $literatura2 = str_replace(",",".", $literatura2);
                $media5 = ($literatura1+ $literatura2) /2;

                $geografia1 = $_POST["geografia1"];
                $geografia1 = str_replace(",",".", $geografia1);
                $geografia2 = $_POST["geografia2"];
                $geografia2 = str_replace(",",".", $geografia2);
                $media6 = ($geografia1+ $geografia2) /2;

                $historia1 = $_POST["historia1"];
                $historia1 =  str_replace(",",".", $historia1);
                $historia2 = $_POST["historia2"];
                $historia2 =  str_replace(",",".", $historia2);
                $media7 = ($historia1+ $historia2) /2;

                $sociologia1 = $_POST["sociologia1"];
                $sociologia1 = str_replace(",",".", $sociologia1);
                $sociologia2 = $_POST["sociologia2"];
                $sociologia2 = str_replace(",",".", $sociologia2);
                $media8 = ($sociologia1+ $sociologia2) /2;

                $filosofia1 = $_POST["filosofia1"];
                $filosofia1 = str_replace(",",".", $filosofia1);
                $filosofia2 = $_POST["filosofia2"];
                $filosofia2 = str_replace(",",".", $filosofia2);
                $media9 = ($filosofia1+ $filosofia2) /2;

                $fisica1 = $_POST["fisica1"];
                $fisica1 = str_replace(",",".", $fisica1);
                $fisica2 = $_POST["fisica2"];
                $fisica2 = str_replace(",",".", $fisica2);
                $media10 = ($fisica1+ $fisica2) /2;

                $biologia1 = $_POST["biologia1"];
                $biologia1 = str_replace(",",".", $biologia1);
                $biologia2 = $_POST["biologia2"];
                $biologia2 = str_replace(",",".", $biologia2);
                $media11 = ($biologia1+ $biologia2) /2;

                $quimica1 = $_POST["quimica1"];
                $quimica1 = str_replace(",",".", $quimica1);
                $quimica2 = $_POST["quimica2"];
                $quimica2 = str_replace(",",".", $quimica2);
                $media12 = ($quimica1+ $quimica2) /2;

                $matematica1 = $_POST["matematica1"];
                $matematica1 = str_replace(",",".", $matematica1);
                $matematica2 = $_POST["matematica2"];
                $matematica2 = str_replace(",",".", $matematica2);
                $media13 = ($matematica1+ $matematica2) /2;
              
                $inserir =
                 "INSERT INTO  dados(nome, turma,numero,portugues1,portugues2,media1,
                 espanhol1,espanhol2,media2,ingles1,ingles2,media3,edfisica1,edfisica2,media4,
                 literatura1,literatura2,media5,geografia1,geografia2,media6,historia1,historia2,media7,
                 sociologia1,sociologia2,media8,filosofia1,filosofia2,media9,fisica1,fisica2,media10,
                 biologia1,biologia2,media11,quimica1,quimica2,media12,matematica1,matematica2,media13) 
                  VALUES(:nome,:turma,:numero,:portugues1,:portugues2,:media1,:espanhol1,:espanhol2,:media2,
                 :ingles1,:ingles2,:media3,:edfisica1,:edfisica2,:media4,:literatura1,:literatura2,:media5,
                 :geografia1,:geografia2,:media6,:historia1,:historia2,:media7,:sociologia1,:sociologia2,:media8,
                 :filosofia1,:filosofia2,:media9,:fisica1,:fisica2,:media10,:biologia1,:biologia2,:media11,
                 :quimica1,:quimica2,:media12,:matematica1,:matematica2,:media13)"; 

                try{
                    $resultado = $conect -> prepare($inserir);
                    $resultado -> bindParam(":nome",$nome, PDO::PARAM_STR);
                    $resultado -> bindParam(":turma",$turma, PDO::PARAM_STR);
                    $resultado -> bindParam(":numero",$numero, PDO::PARAM_STR);

                    $resultado -> bindParam(":portugues1",$portugues1, PDO::PARAM_STR);
                    $resultado -> bindParam(":portugues2",$portugues2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media1",$media1, PDO::PARAM_STR); 

                    $resultado -> bindParam(":espanhol1",$espanhol1, PDO::PARAM_STR);
                    $resultado -> bindParam(":espanhol2",$espanhol2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media2",$media2, PDO::PARAM_STR);

                    $resultado -> bindParam(":ingles1",$ingles1, PDO::PARAM_STR);
                    $resultado -> bindParam(":ingles2",$ingles2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media3",$media3, PDO::PARAM_STR);

                    $resultado -> bindParam(":edfisica1",$edfisica1, PDO::PARAM_STR);
                    $resultado -> bindParam(":edfisica2",$edfisica2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media4",$media4, PDO::PARAM_STR);
                    
                    $resultado -> bindParam(":literatura1",$literatura1, PDO::PARAM_STR);
                    $resultado -> bindParam(":literatura2",$literatura2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media5",$media5, PDO::PARAM_STR);

                    $resultado -> bindParam(":geografia1",$geografia1, PDO::PARAM_STR);
                    $resultado -> bindParam(":geografia2",$geografia2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media6",$media6, PDO::PARAM_STR);

                    $resultado -> bindParam(":historia1",$historia1, PDO::PARAM_STR);
                    $resultado -> bindParam(":historia2",$historia2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media7",$media7, PDO::PARAM_STR);

                    $resultado -> bindParam(":sociologia1",$sociologia1, PDO::PARAM_STR);
                    $resultado -> bindParam(":sociologia2",$sociologia2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media8",$media8, PDO::PARAM_STR);

                    $resultado -> bindParam(":filosofia1",$filosofia1, PDO::PARAM_STR);
                    $resultado -> bindParam(":filosofia2",$filosofia2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media9",$media9, PDO::PARAM_STR);

                    $resultado -> bindParam(":fisica1",$fisica1, PDO::PARAM_STR);
                    $resultado -> bindParam(":fisica2",$fisica2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media10",$media10, PDO::PARAM_STR);

                    $resultado -> bindParam(":biologia1",$biologia1, PDO::PARAM_STR);
                    $resultado -> bindParam(":biologia2",$biologia2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media11",$media11, PDO::PARAM_STR);

                    $resultado -> bindParam(":quimica1",$quimica1, PDO::PARAM_STR);
                    $resultado -> bindParam(":quimica2",$quimica2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media12",$media12, PDO::PARAM_STR);

                    $resultado -> bindParam(":matematica1",$matematica1, PDO::PARAM_STR);
                    $resultado -> bindParam(":matematica2",$matematica2, PDO::PARAM_STR);
                    $resultado -> bindParam(":media13",$media13, PDO::PARAM_STR);
                    $resultado -> execute();

                    $contar = $resultado ->rowCount();
                        if($contar > 0){
                            echo ' <p class="suc"> OS dados foram enviadas com sucesso</p>';
                        }else{
                            echo ' <p class="fra"> OS dados não foram enviadas</p>';
                        }
                }catch(PDOxception $erro){
                    echo "houve um erro no codigo: " , $erro -> getMessage();

                }
            }
     ?>

  <table>
        <tr class="linha">
                    <td>Aluno</td>
                    <td>Turma</td>
                    <td>N°</td>

                    <td>POR</td>
                    <td>ESP</td>
                    <td>ING</td>
                    <td>ED FI</td>
                    <td>LIT</td>
                    <td>GEO</td>
                    <td>HIS</td>
                    <td>SOC</td>
                    <td>FIL</td>
                    <td>FIS</td>       
                    <td>BIO</td>
                    <td>QUI</td>
                    <td>MAT</td>
                    <td>AÇÕES</td>
        </tr>

        <?php
            $selecionar = "SELECT * FROM dados ORDER BY id DESC";

            try{
                $resultadoSelect = $conect -> prepare($selecionar);
                $resultadoSelect -> execute();
                
                $numero = 1;
                $contarSelect = $resultadoSelect -> rowCount();
                if($contarSelect > 0){
                    while($mostrar = $resultadoSelect -> FETCH(PDO::FETCH_OBJ)){
                        
        ?>
        <tr>

        <td><?php echo $mostrar -> nome;?></td>
        <td><?php echo $mostrar -> turma;?></td>
        <td><?php echo $mostrar -> numero;?></td>
        <td><?php echo $mostrar -> media1;?></td>
        <td><?php echo $mostrar -> media2;?></td>
        <td><?php echo $mostrar -> media3;?></td>
        <td><?php echo $mostrar -> media4;?></td>
        <td><?php echo $mostrar -> media5;?></td>
        <td><?php echo $mostrar -> media6;?></td>
        <td><?php echo $mostrar -> media7;?></td>
        <td><?php echo $mostrar -> media8;?></td>
        <td><?php echo $mostrar -> media9;?></td>
        <td><?php echo $mostrar -> media10;?></td>
        <td><?php echo $mostrar -> media11;?></td>
        <td><?php echo $mostrar -> media12;?></td>
        <td><?php echo $mostrar -> media13;?></td>
        
       <td class="acoes">
        
        <a class="delete" href="deletar.php?id=<?php echo $mostrar -> id;?>" class="deletar" 
            onclick="return confirm('Tem certeza que deseja apagar este cadastro?')"><i class="fas fa-user-times"></i></a>
            <a class="edit" href="edicao.php?id=<?php echo $mostrar -> id;?>" class="editar"><i class="fas fa-user-edit"></i></a>

        </td>
     </tr>
        <?php
                }
            }
                }catch(PDOException $erro){
                echo "Corrija o erro: " . $erro -> getMessage();

            }
    ?>    

    </table>

    <footer class="rodape">
        <h3 id="sobre" class="h3">Sobre nós</h3>
        <p class="p1">Há 10 anos temos o prazer de transmitir conteúdo que informe e forme opinião,
         para assim forma cidadãos de bem. Inovação, responsabilidade, ética, imparcialidade, diversidade
          e consciência inclusiva representam a nossa filosofia.</p>
        <div class="icone">
            <h4 id="contato" class="h4">Contato</h4>
            <a href="#" target="blank"><i class="fab fa-facebook-square f"></i></a>
            <a href="#" target="blank"><i class="fab fa-instagram-square i"></i></a>
            <a href="#" target="blank"><i class="fab fa-whatsapp-square w"></i></a>
        </div>
            <div class="direitos">
                <p class="p2">© 2012-2021, Fenix.com, Inc. ou suas afiliadas.</p>
            </div>
    </footer>

    <script src="all.js"></script>
</body>
</html>