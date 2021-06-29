<?php
    try{
        DEFINE("SERVIDOR","localhost");
        DEFINE("BANCO","agenda");
        DEFINE("USUARIO","root");
        DEFINE("SENHA","");

        $conect = new PDO("mysql:host=".SERVIDOR.";dbname=".BANCO,USUARIO,SENHA);
        $conect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOEexption $erro ){
        echo "HOUVE UM ERRO NO CODIGO". $erro -> getMessage();
    }
?>