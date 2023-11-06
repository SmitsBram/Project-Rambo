<?php

$tags = [
    '<link rel="stylesheet" href="/css/menukaart.css">',
];
$data = [
    'tags' => $tags,
    'nav' => true,
];
$this->part('header', $data);

?>
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
<table></table>
    <div class="diner-kaart">
        <h2>DINER KAART</h2>
        <div>
            <p>Red Dragon Maki <br>
                King crab en pittige tonijn <br>
                King crab and spicy tuna</p>
        </div><br>

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
    <div class="prijzen">
            <p id ="stuks">(4st/4pcs)</p>
            <p id="stuks">(8st/8pcs)</p>
            <div class="prijs-4">
                <p class="ps">12,00</p>
                <p class="ps">13,00</p>
                <p class="ps">9,50</p>
                <p class="ps">14,50</p>
            </div>
            <div class="prijs-8">
                <p class="ps">23,00</p>
                <p class="ps">25,00</p>
                <p class="ps">18,50</p>
                <p class="ps">28,00</p>
            </div>
    </div>

    <!--<div class="hallo">
        <p class="prijstekst-4">(4st/4pcs)</p>
        <p class="prijstekst-8">(8st/8pcs)</p>
        <div class="prijs-4-8">

            <div class="prijs-4">
                <p class="prijs-4-12">12,00<br></p>
                <p class="prijs-4-13">13,00<br></p>
                <p class="prijs-4-9">09,50<br></p>
                <p class="prijs-4-4">14,50<br></p>
            </div>
            <div class="prijs-8">
                <p class="">23,00<br></P>
                <p>25,00<br></p>
                <p> 18,50<br></p>
                <p>28,00<br></p>
            </div>
        </div>
    </div>-->
</div><br>


</div>
<br>

<?php $this->part('footer', []); ?>