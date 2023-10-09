// On click, go to the page:
/**
 * My classses:
 * 1. Menu
 * <div class="nav_item" id="menu" >
                <img src="../public/IMG/icons/more.png" />
                <p>Menu</p>
    </div>

    2. Reserveren
    <div class="nav_item" id="reserveren">
                <img src="../public/IMG/icons/reservation.png" />
                <p>Reserveren</p>
    </div>

    3. Contact
    <div class="nav_item" id="contact">
        <img src="../public/IMG/icons/contact.png" />
    <p>Contact</p>
 */

// 1. Menu
let menu = document.getElementById('menu');
menu.addEventListener('click', function(){
    window.location.href = '../app/views/menu/index.php';
});

// 2. Reserveren
let reserveren = document.getElementById('reserveren');
