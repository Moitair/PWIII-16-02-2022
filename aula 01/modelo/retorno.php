<?php

    $NOME = $_REQUEST['NOME'];
    $ANIMAL = $_REQUEST['ANIMAL'];

if(empty($NOME)){
    $dados - array (
        "tipo" => "error",
        "mensagem" => "Existe(m) campo(s) a ser(em) preechido(s)"
    );
    
}else{

    switch($ANIMAL){
        case '1' : $dados = array(
            "tipo" => "cachorro.jpg",
            "mensagem" => "Seja bem-vindo, ".$NOME.", sabemos que seu animal favorito é cachorro"
        );
        break;

        case '2' : $dados = array(
            "tipo" => "gato.jpg",
            "mensagem" => "Seja bem-vindo, ".$NOME.", sabemos que seu animal favorito é gato"
        );
        break;

        case '3' : $dados = array(
            "tipo" => "peixe.jpg",
            "mensagem" => "Seja bem-vindo, ".$NOME.", sabemos que seu animal favorito é peixe"
        );
        break;
    }
}

echo json_encode($dados);