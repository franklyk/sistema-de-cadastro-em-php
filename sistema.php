<?php
    session_start();
    include_once('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: login.php');
       
        
    }
    $logado = $_SESSION['email'];

    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        echo $data;
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or nome LIKE '%$data%' ORDER BY nome ASC";
    }
    else
    {   
        $sql = "SELECT * FROM usuarios ORDER BY id ASC";
    }


    

    $result = $conexao->query($sql);

    //print_r($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            text-align: center;
        }

        .btn-sair{
            background: red;
            border-radius:10px;
            height: 40px;
            width:70px;
            color: white;
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .btn-sair > a {
            color: white;
            font-size: 1.5em;
            text-decoration: none;
        }

        #control{
            width: 300px;
        }
        

        


    </style>
    <title>Sistema</title>
</head>
<body>
    <h1>Acessou o Sistema</h1>
    <br><br>
    <button class="btn-sair"><a href="sair.php">Sair</a></button>

    <div class="box-search">
        <input type="search" name="control" id="control">
        <button onclick="searchData()" >Pesquisar</button>
    </div>


    <div class="div-tabela">
        <table class="tabela">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Senha</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Genero</th>
                <th scope="col">Date de Nascimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col" colspan="2">.................</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";                   
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['genero']."</td>";
                        echo "<td>".$user_data['nascimento']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td><a href='edit.php?id=$user_data[id]'>Editar<a></td>";
                        echo "<td><a href='delete.php?id=$user_data[id]'>Excluir<a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        var search = document.getElementById('control');

        search.addEventListener("keydown", function(event){
            if(event.key === "Enter")
            {
                searchData();
            }
        });
        function searchData()
        {
            window.location = 'sistema.php?search='+ search.value;
        }
    </script>

</body>
</html>