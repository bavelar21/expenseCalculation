<?php
include('../db/conectaBanco.php');    

if(isset($_POST['email']) || isset($_POST['senha'])){
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
    if (strlen($_POST['email']) == 0) {
        echo  "Preencha seu email";
    }elseif (strlen($_POST['senha']) == 0){
      echo  "Preencha sua senha";
    }else {
        $email = $mysqli->real_escape_string($_POST['email']); 
        $senha = crypto($mysqli->real_escape_string($_POST['senha']));
        $sql_code = "SELECT  id, email, senha  FROM usuarios WHERE email = '$email'
         AND senha = '$senha'";
    TODO: //NÃO ESQUECER DE COLOCAR COMO PARAMETRO O "expiracao_senha"
    FIXME:// expiração senha linha
        $sql_query = $mysqli->query($sql_code) 
         or die("falha na execução do SQL"
        . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

        //     if(!isset($_SESSION)){
        //       session_start();
        //   }
          
        session_start(); 
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        

        header("location: http://localhost/expenseCalculation/src/pages/cadastroMateriaPrima.php");
           

       } else{
          echo "Falha ao logar, email ou senha incorretos";
          }
      }
  }


            
?>