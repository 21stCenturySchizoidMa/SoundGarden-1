<?php
   include("conexao.php");
   
   $user =$_POST['user'];
   $email =$_POST['email'];
   $senha =md5($_POST['senha']);

   $sql = "INSERT INTO cadastroinfo (user, email, senha) 
               VALUES ('$user', '$email', '$senha')";

   if(mysqli_query($conn, $sql)){
      echo "usuario cadastrado com sucesso";
   }
   else{
      echo "deu errado maninho";
   }
   mysqli_close($conn);
?>