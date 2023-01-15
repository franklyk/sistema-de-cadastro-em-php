<?php
session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

       // print_r('Email: ' . $email);
       // print_r('<br><br>');
       // print_r('Senha: ' . $senha);
       // print_r('<br><br>');

       $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";

       $result = $conexao ->query($sql);

     //  print_r($sql );
     //   print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            //print_r('Não existe!!');
            header('Location: login.php');
            

        }
        else{
            //print_r('Existe!!');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: sistema.php');
        }
    }
    else
    {   //Não acessa
        header('location: login.ph');
        echo "Não enviado!!";
    }
?>