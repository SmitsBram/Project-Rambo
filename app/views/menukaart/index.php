<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/public/css/paginas/menukaart.css">

    <title>Rocambolesque ® - Menu</title>
</head>

<body>

    <div class="svg-top">
        <div class="svg-left">
            <svg width="636" height="301" viewBox="0 0 636 301" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="18.0837" y="300.752" width="258" height="619" transform="rotate(-94.0193 18.0837 300.752)" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_386_57" transform="scale(0.00387597 0.00161551)" />
                    </pattern>
                    <image id="image0_386_57" width="258" height="619" xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
        </div>
        <div class="svg-right">
            <svg width="386" height="370" viewBox="0 0 386 370" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="432.717" width="246" height="453" transform="rotate(72.7895 432.717 0)" fill="url(#pattern0)" />
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_386_55" transform="scale(0.00406504 0.00220751)" />
                    </pattern>
                    <image id="image0_386_55" width="246" height="453" xlink:href="data:image/png;base64,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" />
                </defs>
            </svg>
        </div>
    </div>

    <div class="head">
        <a id="menuLink" href="menu">← Ga Terug</a>
        <h1 id="title">Menu</h1>
    </div>
    <div class="container_chefbites">
        <h2 id="title">Chef Bites</h2>
        <p id="desc-nl">Minimaal 2 personen (prijs per persoon)</p>
        <p id="desc-eng">Minimum of 2 persons (price per person)</p>

        <table class="table_chefbites">
            <tr>
                <td><span class="colored">Roca</span>&nbsp;4 Gangen</td>
                <br>
                <td id="prijs"><?php //$data['fullMenus']['prijs']; ?></td>
            </tr>
            <tr>
                <td><span class="colored">Roca</span>&nbsp;6 Gangen</td>
                <br>
                <td id="prijs"><?php //$_SESSION['price']; ?></td>
            </tr>
            <tr>
                <td><span class="colored">Roca</span>&nbsp;8 Gangen</td>
                <br>
                <td id="prijs"><?php //$_SESSION['price']; ?></td>
            </tr>
        </table>

        <table class="table_gerechten">
            <?php foreach ($data['fullMenus'] as $gerecht) : ?>
                <tr>
                    <td id="name"><?= $gerecht->gerecht_name ?></td><td></td>
                </tr>
                <tr>
                    <td id="nl"><?= $gerecht->gerecht_beschNL ?></td><td id="prijs"><?= $gerecht->gerecht_prijs; ?></td>
                </tr>
                <tr id="last">
                    <td id="eng"><?= $gerecht->gerecht_beschEN ?></td><td></td>
                </tr>
            <?php endforeach ?>

            <!-- <?php foreach ($data['fullMenus'] as $gerecht) : ?>
                <tr>
                    <td><?= $gerecht->gerecht_beschNL ?></td>
                </tr>
            <?php endforeach ?>

            <?php foreach ($data['fullMenus'] as $gerecht) : ?>
                <tr>
                    <td><?= $gerecht->gerecht_beschEN ?></td>
                </tr>
            <?php endforeach ?>

            <?php foreach ($data['fullMenus'] as $gerecht) : ?>
                <tr>
                    <td><?= $gerecht->gerecht_prijs  ?></td>
                </tr>
            <?php endforeach ?> -->
        </table>
    </div>

    <!-- Check if user is logged in as authLevel 1 or authLevel 5 -->
    <?php if (isset($_SESSION['authLevel'])) : ?>
        <?php $authLevel = $_SESSION['authLevel']; ?>

        <!-- User Menu Kaart -->
        <!-- <?php if ($authLevel == 1) : ?>
            <div class="user_menu_kaart">
                <h2>Dinerkaart</h2>
                <table>
                    <tr>
                        <td>
                            <p><?php $data['fullMenus']['gerecht_name'] ?></p>
                        </td>
                        <br>
                        <td>
                        <p><?php $data['fullMenus']['gerecht_beschNL'] ?></p>
                        <p><?php $data['fullMenus']['gerecht_beschEN'] ?></p>
                        </td>
                        <br>
                        <td>
                        <p><?php $data['fullMenus']['desknl'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php $_SESSION['gerecht'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['descNL'] ?></p>
                            <p><?php $_SESSION['descENG'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['price'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php $_SESSION['gerecht'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['descNL'] ?></p>
                            <p><?php $_SESSION['descENG'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['price'] ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><?php $_SESSION['gerecht'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['descNL'] ?></p>
                            <p><?php $_SESSION['descENG'] ?></p>
                        </td>
                        <br>
                        <td>
                            <p><?php $_SESSION['price'] ?></p>
                        </td>
                    </tr>
                </table>
            </div> -->

            <!-- Admin Menu Kaart -->
        <?php elseif ($authLevel == 5) : ?>
            <div class="admin_menu_kaart">
                <h2>Dinerkaart</h2>
                <!-- form -->
                <form action="/menukaart" method="POST">
                    <table>
                        <tr>
                            <td><input type="text" name="gerecht" placeholder="Gerecht"></td>
                            <br>
                            <td>
                                <input type="text" name="descNL" placeholder="Beschrijving NL">
                                <input type="text" name="descENG" placeholder="Beschrijving ENG">
                            </td>
                            <br>
                            <td><input type="text" name="prijs" placeholder="Prijs"></td>
                        </tr>
                        <!-- <tr>
                        <td><input type="text" name="gerecht" placeholder="Gerecht"></td>
                        <br>
                        <td>
                            <input type="text" name="descNL" placeholder="Beschrijving NL">
                            <input type="text" name="descENG" placeholder="Beschrijving ENG">
                        </td>
                        <br>
                        <td><input type="text" name="prijs" placeholder="Prijs"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="gerecht" placeholder="Gerecht"></td>
                        <br>
                        <td>
                            <input type="text" name="descNL" placeholder="Beschrijving NL">
                            <input type="text" name="descENG" placeholder="Beschrijving ENG">
                        </td>
                        <br>
                        <td><input type="text" name="prijs" placeholder="Prijs"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="gerecht" placeholder="Gerecht"></td>
                        <br>
                        <td>
                            <input type="text" name="descNL" placeholder="Beschrijving NL">
                            <input type="text" name="descENG" placeholder="Beschrijving ENG">
                        </td>
                        <br>
                        <td><input type="text" name="prijs" placeholder="Prijs"></td>
                    </tr> -->
                    </table>
                    <button type="submit" name="opslaan">Opslaan</button>
                    <button type="submit" name="verwijderen">Verwijderen</button>
                </form>
            </div>

        <?php endif; ?>
    <?php endif; ?>

    <!--
<div class="container_dinerkaart">
    <h2 id="title">Dinerkaart</h2>
    <div class="dinerkaart">
        <div class="dinerkaart_item">
            <tr>
                <td class="etenTitel"><?php $_SESSION['etenTitel'] ?></td>
                <br>
                <td class="descNL"><?php $_SESSION['descNL'] ?></td>
                <br>
                <td class="descENG"><?php $_SESSION['descENG'] ?></td>
                <br>
                <td class="prijs"><?php $_SESSION['prijs'] ?></td>
            </tr>
        </div>
    </div>
</div>
<!-- spatie in html -->


    <!--

<a href="">Ga Terug</a>

<h1 class="menu-titel">MENU</h1><br>
<br><br>
<br><br>

<div>

    <div class="CHEFS-BITES">
    <h2>CHEFS BITES</h2>
    <p>Minimaal 2 personen (prijs per persoon)</p> 
    <p class="minimum">Minimum of 2 persons (price per person)</p> 
    </div>
    <br>
     <br>

        <div class="roca-container">
           <div class="roca">
            Roca 4 Gangen<br>
            Roca 6 Gangen<br>
            Roca 8 Gangen<br>
          </div>

            <div class="roca-prijs">
                20,50<br>
                25,50<br>
                30,50<br>
            </div>
        </div>

        <br><br>

                <div class="diner-kaart">
                    <h2>DINER KAART</h2>
                    <div>
                    <p>Red Dragon Maki <br>
                        King crab en pittige tonijn <br>
                        King crab and spicy tuna</p></div><br>

                        <p>Unagi Maki<br> 
                            Paling, komkommer en avocado<br>
                            Eel, cucumber and avocado</p><br>

                            <p>Carpaccio Maki <br>
                                Dungesneden entrecôte en truffelsalsa <br>
                                Thin sliced sirloin and truffle salsa</p><br>

                                <p>Wagyu Maki<br>
                                    Geflambeerde wagyu beef A5<br>
                                    Flambéed wagyu beef A5</p><br>
                </div>


                    <table>
                        
                        <p>(4st/4pcs)</p>              

                           <p>12,00</p>
                           <p> 13,00</p>
                           <p> 09,50</p>
                           <p>14,50</p>
                    </table>

                                                           <table>
                                                        <p>(8st/8pcs)</p>

                                                            <p>23,00</p>
                                                            <p>25,00</p>
                                                            <p>18,50</p>
                                                            <p>28,00</p>
                                                            </table>
</body>
</html> -->