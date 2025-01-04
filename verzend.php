<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de gegevens van het formulier
    $naam = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $bericht = htmlspecialchars($_POST['message']);

    // E-mailinstellingen
    $to = "w93585840@gmail.com";
    $subject = "Nieuw contactformulier bericht van $naam";
    $body = "Naam: $naam\nE-mail: $email\n\nBericht:\n$bericht";
    $headers = "From: $email";

    // E-mail verzenden
    if (mail($to, $subject, $body, $headers)) {
        echo "Bericht succesvol verzonden.";
    } else {
        echo "Er is een fout opgetreden bij het verzenden van de e-mail.";
    }
} else {
    echo "Ongeldige verzoekmethode.";
}
?>
