<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            height: 100vh;
            width: 100vw;
        }
        .login{
            border: 1px solid black;
            height: 40%;
            position: absolute;
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 30%;
        }
        input{
            margin: 5px auto;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <a href="home.php">voltar</a>
    <form action="testelogin.php" method="post" >
        <div class="login">
            <h1>Login</h1>
            <input type="text" name="email" placeholder="E-mail">
            <br><br>
            <input type="password" name="senha"
            placeholder="Senha">
        
            <br><br>
            <input type="submit" name="submit" value="Entrar">
            <input type="reset" name="submit"  value="Limpar">
        </div>
    </form>
</body>
</html>