<?php
//GET pega valore na URL
    include("conexao.php");

    if(isset($_GET["id"])){ //se existe esse parâmetro na URL
        $id = $_GET["id"]; //pega id da URL

        $deletar = "DELETE FROM dados WHERE id=:id";// QUERY SQL - DELETAR o ID ESPECÍFICO
        try{
            $resultadDelete = $conect -> prepare($deletar);
            $resultadDelete -> bindValue(":id",$id,PDO::PARAM_INT);
            $resultadDelete -> execute();

            $contarDelete = $resultadDelete -> rowCount();
            if($contarDelete > 0){
                header("Location: form.php");// redirecionamento de páginas
            }else{
                header("Location: form.php");
            }

        }catch(PDOExcepition $erro){
            echo "HOUVE UM ERRO NESSA BAGAÇA!". $erro -> getMessage();
        }

    }else{
        header("Location: form.php");
    }
?>