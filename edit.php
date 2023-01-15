<?php

    if(!empty($_GET['id']))
    {
        

        include_once('config.php');


        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
            $nome = $user_data['nome'];
            $senha = $user_data['email'];
            $email = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $nascimento = $user_data['nascimento'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
            }

        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
        header('Location: sistema.php') and print_r ("acesso negado!!");
        
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
    <a href="sistema.php">voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend>
                    <strong>Formulario</strong>
                </legend>
                    <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="inputuser" value="<?php echo $nome ?>" required>
                    <label for="nome">Nome Completo</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="inputuser" value="<?php echo $email ?>" required>
                    <label for="email">E-mail</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="password" name="senha" id="senha" class="inputuser" value="<?php echo $senha ?>" required>
                    <label for="nome">Senha</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="inputuser" value="<?php echo $telefone ?>" required>
                    <label for="telefone">Telefone</label>
                </div>
                <br>

                <div class="genero">
                    <p>Gênero</p>

                    <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($genero == 'feminino') ? 'checked' : '' ?> required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($genero == 'masculino') ? 'checked' : '' ?>  required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="lgbt" name="genero" value="lgbt" <?php echo ($genero == 'lgbt') ? 'checked' : '' ?>  required>
                    <label for="lgbt">LGBT</label>
                </div>
                <br>

                <label for="nascimento"><strong>Data de Nascimento</strong></label>
                <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento ?>" required>

                <br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="inputuser" value="<?php echo $cidade ?>" required>
                    <label for="cidade">Cidade</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="inputuser" value="<?php echo $estado ?>" required>
                    <label for="estado">Estado</label>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="inputuser" value="<?php echo $endereco ?>" required>
                    <label for="endereco">Endereço</label>
                </div>
                <br>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
                


            </fieldset>
        </form>

    </div>
</body>
</html>