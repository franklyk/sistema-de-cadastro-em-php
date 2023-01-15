<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            height: 100vh;
            width: 100vw;
        }

        .home{
            border: 1px solid black;
            height: 30%;
            width: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%,-50%);
        }
        button{
            font-size: 1.1em;
            height: 40px;
            width: 100px;
        }
        
    </style>
    <title>Home</title>
</head>
<body>

    <div class="home">
        <h1>Home</h1>
        <br>
        <button><a href="login.php">Login</a></button><br><br>
        <button><a href="cadastro.php">Cadastro</a></button>
    </div>
</body>
</html>