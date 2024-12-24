<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой лендинг</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php include 'header.php'; ?> <!-- Подключаем header -->

<main>

    <section class="block" id="main">
        <div class="main-content-wrapper">
            <div class="main-content-block">
                <h1>Market Traffic</h1>
                <p class="subtitle">Делаем маркетинг для любых проектов</p>
                <a href="https://t.me/your_username" class="contact-button">Связаться</a>
            </div>
        </div>
    </section>

    <div class="seal-divider">
        <img src="img/seal.png" alt="Seal">
    </div>

    <section class="block" id="why-us">
        <h2>Почему мы</h2>
        <div class="advantages-list">
            <div class="advantage-item">
                <span class="number">1</span>
                <p>Реальные кейсы и рабочие связки</p>
            </div>
            <div class="advantage-item">
                <span class="number">2</span>
                <p>Мы создали систему, в которой банов просто нет</p>
            </div>
            <div class="advantage-item">
                <span class="number">3</span>
                <p>Сохранение вашей конфиденциальности - наш принцип</p>
            </div>
            <div class="advantage-item">
                <span class="number">4</span>
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
        <h2>Кейсы</h2>
    </section>

    <section class="block" id="stages">
        <div class="stages-content">
            <h2>Этапы работы</h2>
            
            <div class="stages-grid">
                <div class="stage-item">
                    <div class="stage-number">01</div>
                    <h3>Знакомство с проектом</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">02</div>
                    <h3>Подготовка стратегии</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">03</div>
                    <h3>Подготовка посадочных страниц</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">04</div>
                    <h3>Создание креативов</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">05</div>
                    <h3>Подготовка платежки/аккаунтов</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">06</div>
                    <h3>Запуск рекламы</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">07</div>
                    <h3>Аналитика</h3>
                </div>
                
                <div class="stage-item">
                    <div class="stage-number">08</div>
                    <h3>Масштабирование</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="block" id="contacts">
        <h2>Контакты</h2>
    </section>
</main>

<?php include 'footer.php'; ?> <!-- Подключаем footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>