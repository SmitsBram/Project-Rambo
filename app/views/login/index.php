<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/login.css">
    <title>Inloggen</title>
</head>
<body>
    <div class="ga-terug-container">
    <a href="../">← Ga terug</a>
    </div>

    <div class="login-container">
        <h2>Inloggen</h2>
        <form>
            <input type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required="required" />
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large"> <a href= "../">Inloggen</a> </button>
        </form>
        <h5>Nog geen account?</h5>
        <div class="login-help">
            <a href="../register/index.php">Registeren</a> • <a href="../vergeten/index.php">Wachtwoord vergeten</a>
        </div>
    </div>
    
</body>
</html>