<?php

    $con = mysqli_connect('localhost:3306', 'root', 'Guilherme15', 'loja');

    $resultado = mysqli_query($con, "SELECT * FROM carrinho JOIN produtos ON carrinho.idcarrinho = produtos.id_produtos");

    $dados = array();

    while($registro = mysqli_fetch_assoc($resultado)){
        array_push($dados, $registro);
    }

    $json = json_encode($dados);
    echo $json;

?>