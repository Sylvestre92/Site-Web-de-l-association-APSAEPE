<?php
    
if(isset($_POST['envoyer']))
    {
        $header = "MIME-Version: 1.0\r\n";
        $header.="From: 'APSAEPE'<silvestreatikako@gmail.com>"."\n";
        $header.="Content-Type: text/html; charset='utf-8'"."\n";
        $header.="Content-Transfer-Encoding: 8bit";
        
        $message = htmlspecialchars($_POST['message']);
    
    
        if(mail('apsaepe@gmail.com', 'Je vous contact', $message, $header)){
            echo "email envoyé avec succes";
        }
        else{
            echo "email non envoyé, veuillez réessayer!";
        }
    
    
    }
   

   
?>