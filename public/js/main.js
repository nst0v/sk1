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
});
