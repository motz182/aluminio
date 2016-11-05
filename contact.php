<?php
    $name = $_POST[name];
    $email =$_POST[email];
    $phone =$_POST[phone];
    $message =$_POST[message];

    $for =  "manu@orionaluminios.com";
    $subject = "Mensaje - Contacto www.orionaluminios.com";
    $content = "
    Nombre: ".$name."
    
    E-mail: ".$email."
    
    Teléfono: ".$phone."
    
    Mensaje: ".$message."
    ";

    mail($for, $subject, utf8_decode($content));

    header("location:index.html");
?>