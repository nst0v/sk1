document.querySelectorAll('nav ul li a').forEach(link => {
    const underline = link.querySelector('.underline'); // Получаем элемент подчеркивания

    link.addEventListener('mouseenter', () => {
        gsap.to(underline, {
            duration: 0.5,
            width: "100%", // Увеличиваем ширину до 100%
            ease: "power2.inOut" // Плавность
        });
    });

    link.addEventListener('mouseleave', () => {
        gsap.to(underline, {
            duration: 0.5,
            width: "0%", // Скрываем подчеркивание
            ease: "power2.inOut" // Плавность
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.querySelector('.menu-btn');
        const menu = document.querySelector('.menu');
        
        menuBtn.addEventListener('click', function() {
            menu.classList.toggle('active');
        });
        
        // Close menu when clicking menu items
        const menuItems = document.querySelectorAll('.menu a');
        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                menu.classList.remove('active');
            });
        });
    });
});
