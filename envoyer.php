<?php
// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Construction du corps du message
$body = "Nom : $name\n\n";
$body .= "Email : $email\n\n";
$body .= "Message : $message\n\n";

// Envoi du message par email
$to = 'nguyen_david2003@outlook.fr';
$subject = 'Nouveau message de contact';
$headers = "From: $name <$email>\r\nReply-To: $email\r\n";
mail($to, $subject, $body, $headers);

// Redirection vers la page de confirmation
header('Location: index.html');
?>
