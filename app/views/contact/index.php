<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/globals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body id="contact">
        <!-- Banner dat bovenaan de pagina komt te staan-->
        <div class="banner">
            <img src="../public/IMG/eten.png">
        </div>
        <!--  Pagina Titel -->
        <div class="container">
            <h2 class="title">Contact Ons</h2>
        </div>
        <!--  Informatie bar -->
        <div class="form">
            <div class="info">
                <h1 class="info_title">Info</h1>
                <p class="info_desc">Heeft u een specifieke vraag of wilt u meer informatie ontvangen? Vul dan het onderstaande contactformulier in. We zullen zo snel mogelijk contact met u opnemen.
                    <br>
                    <br>
                    Bij Rocambolesque streven we ernaar om u de best mogelijke service te bieden. We kijken uit naar uw bericht en hopen u binnenkort te mogen verwelkomen als een gewaardeerde klant of partner.
                    <br>
                    <br>
                    Bedankt voor uw interesse in Rocambolesque!
                </p>
                <div class="info_contact">
                    <i class="fa-solid fa-phone"></i>
                        <span>+1 800 123 4567</span>
                    <br>
                    <i class="fa-solid fa-location-arrow"></i>
                        <span>Australiëlaan 12345 EC  - Amsterdam, Nederland</span>
                </div>
            </div>
            <!--  Formulier -->
            <div class="contact">
                <label for="name">Naam</label><br>
                    <input required type="text" id="i" name="name" placeholder="Voor en achternaam"><br>
                    <label for="subject">Onderwerp</label><br>
                    <input required type="text" id="i" name="subject" placeholder="Onderwerp van uw bericht"><br>
                    <label for="message">Bericht</label><br>
                    <textarea required name="message" id="message" cols="30" rows="10" placeholder="Uw bericht hier..."></textarea><br>
                    <label for="email">E-mail</label><br>
                    <input required type="email" id="i" name="email" placeholder="Uw mail adres"><br><br>
                    <input type="submit" value="Verstuur" id="submit" class="submit">
                </label>
            </div>
        </div>
        <!--
        <div class="form">
            <div class="info">
                <h1 class="title">Info</h1>
                <p class="desc">At Nreal, we aim to make mixed reality available and accessible to everyone.We strive to realize the full potential of mixed reality by empowering developers to create ground-breaking applications that can ultimately propel a new era of entertainment, productivity and more.</p>
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <span>+1 800 123 4567</span>
                    <br>
                    <i class="fa-solid fa-envelope"></i>
                    <span>info@nreal.com</span>
                    <br>
                    <i class="fa-solid fa-location-dot"></i>
                    <span id="location">Zhongguancun, the Silicon Valley of Beijing.</span>
                </div>
            </div>
            <form action="" method="post">
                <?php
                if (array_key_exists("created", $data)) {
                    echo "<h1>Bericht is verstuurd!</h1>";
                }
                ?>
                <label for="name">Name</label><br>
                <input required type="text" id="i" name="name" placeholder="Your first and last name."><br>
                <label for="subject">Subject</label><br>
                <input required type="text" id="i" name="subject" placeholder="Subject of your message."><br>
                <label for="message">Message</label><br>
                <textarea required name="message" id="message" cols="30" rows="10" placeholder="Type here your message..."></textarea><br>
                <label for="email">Keep in touch with Nreal!</label><br>
                <input required type="email" id="i" name="email" placeholder="Your e-mail"><br><br>
                <input type="checkbox" id="check" name="checkbox"><span>Please notify me for news updates.</span>
                <input type="submit" value="Send Message" id="submit">
            </form>
        </div>
        </div>-->
    </body>
</html>