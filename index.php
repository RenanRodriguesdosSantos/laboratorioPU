<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Projeto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    </head>
    <body>

<?php
include_once("conexao.php");

if(isset($_GET['erro']))
{
		if($_GET['erro'] == 'senha'){ // se for erro de login e senha
			echo "<div class='alert alert-danger'>Login ou senha incorretos!</div><hr>";
		}
}

?>
    
    <img src="main.png" class='rounded mx-auto d-block' alt="Logo" height="300px" width="600px">

    <div class="container-sm">
        <h3>Login</h3>
        <form action="logar.php" method="POST">
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="user" class="form-control">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="Acessar">
        </form>

    </div>

    </body>
</html>

