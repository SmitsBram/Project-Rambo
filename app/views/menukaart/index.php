<?php

$tags = [
    '<link rel="stylesheet" href="/css/menukaart.css">',
];
$data = [
    'tags' => $tags,
    'nav' => false,
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

    <div class="hallo">
        <p class="prijstekst">(4st/4pcs) (8st/8pcs)</p>
        <div class="prijs-4-8">

            <div class="prijs-4">
                <p>
                    12,00<br>
                    13,00<br>
                    09,50<br>
                    14,50</p><br>
            </div>
            <div class="prijs-8">
                <p>
                    23,00<br>
                    25,00<br>
                    18,50<br>
                    28,00</p>
            </div>
        </div>
    </div>
</div><br>


</div>
<br>

<?php $this->part('footer', []); ?>