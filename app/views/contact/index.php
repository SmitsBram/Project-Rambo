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
                        <span>Reestraat 8  1016DN Amsterdam</span>
                        <span>Australiëlaan 12345 EC  - Amsterdam, Nederland</span>
                </div>
            </div>
            <!--  Formulier -->
            <div class="contact">
                <form id="form">
                    <div class="contacted">
                        <p>Bedankt voor uw bericht! <br> We nemen zo snel mogelijk contact met u op.</p>
                    </div>
                    <div class="field">
                        <label>Naam</label>
                        <input type="text" name="name" id="name" placeholder="Voor & achternaam">
                    </div>
                    <div class="field">
                        <label>Onderwerp</label>
                        <input type="text" name="subject" id="subject" placeholder="Onderwerp van uw bericht!">
                    </div>
                    <div class="field">
                        <label for="message">Bericht</label>
                        <input type="text" name="message" id="message" placeholder="Uw bericht hier...">
                    </div>
                    <div class="field">
                        <label for="from_name">E-mail</label>
                        <input type="text" name="from_name" id="from_name" placeholder="Uw mail adress hier">
                    </div>

                    <input type="submit" id="button" value="Verstuur" ></input>
                </form>
                <!--  EmailJS -->
                <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                <script type="text/javascript">
                emailjs.init('DOsZoy0O4o-FOi1gl')
                </script>
            </div>
        </div>
        <script src="public/js/contact.js"></script>