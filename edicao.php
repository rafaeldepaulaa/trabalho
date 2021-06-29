<?php
    include("conexao.php");
    if(!isset($_GET["id"])){
        header("Location: form.php");
        exit;
    }else{
        $id = filter_input(INPUT_GET,"id",FILTER_DEFAULT);
        $selecionar = "SELECT * FROM dados WHERE id=:id";

        try{
            $resultado = $conect -> prepare($selecionar);
            $resultado -> bindParam(":id",$id,PDO::PARAM_INT);
            $resultado -> execute();

            $contar = $resultado -> rowCount();

            if($contar > 0){
                while($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){
                    $nomeRetorno = $mostrar -> nome;
                    $turmaRetorno = $mostrar -> turma;
                    $numeroRetorno = $mostrar -> numero;
                    $portugues1Retorno = $mostrar -> portugues1;
                    $portugues2Retorno = $mostrar -> portugues2;
                    $media1Retorno = $mostrar -> media1;
                    $espanhol1Retorno = $mostrar -> espanhol1;
                    $espanhol2Retorno = $mostrar -> espanhol2;
                    $media2Retorno = $mostrar -> media2;
                    $ingles1Retorno = $mostrar -> ingles1;
                    $ingles2Retorno = $mostrar -> ingles2;
                    $media3Retorno = $mostrar -> media3;
                    $edfisica1Retorno = $mostrar -> edfisica1;
                    $edfisica2Retorno = $mostrar -> edfisica2;
                    $media4Retorno = $mostrar -> media4;
                    $literatura1Retorno = $mostrar -> literatura1;
                    $literatura2Retorno = $mostrar -> literatura2;
                    $media5Retorno = $mostrar -> media5;
                    $geografia1Retorno = $mostrar -> geografia1;
                    $geografia2Retorno = $mostrar -> geografia2;
                    $media6Retorno = $mostrar -> media6;
                    $historia1Retorno = $mostrar -> historia1;
                    $historia2Retorno = $mostrar -> historia2;
                    $media7Retorno = $mostrar -> media7;
                    $sociologia1Retorno = $mostrar -> sociologia1;
                    $sociologia2Retorno = $mostrar -> sociologia2;
                    $media8Retorno = $mostrar -> media8;
                    $filosofia1Retorno = $mostrar -> filosofia1;
                    $filosofia2Retorno = $mostrar -> filosofia2;
                    $media9Retorno = $mostrar -> media9;
                    $fisica1Retorno = $mostrar -> fisica1;
                    $fisica2Retorno = $mostrar -> fisica2;
                    $media10Retorno = $mostrar -> media10;
                    $biologia1Retorno = $mostrar -> biologia1;
                    $biologia2Retorno = $mostrar -> biologia2;
                    $media11Retorno = $mostrar -> media11;
                    $quimica1Retorno = $mostrar -> quimica1;
                    $quimica2Retorno = $mostrar -> quimica2;
                    $media12Retorno = $mostrar -> media12;
                    $matematica1Retorno = $mostrar -> matematica1;
                    $matematica2Retorno = $mostrar -> matematica2;
                    $media13Retorno = $mostrar -> media13;
                }
            }else{
                exit;
            }
        }catch(PDOException $erro){
            echo "ERRO AO EDITAR: ". $erro -> getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/edicao.css">
    <title>Fenix Education</title>
    <link class="linktitulo" rel="shortcut icon" href="img/logo.png">
</head>
<body>

<header class="menu">
        <div class="div2">
            <ul class="ul1">
                <img class="img" src="img/logo.png">
                <a class="a1" href="#sobre"><h2>Sobre nós</h2></a>
                <a class="a2" href="#contato"><h2>Contato</h2></a>
            </ul>
        </div>
    </header> 
    <?php
        if(isset($_POST["botaoPesquisa"])){
        $inputPesquisa = $_POST["pesquisa"];
        $pesquisa = 'SELECT * FROM media.dados WHERE UPPER(nome) LIKE "%$inputPesquisa%"';

        try{
            $resultadoPesquisa = $conect -> prepare($pesquisa);
            $resultadoPesquisa -> execute();
                 
             $conferir = $resultadoPesquisa -> rowCount();
             if($conferir > 0){
             while($mostrarPesquisa = $resultadoPesquisa -> FETCH(PDO::FETCH_OBJ)){
    ?>
    <tr>
        <td><?php echo $mostrarPesquisa -> id;?></td>
        <td><?php echo $mostrarPesquisa -> nome;?></td>
        <td><?php echo $mostrarPesquisa -> nota1;?></td>
        <td><?php echo $mostrarPesquisa -> nota2;?></td>
        <td><?php echo $mostrarPesquisa -> media;?></td>
    </tr>
    
    <?php
    
    }
}
    }catch(PDOException $error){
       echo "ERRO NO CÓDIGO" . $error -> getMessage();
         }
        }
    ?>

    <h1 class="h1menu">Fenix</h1>
    <form class="formmenu" method="post"> 

        <h3 class="hmenu">Dados do aluno</h3>
        <input class="inputmenu" type="text" placeholder ="Digite seu nome" name ="nome" required ="" 
        value="<?php echo $nomeRetorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua turma" name ="turma" required ="" 
        value="<?php echo $turmaRetorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite seu numero da chamada" name ="numero" 
        required ="" value="<?php echo $numeroRetorno;?>"><br>

        <h3 class="h3menu">LÍNGUA PORTUGUESA</h3> 
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="portugues1" 
        required ="" value="<?php echo $portugues1Retorno;?>"><br>

        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="portugues2" 
        required ="" value="<?php echo $portugues2Retorno;?>"><br>
        
        <h3 class="h3menu">ESPANHOL</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="espanhol1" 
        required ="" value="<?php echo $espanhol1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="espanhol2" 
        required ="" value="<?php echo $espanhol2Retorno;?>"><br>

        <h3 class="h3menu">INGLES</h3>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="ingles1" 
        required ="" value="<?php echo $ingles1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="ingles2" 
        required ="" value="<?php echo $ingles2Retorno;?>"><br>

        <h3 class="h3menu">EDUCAÇÃO FISICA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="edfisica1" 
        required ="" value="<?php echo $edfisica1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="edfisica2" 
        required ="" value="<?php echo $edfisica2Retorno;?>"><br>
       
        <h3 class="h3menu">LITERATURA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="literatura1" 
        required ="" value="<?php echo $literatura1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="literatura2" 
        required ="" value="<?php echo $literatura2Retorno;?>"><br>
    
        <h3 class="h3menu">GEOGRAFIA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="geografia1" 
        required ="" value="<?php echo $geografia1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="geografia2" 
        required ="" value="<?php echo $geografia2Retorno;?>"><br>
    
        <h3 class="h3menu">HISTÓRIA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="historia1" 
        required ="" value="<?php echo $historia1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="historia2" 
        required ="" value="<?php echo $historia2Retorno;?>"><br>

        <h3 class="h3menu">SOCIOLOGIA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="sociologia1" 
        required ="" value="<?php echo $sociologia1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="sociologia2" 
        required ="" value="<?php echo $sociologia2Retorno;?>"><br>

        <h3 class="h3menu">FILOSOFIA</h3>   
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="filosofia1" 
        required ="" value="<?php echo $filosofia1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="filosofia2" 
        required ="" value="<?php echo $filosofia2Retorno;?>"><br>

        <h3 class="h3menu">FÍSICA</h3>   
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="fisica1" 
        required ="" value="<?php echo $fisica1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="fisica2" 
        required ="" value="<?php echo $fisica2Retorno;?>"><br>

        <h3 class="h3menu">BIOLOGIA</h3>    
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="biologia1" 
        required ="" value="<?php echo $biologia1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="biologia2" 
        required ="" value="<?php echo $biologia2Retorno;?>"><br>

        <h3 class="h3menu">QUÍMICA</h3>  
        <input class="inputmenu" type="text" placeholder="Digite sua nota parcial" name="quimica1"
         required="" value="<?php echo $quimica1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder="Digite sua nota global" name="quimica2"
          required="" value="<?php echo $quimica2Retorno;?>"><br>

        <h3 class="h3menu">MATEMÁTICA</h3>  
        <input class="inputmenu" type="text" placeholder = "Digite sua nota parcial" name ="matematica1" 
        required ="" value="<?php echo $matematica1Retorno;?>"><br>
        <input class="inputmenu" type="text" placeholder = "Digite sua nota global" name ="matematica2" 
        required ="" value="<?php echo $matematica2Retorno;?>"><br>

        <button class="botaomenu" type="submit" name="btn-update">ALTERAR </button>
         
    </form>

    <?php
        if(isset($_POST["btn-update"])){
            $nome = $_POST["nome"];
            $turma = $_POST["turma"];
            $numero = $_POST["numero"];
            $portugues1 = $_POST["portugues1"];
            $portugues2 = $_POST["portugues2"];
            $media1 = ($portugues1 + $portugues2) / 2;
            $espanhol1 = $_POST["espanhol1"];
            $espanhol2 = $_POST["espanhol2"];
            $media2 = ($espanhol1 + $espanhol2) / 2;
            $ingles1 = $_POST["ingles1"];
            $ingles2 = $_POST["ingles2"];
            $media3 = ($ingles1 + $ingles2) / 2;
            $edfisica1 = $_POST["edfisica1"];
            $edfisica2 = $_POST["edfisica2"];
            $media4 = ($edfisica1 + $edfisica2) / 2;
            $literatura1 = $_POST["literatura1"];
            $literatura2 = $_POST["literatura2"];
            $media5 = ($literatura1 + $literatura2) / 2;
            $geografia1 = $_POST["geografia1"];
            $geografia2 = $_POST["geografia2"];
            $media6 = ($geografia1 + $geografia2) / 2;
            $historia1 = $_POST["historia1"];
            $historia2 = $_POST["historia2"];
            $media7 = ($historia1 + $historia2) / 2;
            $sociologia1 = $_POST["sociologia1"];
            $sociologia2 = $_POST["sociologia2"];
            $media8 = ($sociologia1 + $sociologia2) / 2;
            $filosofia1 = $_POST["filosofia1"];
            $filosofia2 = $_POST["filosofia2"];
            $media9 = ($filosofia1 + $filosofia2) / 2;
            $fisica1 = $_POST["fisica1"];
            $fisica2 = $_POST["fisica2"];
            $media10 = ($fisica1 + $fisica2) / 2;
            $biologia1 = $_POST["biologia1"];
            $biologia2 = $_POST["biologia2"];
            $media11 = ($biologia1 + $biologia2) / 2;
            $quimica1 = $_POST["quimica1"];
            $quimica2 = $_POST["quimica2"];
            $media12 = ($quimica1 + $quimica2) / 2;
            $matematica1 = $_POST["matematica1"];
            $matematica2 = $_POST["matematica2"];
            $media13 = ($matematica1 + $matematica2) / 2;

            $editar ="UPDATE dados SET nome=:nome, turma=:turma, numero=:numero, portugues1=:portugues1, portugues2=:portugues2, media1=:media1,
            espanhol1=:espanhol1, espanhol2=:espanhol2, media2=:media2, ingles1=:ingles1, ingles2=:ingles2, media3=:media3,
            edfisica1=:edfisica1, edfisica2=:edfisica2, media4=:media4, literatura1=:literatura1, literatura2=:literatura2, media5=:media5,
            geografia1=:geografia1, geografia2=:geografia2, media6=:media6, historia1=:historia1, historia2=:historia2, media7=:media7,
            sociologia1=:sociologia1, sociologia2=:sociologia2, media8=:media8, filosofia1=:filosofia1, filosofia2=:filosofia2, media9=:media9,
            fisica1=:fisica1, fisica2=:fisica2, media10=:media10, biologia1=:biologia1, biologia2=:biologia2, media11=:media11, quimica1=:quimica1,
            quimica2=:quimica2, media12=:media12, matematica1=:matematica1, matematica2=:matematica2, media13=:media13 WHERE id=:id";

            try{
                $resultado = $conect -> prepare($editar);
                $resultado -> bindParam(":nome",$nome,PDO::PARAM_STR);
                $resultado -> bindParam(":turma",$turma,PDO::PARAM_STR);
                $resultado -> bindParam(":numero",$numero,PDO::PARAM_STR);
                $resultado -> bindParam(":portugues1",$portugues1,PDO::PARAM_STR);
                $resultado -> bindParam(":portugues2",$portugues2,PDO::PARAM_STR);
                $resultado -> bindParam(":media1",$media1,PDO::PARAM_STR);
                $resultado -> bindParam(":espanhol1",$espanhol1,PDO::PARAM_STR);
                $resultado -> bindParam(":espanhol2",$espanhol2,PDO::PARAM_STR);
                $resultado -> bindParam(":media2",$media2,PDO::PARAM_STR);
                $resultado -> bindParam(":ingles1",$ingles1,PDO::PARAM_STR);
                $resultado -> bindParam(":ingles2",$ingles2,PDO::PARAM_STR);
                $resultado -> bindParam(":media3",$media3,PDO::PARAM_STR);
                $resultado -> bindParam(":edfisica1",$edfisica1,PDO::PARAM_STR);
                $resultado -> bindParam(":edfisica2",$edfisica2,PDO::PARAM_STR);
                $resultado -> bindParam(":media4",$media4,PDO::PARAM_STR);
                $resultado -> bindParam(":literatura1",$literatura1,PDO::PARAM_STR);
                $resultado -> bindParam(":literatura2",$literatura2,PDO::PARAM_STR);
                $resultado -> bindParam(":media5",$media5,PDO::PARAM_STR);
                $resultado -> bindParam(":geografia1",$geografia1,PDO::PARAM_STR);
                $resultado -> bindParam(":geografia2",$geografia2,PDO::PARAM_STR);
                $resultado -> bindParam(":media6",$media6,PDO::PARAM_STR);
                $resultado -> bindParam(":historia1",$historia1,PDO::PARAM_STR);
                $resultado -> bindParam(":historia2",$historia2,PDO::PARAM_STR);
                $resultado -> bindParam(":media7",$media7,PDO::PARAM_STR);
                $resultado -> bindParam(":sociologia1",$sociologia1,PDO::PARAM_STR);
                $resultado -> bindParam(":sociologia2",$sociologia2,PDO::PARAM_STR);
                $resultado -> bindParam(":media8",$media8,PDO::PARAM_STR);
                $resultado -> bindParam(":filosofia1",$filosofia1,PDO::PARAM_STR);
                $resultado -> bindParam(":filosofia2",$filosofia2,PDO::PARAM_STR);
                $resultado -> bindParam(":media9",$media9,PDO::PARAM_STR);
                $resultado -> bindParam(":fisica1",$fisica1,PDO::PARAM_STR);
                $resultado -> bindParam(":fisica2",$fisica2,PDO::PARAM_STR);
                $resultado -> bindParam(":media10",$media10,PDO::PARAM_STR);
                $resultado -> bindParam(":biologia1",$biologia1,PDO::PARAM_STR);
                $resultado -> bindParam(":biologia2",$biologia2,PDO::PARAM_STR);
                $resultado -> bindParam(":media11",$media11,PDO::PARAM_STR);
                $resultado -> bindParam(":quimica1",$quimica1,PDO::PARAM_STR);
                $resultado -> bindParam(":quimica2",$quimica2,PDO::PARAM_STR);
                $resultado -> bindParam(":media12",$media12,PDO::PARAM_STR);
                $resultado -> bindParam(":matematica1",$matematica1,PDO::PARAM_STR);
                $resultado -> bindParam(":matematica2",$matematica2,PDO::PARAM_STR);
                $resultado -> bindParam(":media13",$media13,PDO::PARAM_STR);
                $resultado -> bindParam(":id",$id,PDO::PARAM_INT);
                $resultado -> execute();

                $contar = $resultado -> rowCount();

                if($contar > 0){
                   echo '<script>window.location.href="http://localhost/rafael/trabalho/form.php"</script>';
                }else{
                   
                }
            }catch(PDOException $erro){
                echo "ERRO DE UPTADE: ". $erro -> getMessage();
            }
        }
    ?>
<!--
    <div><h2>Dados</h2></div>
    <section class="dados">
        <h2>Nome: <?php echo $nomeRetorno;?></h2>
        <h2>Turma: <?php echo $turmaRetorno;?></h2>
        <h2>Número: <?php echo $numeroRetorno;?></h2>
        <div class="div-dados">
            <p>Português1:<?php echo "<strong>$portugues1Retorno</strong>";?></p>
            <p>Português2:<?php echo "<strong>$portugues2Retorno<strong>";?></p>
            <p>Média1:<?php echo "<strong>$media1Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Espanhol1:<?php echo "<strong>$espanhol1Retorno</strong>";?></p>
            <p>Espanhol2:<?php echo "<strong>$espanhol2Retorno<strong>";?></p>
            <p>Média2:<?php echo "<strong>$media2Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Inglês1:<?php echo "<strong>$ingles1Retorno</strong>";?></p>
            <p>Inglês2:<?php echo "<strong>$ingles2Retorno<strong>";?></p>
            <p>Média3:<?php echo "<strong>$media3Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Edfísica1:<?php echo "<strong>$edfisica1Retorno</strong>";?></p>
            <p>Edfísica2:<?php echo "<strong>$edfisica2Retorno<strong>";?></p>
            <p>Média4:<?php echo "<strong>$media4Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Literatura1:<?php echo "<strong>$literatura1Retorno</strong>";?></p>
            <p>Literatura2:<?php echo "<strong>$literatura2Retorno<strong>";?></p>
            <p>Média5:<?php echo "<strong>$media5Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Geografia1:<?php echo "<strong>$geografia1Retorno</strong>";?></p>
            <p>Geografia2:<?php echo "<strong>$geografia2Retorno<strong>";?></p>
            <p>Média6:<?php echo "<strong>$media6Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>História1:<?php echo "<strong>$historia1Retorno</strong>";?></p>
            <p>História2:<?php echo "<strong>$historia2Retorno<strong>";?></p>
            <p>Média7:<?php echo "<strong>$media7Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Sociologia1:<?php echo "<strong>$sociologia1Retorno</strong>";?></p>
            <p>Sociologia2:<?php echo "<strong>$sociologia2Retorno<strong>";?></p>
            <p>Média8:<?php echo "<strong>$media8Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Filosofia1:<?php echo "<strong>$filosofia1Retorno</strong>";?></p>
            <p>Filosofia2:<?php echo "<strong>$filosofia2Retorno<strong>";?></p>
            <p>Média9:<?php echo "<strong>$media9Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Física1:<?php echo "<strong>$fisica1Retorno</strong>";?></p>
            <p>Física2:<?php echo "<strong>$fisica2Retorno<strong>";?></p>
            <p>Média10:<?php echo "<strong>$media10Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Biologia1:<?php echo "<strong>$biologia1Retorno</strong>";?></p>
            <p>Biologia2:<?php echo "<strong>$biologia2Retorno<strong>";?></p>
            <p>Média11:<?php echo "<strong>$media11Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Química1:<?php echo "<strong>$quimica1Retorno</strong>";?></p>
            <p>Química2:<?php echo "<strong>$quimica2Retorno<strong>";?></p>
            <p>Média12:<?php echo "<strong>$media12Retorno</strong>";?></p>
        </div>
        <div class="div-dados">
            <p>Matemática1:<?php echo "<strong>$matematica1Retorno</strong>";?></p>
            <p>Matemática2:<?php echo "<strong>$matematica2Retorno<strong>";?></p>
            <p>Média13:<?php echo "<strong>$media13Retorno</strong>";?></p>
        </div>
        
    </section> 
    -->

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