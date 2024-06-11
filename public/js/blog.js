document.addEventListener('DOMContentLoaded', function() {
    const select = document.querySelector('.select');
    const caret = select.querySelector('.caret');
    const menu = document.querySelector('.menu');

    // Function to toggle menu visibility
    function toggleMenu() {
        menu.classList.toggle('menu-open');
        caret.classList.toggle('caret-rotate');
    }

    // Event listener for clicking on the select container
    select.addEventListener('click', function() {
        toggleMenu();
    });

    // Event listener for clicking outside the menu to close it
    document.addEventListener('click', function(event) {
        const isClickInside = select.contains(event.target) || menu.contains(event.target);
        if (!isClickInside) {
            menu.classList.remove('menu-open');
            caret.classList.remove('caret-rotate');
        }
    });

    // Event listener for hovering over menu options
    const menuItems = menu.querySelectorAll('li');
    menuItems.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            this.classList.add('active');
        });
        item.addEventListener('mouseleave', function() {
            this.classList.remove('active');
        });
    });
});

