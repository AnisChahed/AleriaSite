<?php
$to = "contact@tunisianwebagency.com";
$subject = $_POST['subject'];
$message=$_POST['msg'];
$nom=$_POST['name'];
$email=$_POST['email'];
$contenu="Le nom :".$nom." Email :".$email."Le sujet : ".$subject." Messageeeee :".$message.".";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
mail($to, $subject, $contenu, $headers);
header("Location: index.php");
?>