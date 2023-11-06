<?php

$tags = [
    '<link rel="stylesheet" href="/css/login.css">',
];
$data = [
    'tags' => $tags,
    'nav' => false,
];
$this->part('header', $data);

?>
<div class="ga-terug-container">
    <a href="../">← Ga terug</a>
</div>

<div class="login-container">
    <h2>Inloggen</h2>
    <form action="/Login/login" method="post">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Inloggen">
</form>
    <h5>Nog geen account?</h5>
    <div class="login-help">
        <a href="../register/index.php">Registeren</a> • <a href="../vergeten/index.php">Wachtwoord vergeten</a>
    </div>
</div>