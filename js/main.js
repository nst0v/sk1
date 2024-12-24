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
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        }
    });
});

  document.querySelectorAll('.case-card img').forEach(img => {
    img.addEventListener('click', function() {
        const modal = document.createElement('div');
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
        `;
        
        const modalImg = document.createElement('img');
        modalImg.src = this.src;
        modalImg.style.cssText = `
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        `;
        
        modal.appendChild(modalImg);
        document.body.appendChild(modal);
        
        modal.onclick = () => modal.remove();
    });

    document.querySelector('.menu-btn').addEventListener('click', function() {
        document.querySelector('.menu').classList.toggle('active');
        document.querySelector('.menu-btn').classList.toggle('active');
    });
});

document.querySelector('.menu-btn').addEventListener('click', function() {
    this.classList.toggle('active');
    document.querySelector('.menu').classList.toggle('active');
});

document.querySelectorAll('.menu a').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelector('.menu-btn').classList.remove('active');
        document.querySelector('.menu').classList.remove('active');
    });
});
