<?php
  
  /*$todo = $_GET['name'];
  $j = $_GET['i'];*/
  $email_to = $_GET['email'];
  $email_from = "gabrielmonteiro.g10@gmail.com";
  $email_subject = "Your To-Do List";
  $email_body = "Todo: $todo.\n";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-to: $email_to \r\n";
  $content = "aaaaaa";
  /*for( $i = 0; $i<j; $i++ ) {
            $todo = $_POST['name' .i];
            $content = $content . $todo;
         }
         */
  if(mail($email_to,$email_subject,$content,$headers)){
     echo("Email successfully sent to $email_to...");
  }
  else {
      echo("Email sending failed...");
   }
  header("Location: index.html");
       
?>