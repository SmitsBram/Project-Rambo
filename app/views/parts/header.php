<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Geniet van Momenten van Gastronomisch Genot bij Rocambolesque | Ontdek Heerlijke Gerechten, Bekroonde Wijnen en Onvergetelijk Dineren.">
    <link rel="stylesheet" href="/css/header.css">
    <!-- <link rel="stylesheet" href="/css/menukaart.css"> -->
    <link rel="stylesheet" href="/css/footer.css">
    <!-- <link rel="stylesheet" href="/public/css/index.css"> -->

    <?php
        foreach($data['tags'] as $tag) {
            echo $tag;
        }

    ?>
    <title>Rocambolesque ®</title>
</head>

<body>
    <?php 
        if($data['tags'] == true) {
            echo "
            
            
            <header class='main-head'>
            <nav>
            <div class='img'>
            <img src='/public/IMG/Logo/Rocambolesque-logo-DEF.png' alt='logo' id='logo'>
            </div>
            <ul>
            <li><a href='Homepage'>Home</a></li>
            <li><a href='Menu'>Menu</a></li>
            <li><a href='geschiedenis'>Geschiedenis</a></li>
            <li><a href='contact'>Contact</a></li>
            </ul>
            
            <div class='btn'>
            <button><a href='login'>LOGIN</a></button>
            </div>
            </nav>
            </header>";
        }
            ?>