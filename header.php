<header>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

    <div class="logo">
        <img src="img/logo.png" alt="Logo">
        <div class="logo-text">
            <span class="logo-top">РЕКЛАМНАЯ</span>
            <span class="logo-bottom">АГЕНЦИЯ</span>
        </div>
    </div>
    <button class="menu-btn">
    <span></span>
    <span></span>
    <span></span>
    </button>
    <div class="menu">
        <nav>
            <ul>
                <li><a href="#why-us">Почему мы?<span class="underline"></span></a></li>
                <li><a href="#work-with">С чем работаем?<span class="underline"></span></a></li>
                <li><a href="#cases">Кейсы<span class="underline"></span></a></li>
                <li><a href="#stages">Этапы<span class="underline"></span></a></li>
                <li><a href="#contacts">Контакты<span class="underline"></span></a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.getElementById('menuBtn').addEventListener('click', function() {
    this.classList.toggle('active');
    document.getElementById('menu').classList.toggle('active');
});

// Close menu when clicking on a link
document.querySelectorAll('.menu a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('menuBtn').classList.remove('active');
        document.getElementById('menu').classList.remove('active');
    });
});
</script>