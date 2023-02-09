<?php
    include('../db/conectaBanco.php');
   //R5
    function crypto($value) {
      $real = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X","Y","Z","a","b","c","d","e","f","g","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9"];
  
      $fake = ["Z","Y","X","W","V","U","T","S","R","Q","P","O","N","M","L","K","J","I","H","G","F","E","D","C","B","A","z","y","x","w","v","u","t","s","r","q","p","o","n","m","l","k","j","i","h","g","f","e","d","c","b","a","9","8","7","6","5","4","3","2","1","0"];

      $ecryptedValue = array();
      
      $keys = str_split($value);
      
      foreach ($keys as $value) {
          $key = array_search($value, $real);
          array_push($ecryptedValue, $fake[$key]);
      }
      return implode($ecryptedValue);
    }

    //R3
    session_start();
    $id=$_SESSION['id'];


    if(!isset($_SESSION['id'])){
        header("location: http://localhost/expenseCalculation/src/pages/");
    }
    
    
    $senha = $_POST['senha'];
    $getUsuario = "SELECT email FROM usuarios WHERE id = $id"; 
    $queryUsuario = $mysqli->query($getUsuario);
    $usuario = $queryUsuario->fetch_assoc(); //Estou pegando somente a primeira linha com fetch_row

    $criptedPassword = crypto($senha); 

    $getLastPassword = "SELECT * FROM historico_senha WHERE usuario_id =  '$id' ORDER BY id DESC LIMIT 3"; //Ao inves de pegar pela data eu ordeno pelo ID na ordem decresente e limito para 3 resultados apenas.
    $rows = $mysqli->query($getLastPassword);
    $isPasswordUsed = false;
    while($row = $rows->fetch_assoc()) {
       if ($isPasswordUsed == true) {
        break;
       }
       if($row['senha'] == $criptedPassword){ //comparação da senhas salvas no banco
            echo 'Senha Já foi Cadastrada'.'   ';
            $isPasswordUsed = true;
       }
    }

    if ($isPasswordUsed == false) {
        $email = $usuario['email'];
        $data_criacao =  date("Y-m-d H:i:s");

        $updatepwd = "UPDATE usuarios SET senha = '$criptedPassword' WHERE email = '$email'";
        $mysqli->query($updatepwd);
       
        $insertHistorico = "INSERT INTO historico_senha (usuario_id, senha, data_criacao)
        VALUES ('$id', '$criptedPassword', '$data_criacao')";

        $mysqli->query($insertHistorico);
        // a sessao dura somente quando o navegador esta aberto
        session_destroy();//ele desloga o usuario "destroi usuario existe"
        header("location: http://localhost/expenseCalculation/src/pages/");
    }
?>