const toggle = document.getElementById('navbar-toggle');
    const menu = document.getElementById('navbar-menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });

    function comingSoon() {
        alert("Coming Soon!");
    }