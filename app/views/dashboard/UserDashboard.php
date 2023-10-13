<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocambolesque ® - Dashboard</title>
    <link rel="stylesheet" href="../public/css/dashboards/UserDash.css">
    <link rel="stylesheet" href="public/css/globals.css">
</head>
<body>
    <section class="banner">
        <div class="banner_img">
            <img src="../public/IMG/dash.png" />
        </div>
    </section>
    <div class="container"></div>
    <div class="container_content">
        <h1 class="title">Welkom, <br> @user</h1>
        <div class="nav">
            <!-- First icon and next to it text-->

            <div class="nav_item" id="menu" onclick="Go()">
                <img src="../public/IMG/icons/more.png" />
                <p>Menu</p>
            </div>
            <div class="nav_item" id="reserveren" onclick="Go()">
                <img src="../public/IMG/icons/reservation.png" />
                <p>Reserveren</p>
            </div>
            <div class="nav_item" id="contact" onclick="Go()">
                <img src="../public/IMG/icons/chat.png" />
                <p>Contact</p>
            </div>
        </div>
        <div class="section">
            <div class="message_section">
                <h2>Berichten</h2>
                <hr>
                <div class="Incoming">
                    <p>Er zijn geen nieuwe berichten</p>
                </div>
            </div>
            <div class="reservering_section">
                <h2>Reserveringen</h2>
                <hr>
                <div class="Incoming">
                    <p>Er zijn geen nieuwe berichten</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/dashboard.js"></script>