<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/register.css"> 
    <title>Rocambolesque ® - Registreren</title>
</head>
<body>
    <div class="ga-terug-container">
        <a href="../login/index">← Ga terug</a>
    </div>

    <div class="login-container">
        <h2>Registeren</h2>
        <form action="../register/index" method="post" onsubmit="return validateForm()">
            <input type="text" name="firstname" placeholder="Voornaam" required="required" />
            <input type="text" name="infix" placeholder="Tussenvoegsel" />
            <input type="text" name="lastname" placeholder="Achternaam" required="required" />
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required="required" />
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Herhaal Wachtwoord" required="required" />
            <span id="error_message" style="color: red;"></span>
            <button type="submit" class="btn btn-primary btn-block btn-large">Registeren</button>
        </form>
    </div>

    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const error_message = document.getElementById('error_message');
            const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,12}$/;

            if (password !== confirmPassword) {
                error_message.textContent = "Wachtwoorden komen niet overeen.";
                return false;
            } else if (!password.match(passwordRegex)) {
                error_message.textContent = "Wachtwoord moet minimaal 8 tekens, maximaal 12 tekens, minimaal 1 symbool en 1 getal bevatten.";
                return false;
            } else {
                error_message.textContent = "";
                return true;
            }
        }
    </script>
</body>
</html>
