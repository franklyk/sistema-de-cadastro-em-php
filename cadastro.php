<?php
    if(isset($_POST['submit']))
    {
        /*print_r('Nome: ' . $_POST['nome']); 
        print('<br>');
        print_r('Senha: ' . $_POST['senha']); 
        print('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print('<br>');
        print_r('Genero: ' . $_POST['genero']);
        print('<br>');
        print_r('Nascimento: ' . $_POST['nascimento']);
        print('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        print('<br>');*/
    
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $nascimento = $_POST['nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];


        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,genero, nascimento,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$genero','$nascimento','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            color: white;
            background: gray;
            height: 100vh;
            width: 100vw;
        }
        .box{
            width: 30%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
    <title>Cadastro</title>
</head>
<body>
    <a href="home.php">voltar</a>
    <div class="box">
        <form action="cadastro.php" method="post">
            <fieldset>
                <legend>
                    <strong>Formulario</strong>
                </legend>
                    <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="inputuser" required>
                    <label for="nome">Nome Completo</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="inputuser" required>
                    <label for="email">E-mail</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="inputuser" required>
                    <label for="nome">Senha</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="inputuser" required>
                    <label for="telefone">Telefone</label>
                </div>
                <br>

                <div class="genero">
                    <p>Gênero</p>

                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="lgbt" name="genero" value="lgbt" required>
                    <label for="lgbt">LGBT</label>
                </div>
                <br>

                <label for="nascimento"><strong>Data de Nascimento</strong></label>
                <input type="date" name="nascimento" id="nascimento" required>

                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="inputuser" required>
                    <label for="cidade">Cidade</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="inputuser" required>
                    <label for="estado">Estado</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="inputuser" required>
                    <label for="endereco">Endereço</label>
                </div>
                <br>

                <input type="submit" name="submit" id="submit" value="enviar">
                <input type="reset" value="limpar">


            </fieldset>
        </form>

    </div>
</body>
</html>