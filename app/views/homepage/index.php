<!-- <head>
    <link rel="stylesheet" href="/public/css/index.css">
    
</head> -->

<?php
$tags = [
    '<link rel="stylesheet" href="/public/css/index.css">',
];
$data = [
    'tags' => $tags,
];


$this->part('header', $data);

?>
<section class="banner">
    <h1>Verken Wereldse Smaken</h1>
    <img src="../public/IMG/background-homepage.png" alt="backgroundIMG">
    <div class="container"></div>

    <div class="buttons">
        <div class="menu">
            <a href="menu">Menu</a>
        </div>
        <div class="reserveren">
            <a href="reserveren">Reserveren</a>
        </div>
    </div>
    <div class="background-img">
        <img src="/public/IMG/background-homepage.png" alt="backgroundIMG">
    </div>
    <h1>Verken Wereldse Smaken</h1>
    <div class="btns">
        <button><a href="menu">Menu</a></button>
        <button><a href="reserveren">Reserveren</a></button>
    </div>
</section>