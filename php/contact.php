<?php

$email=filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
$objet=filter_var($_POST['objet'], FILTER_SANITIZE_SPECIAL_CHARS);
$contenu=filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS);

$message="<h1>Vous avez un nouveau message de la part de $email :</h1>";
$message.="<p><em>$contenu</em></p>";

$headers = "MIME-Version: 1.0". "\r\n" .
'Content-type: text/html; charset="utf-8"'. "\r\n" .
"From: $mail". "\r\n" .
"X-Mailer: PHP/" . phpversion();

echo $headers;
if(mail('lucas.perrin5@univ-rouen.fr',$objet,$message,$headers) && mail('lucasperrin239@gmail.com',$objet,$message,$headers)){
    header('Location: https://perrilu5.tpweb.univ-rouen.fr/portfolio/html/3confirmationenvoimessage.html');
}

else{
    echo "<p>Un erreur s'est produite lors de l'envoi, veuillez recommencer !</p>";
}

?>