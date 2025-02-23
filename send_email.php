<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získání dat z formuláře
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Nastavení e-mailové adresy příjemce
    $to = "antonycz@seznam.cz"; // Nahraď svou e-mailovou adresou

    // Předmět e-mailu
    $subject = "Nová zpráva od $name";

    // Tělo e-mailu
    $body = "Jméno: $name\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Zpráva:\n$message";

    // Hlavičky e-mailu
    $headers = "From: $email";

    // Odeslání e-mailu
    if (mail($to, $subject, $body, $headers)) {
        echo "Zpráva byla úspěšně odeslána.";
    } else {
        echo "Odeslání zprávy selhalo.";
    }
}
?>