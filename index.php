<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Fenix Education</title>
    <link rel="shortcut icon" href="img/logo.png">
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
        include("conexao.php");
        if(isset($_POST["botaoPesquisa"])){
        $inputPesquisa = $_POST["pesquisa"];
        $pesquisa = "SELECT * FROM media.dados WHERE UPPER(nome) LIKE '%$inputPesquisa%'";

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
     </table>
    <div class="divcarrocel">

        <div class="carrocel">
            <ul class="ulcarrocel">
                <li class="licarrocel">
                    <img class="imgcarrocel" src="img/img1.png" alt="">
                </li>
                <li class="licarrocel">
                    <img class="imgcarrocel" src="img/img2.png" alt="">
                </li>
                <li class="licarrocel">
                    <img class="imgcarrocel" src="img/img3.png" alt="">
                </li>
            </ul>
        </div>

        <div class="divtexto">
            <ul class="ultexto">
                <li class="litexto">
                    <p class="ptexto">Em um mundo em que as relações estão cada vez mais distantes,
                    o acolhimento é um ato revolucionário. Seja o motivo do sorriso de alguém.</p>
                </li>
                <li class="litexto">
                    <p class="ptexto">Deixe as suas esperanças, e não as seus medos, moldarem o seu futuro.</p>
                </li>
                <li class="litexto">
                    <p class="ptexto">Os professores sempre marcam as nossas vidas e nós nunca nos esquecemos deles.
                    Professores mereciam mais, tão mais. Não vamos deixá-los desistirem.</p>
                </li>
            </ul>
        </div>
        
    </div>

    <div class="inicio">    
        <form class="formcadastro" method="post"> 

            <h2 class="h2cadastro">CADASTRO</h2>
            <hr class="hrcadastro">

            <h3 class="h3mcadastro">NOME</h3>
            <input class="inputcadastro" type="text" placeholder ="Digite seu nome..." 
            name ="nome" required =""><br>

            <h3 class="h3mcadastro">SOBRENOME</h3>
            <input class="inputcadastro" type="text" placeholder = "Digite sua sobrenome..." 
            name ="sobrenome" required =""><br>
            
            <h3 class="h3mcadastro">DATA DE NASCIMENTO</h3>
            <input class="inputcadastro" type="date" placeholder = "Digite sua data de nascimento..." 
            name ="datadenascimento" required =""><br>
            
            <h3 class="h3mcadastro">EMAIL</h3>
            <input class="inputcadastro" type="email" placeholder = "Digite sua email..." 
            name ="email" required =""><br>
            
            <h3 class="h3mcadastro">SENHA</h3>
            <input class="inputcadastro" type="password" placeholder = "Digite sua senha..." 
            name ="senha" required =""><br>
            
            <button class="botaocadastro" type="submit" name="btn1"> ENVIAR</button>

            <?php

                if(isset($_POST["btn1"])){
                    $nome = $_POST["nome"];
                    $sobrenome = $_POST["sobrenome"];
                    $datadenascimento = $_POST["datadenascimento"];
                    $email = $_POST["email"];
                    $senha = base64_encode($_POST["senha"]);
                
                    $inserir = "INSERT INTO cadastro(nome,sobrenome,datadenascimento,email,senha)
                    VALUES(:nome,:sobrenome,:datadenascimento,:email,:senha)";

                    try{
                        $resultado = $conect -> prepare($inserir);
                        $resultado -> bindParam(":nome",$nome, PDO::PARAM_STR);
                        $resultado -> bindParam(":sobrenome",$sobrenome, PDO::PARAM_STR);
                        $resultado -> bindParam(":datadenascimento",$datadenascimento, PDO::PARAM_STR);
                        $resultado -> bindParam(":email",$email, PDO::PARAM_STR);
                        $resultado -> bindParam(":senha",$senha, PDO::PARAM_STR);
                        $resultado -> execute();

                        $contar = $resultado ->rowCount();
                        if($contar > 0){
                            echo '<p class="sucessocadastro">CADASTRO FEITO COM SUCESSO!!!</p>';
                        }else{
                            echo '<p class="fracassocadastro">SEUS DADOS NÃO FORAM ENVIADOS!</p>';
                        }
                    }catch(PDOxception $erro){
                    echo "houve um erro no codigo: " , $erro -> getMessage();
                    }
                }
            ?>
        </form>
    <form class="login" method="post">
         <h2 class="loginh2">LOGIN</h2>
         <label class="loginlabel" for="email">EMAIL</label>
         <input class="logininput" type="text" name="email" placeholder ="Digite seu email..." id="email"required = "">
 
         <label class="loginlabel" for="senha">SENHA</label>
         <input class="logininput" type="password" name="senha" placeholder ="Digite sua senha..." id="senha"required = "">
 
             <button class="loginbotao" type="submit" name="btn">ENVIAR</button>
 
         <?php
              if(isset($_POST["btn"])){
                 $email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
                 $senha= base64_encode(filter_input(INPUT_POST, "senha", FILTER_DEFAULT));
                 $select = "SELECT * FROM cadastro WHERE email=:email AND senha=:senha";
 
                 try{
                     $resultado = $conect -> prepare($select);
                     $resultado -> bindParam(":email", $email,PDO::PARAM_STR);
                     $resultado -> bindParam(":senha", $senha,PDO::PARAM_STR);
                     $resultado -> execute();
 
                     $contar = $resultado -> rowCount();
                     if($contar > 0){
                        $email = $_POST["email"];
                        $senha = $_POST["senha"];
                        $_SESSION["email"] = $email;
                        $_SESSION["senha"] = $senha;
                        echo '<p class="sucessologin">Login Feito com Sucesso! Você será redirecionado</p>';
                        echo '<script>window.location.href="http://localhost/rafael/trabalho/form.php"</script>';
                     }
                     else{
                         echo '<p class="fracassologin">Login Falhou! Email ou Senha incorreta</p>';
                     }
                     }catch(PDOException $erro){
                     echo "Houve um Erro" . $erro -> getMessage();
                 }
             }
             ?>
     </form>     
    </div>
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