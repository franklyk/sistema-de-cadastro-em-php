<?php
    include_once('config.php');

    if(isset($_POST['update']))
    
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha', telefone='$telefone', genero='$genero', nascimento='$nascimento', cidade='$cidade', estado='$estado',endereco='$endereco' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }
    else{
        echo "Nao atualizou";
    }

    header('Location: sistema.php');


?>