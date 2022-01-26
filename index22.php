<?php
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha']) ){
    if(strlen($_POST['user']) == 0){
        echo"Preencha seu Usuario";
    }else if(strlen($_POST['senha']) == 0){
        echo"Prencha sua Senha";
    }else{


        $user = $mysqli->real_escape_string($_POST['user']); 
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM ingreso WHERE user = '$user' AND senha='$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("falha na exucao deo codigo sql: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario= $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $usuario['id'];
            $_SESSION['nome']= $usuario['nome'];
            header("location: Address where the authorized person will enter");

        }else{
            echo "falha ao logar! Usuario ou Senha Incorretos";
        }


    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <form action="" method="POST">
              <div class="mb-3 row">
                  <label for="user" class="col-sm-1-12 col-form-label">user</label>
                  <div class="col-sm-1-12">
                      <input type="text" class="form-control" name="user" id="user" placeholder="">
                  </div>
                  <div class="mb-3 row">
                  <label for="senha" class="col-sm-1-12 col-form-label">senha:</label>
                  <div class="col-sm-1-12">
                      <input type="password" class="form-control" name="senha" id="senha" placeholder="">
                  </div>
             
              <div class="mb-3 row">
                  <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Entrar</button>
                  </div>
              </div>
          </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>