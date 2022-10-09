<?php

   $connection = mysqli_connect('localhost','root','','gta5');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];

      $request = " insert into code_form(name, email, comment) values('$name','$email','$comment') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>