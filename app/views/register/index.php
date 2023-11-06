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

        <?php if ($data['error']) : ?>
            <div><?= $data['error']; ?></div>
        <?php endif ?>
<!-- onsubmit="return validateForm -->
        <form action="/Register/register" method="post">
            <input type="email" name="email" placeholder="Email" required="required" />
            <input type="text" name="name" placeholder="Naam" required="required" />
            <input type="tel" id="number" name="number" pattern="^0[1-9][0-9]{8}$" placeholder="0623456789" required>
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required="required" />

            <span id="error_message" style="color: red;"></span><br>

            <button type="submit" class="btn btn-primary btn-block btn-large">Registeren</button>

        </form>
    </div>

    <script>
        function validateForm() {
            const password = document.getElementById('password').value;
            const error_message = document.getElementById('error_message');
            const passwordRegex = /^(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,99}$/;



            if (!password.match(passwordRegex)) {
                error_message.textContent = "Wachtwoord moet minimaal 8 tekens, 1 symbool & getal bevatten.";
                return false;
            } else {
                error_message.textContent = "";
                return true;
            }
        }
    </script>
</body>

</html>