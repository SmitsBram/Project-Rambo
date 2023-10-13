function Go() {
    // Nav Item 
    const navitem = document.querySelectorAll('.nav_item');

    navitem.forEach((item) => {
        item.addEventListener('click', (e) => {
            // Bij klikken, user naar de juiste pagina sturen.
            const menu = "/menu";
            const reserveren = "reserveren";
            const contact = "contact";

            const menuPage = document.getElementById('menu');
            const reserverenPage = document.getElementById('reserveren');
            const contactPage = document.getElementById('contact');

            menuPage.addEventListener('click', () => {
                window.location.href = menu;
            });

            reserverenPage.addEventListener('click', () => {
                window.location.href = reserveren;
            });

            contactPage.addEventListener('click', () => {
                window.location.href = contact;
            });
        });
    });
};
