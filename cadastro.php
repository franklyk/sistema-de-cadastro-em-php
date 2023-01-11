<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box{
            width: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastro.html" method="post">
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

                <input type="submit" value="enviar">
                <input type="reset" value="limpar">


            </fieldset>
        </form>

    </div>
</body>
</html>