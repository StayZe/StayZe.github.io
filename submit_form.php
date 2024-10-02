<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Envoi d'email (exemple simple)
    $to = "mandra.antoine@gmail.com";
    $subject = "Nouveau message de contact";
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message.";
    }
}
?>
