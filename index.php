<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой лендинг</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>

<?php include 'header.php'; ?>

<main>

    <section class="block" id="main">
        <div class="main-content-wrapper">
            <div class="main-content-block">
                <h1>Market<br>Traffic</h1>
                <p class="subtitle">Делаем маркетинг<br>для любых проектов</p>
                <a href="https://t.me/mgr_MTraff" class="contact-button">
                    Связаться
                    <span class="arrow-circle">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <div class="seal-divider">
        <img src="img/seal.png" alt="Seal">
    </div>

    <section class="block" id="why-us">
        <h2>Почему с нами?</h2>
        <div class="advantages-list">
           <div class="advantage-item">
                <span class="number">
                    <img src="img/icons/icon-one.svg" alt="1">
                </span>
                <p>Реальные кейсы и рабочие связки</p>
            </div>

            <div class="advantage-item">
                <span class="number">
                    <img src="img/icons/icon-two.svg" alt="2">
                </span>
                <p>Мы создали систему, в которой банов просто нет</p>
            </div>

            <div class="advantage-item">
                <span class="number">
                    <img src="img/icons/icon-three.svg" alt="3">
                </span>
                <p>Сохранение вашей конфиденциальности - наш принцип</p>
            </div>

            <div class="advantage-item">
                <span class="number">
                    <img src="img/icons/icon-four.svg" alt="4">
                </span>
                <p>Лидеры по цене за клиента и трафик</p>
            </div>
        </div>
    </section>

    <section class="block" id="work-with">
        <div class="work-with-content">
            <h2>С ЧЕМ РАБОТАЕМ?</h2>
            <p class="work-with-subtitle">С нами не надо стесняться - мы запускаем любые проекты, за что другие не берутся</p>
            
            <div class="categories-grid">
                <div class="category-item">
                    <img src="img/icons/ethereum.svg" alt="Crypto">
                    <p>Crypto</p>
                </div>
                <div class="category-item">
                    <img src="img/icons/poker.svg" alt="Casino">
                    <p>Casino/Betting</p>
                </div>
                <div class="category-item">
                    <img src="img/icons/dating.svg" alt="OnlyFans">
                    <p>OnlyFans/Web</p>
                </div>
                <div class="category-item">
                    <img src="img/icons/service.svg" alt="Tovarka">
                    <p>Tovarka</p>
                </div>
                <div class="category-item">
                    <img src="img/icons/marketing.svg" alt="Social Media">
                    <p>Social Media (Telegram/Insta)</p>
                </div>
                <div class="category-item">
                    <img src="img/icons/hacker.svg" alt="Black Projects">
                    <p>Black Projects</p>
                </div>
            </div>
        </div>
    </section>


    <section class="block" id="cases">
    <h2>Наши кейсы</h2>
    <p class="cases-subtitle">Чем мы гордимся</p>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Crypto trading/TG бот</h3>
                    <img src="img/cases/crypto-trading-india.webp" alt="Case 1" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">Индия</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$1799.75</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$0.94</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Dating/Сайт для взрослых</h3>
                    <img src="img/cases/dating-sng.webp" alt="Case 2" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">СНГ</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">€2983</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$0.09</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Casino/Сайт</h3>
                    <img src="img/cases/casino-oae.webp" alt="Case 3" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">ОАЭ</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$450</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$2.14</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Crypto - обменник</h3>
                    <img src="img/cases/crypto-obmen-eu.webp" alt="Case 4" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">Европа</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$1408</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$2.65</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Продажа товаров/Instagram</h3>
                    <img src="img/cases/inst-eu.webp" alt="Case 5" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">Европа</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$300</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$1.41</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Препараты для похудения</h3>
                    <img src="img/cases/med-eu.webp" alt="Case 6" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">Европа</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$200</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$1.21</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="case-card">
                    <h3 class="case-title">Продвижение Telegram-канала</h3>
                    <img src="img/cases/teleg-kz.webp" alt="Case 7" class="case-image">
                    <div class="case-info">
                        <div class="case-details">
                            <div class="detail-row">
                                <span class="detail-label">GEO:</span>
                                <span class="detail-value">Индия</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Бюджет:</span>
                                <span class="detail-value highlight">$500</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">Цена активации:</span>
                                <span class="detail-value success">$0.20</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-navigation">
        <div class="swiper-button-prev">
            <img src="img/icons/icon-left-arrow.svg" alt="Previous">
        </div>
        <div class="swiper-button-next">
            <img src="img/icons/icon-right-arrow.svg" alt="Next">
        </div>
    </div>
</section>

    <section class="block" id="stages">
        <div class="stages-content">
            <h2>Этапы работы</h2>
            
            <div class="stages-grid">
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">01</div>
                    <h3>Знакомство с проектом</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">02</div>
                    <h3>Подготовка стратегии</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">03</div>
                    <h3>Подготовка посадочных страниц</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">04</div>
                    <h3>Создание креативов</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">05</div>
                    <h3>Подготовка платежки/аккаунтов</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">06</div>
                    <h3>Запуск рекламы</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">07</div>
                    <h3>Аналитика</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number"><img src="img/icons/cross-stages.svg" alt="cross" class="stage-cross">08</div>
                    <h3>Масштабирование</h3>
                </div>
            </div>
        </div>
    </section>

<section class="block" id="contacts">
    <div class="contacts-content">
        <div class="contacts-links">
            <h2>Хочешь работать с нами?</h2>
            <p class="cases-subtitle">Переходи в Telegram канал Market Traffic или пиши нашему менеджеру:</p>
            <a href="https://t.me/+9N9SAQQk7Kw2MWQy" class="tg-link"><img src="img/icons/icon-telegram.svg" alt="cross" class="stage-cross">ТГК:Market Traffic</a>
            <a href="https://t.me/mgr_MTraff" class="tg-link"><img src="img/icons/icon-manager.svg" alt="cross" class="stage-cross">Менеджер</a>
        </div>
        <div class="contacts-image">
            <img src="img/phone.png" alt="Phone">
        </div>
    </div>
</section>
</main>

<?php include 'footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>