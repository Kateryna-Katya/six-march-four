<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Карьерный апгрейд и стратегии роста</title>
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHJlY3QgeD0iNSIgeT0iMTgiIHdpZHRoPSI0IiBoZWlnaHQ9IjEwIiByeD0iMS41IiBmaWxsPSIjMDBkNGZmIiBvcGFjaXR5PSIwLjQiLz48cmVjdCB4PSIxNCIgeT0iOCIgd2lkdGg9IjQiIGhlaWdodD0iMjAiIHJ4PSIxLjUiIGZpbGw9IiMwMGQ0ZmYiIG9wYWNpdHk9IjAuNyIvPjxyZWN0IHg9IjIzIiB5PSIyIiB3aWR0aD0iNCIgaGVpZ2h0PSIyNiIgcng9IjEuNSIgZmlsbD0iIzAwZDRmZiIvPjwvc3ZnPg==">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#about" class="nav__link">Методология</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <div class="pages__header" data-aos="fade-down">
                <span class="section-tag">Terms & Conditions</span>
                <h1 class="pages__title">Условия <br><span class="text-gradient">использования</span></h1>
            </div>

            <div class="legal-content" data-aos="fade-up">
                <div class="policy-hero-card glass-panel terms-accent">
                    <p>
                        Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Настоящие Условия представляют собой юридически обязывающее соглашение между вами и нашей командой. Используя нашу <strong>инновационную технологию</strong>, вы подтверждаете готовность к карьерному апгрейду на данных условиях.
                    </p>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="compass" class="icon-inline"></i> 1. Предмет Соглашения</h2>
                    <p>
                        Платформа предоставляет Пользователю доступ к <strong>передовой цифровой инфраструктуре</strong> для развития карьеры, включая доступ к AI-инструментам, аналитическим материалам блога <strong><?= $fullDomain ?></strong> и экспертным консультациям. Мы создаем решения, которые меняют правила игры в вашем профессиональном росте.
                    </p>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="user-x" class="icon-inline"></i> 2. Обязанности сторон</h2>
                    <p>При использовании ресурсов <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list-dots">
                        <li>Нарушать целостность программного кода или систем безопасности платформы.</li>
                        <li>Использовать материалы в коммерческих целях без согласования с администрацией.</li>
                        <li>Предоставлять заведомо ложные данные для <strong>оценки перспектив проекта</strong>.</li>
                        <li>Копировать уникальные методологии, доказавшие свою эффективность.</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="copyright" class="icon-inline"></i> 3. Интеллектуальная собственность</h2>
                    <div class="property-block-glass">
                        <p>
                            Весь контент, включая графику, текст и алгоритмы на <strong><?= $fullDomain ?></strong>, является объектом авторского права. Вам предоставляется ограниченный доступ для личного использования в целях построения карьеры, которая работает на вас.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="shield-alert" class="icon-inline"></i> 4. Ограничение ответственности</h2>
                    <div class="warning-block-simple">
                        <p>
                            Услуги предоставляются по принципу <strong>«as is»</strong>. Мы не несем ответственности за косвенные убытки или неисполнение ожиданий, если они вызваны факторами вне нашего контроля. <strong>Пошаговый путь</strong> является рекомендательным.
                        </p>
                    </div>
                </div>

                <div class="legal-section">
                    <h2><i data-lucide="gavel" class="icon-inline"></i> 5. Юрисдикция и споры</h2>
                    <p>
                        Настоящее Соглашение регулируется законодательством <strong>Англии и Уэльса</strong>. Все споры стороны стремятся разрешить путем конструктивных переговоров. Предложение активно только в странах ЕС и Великобритании.
                    </p>
                </div>

                <div class="contact-footer-policy glass-panel">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем юридическим вопросам, связанным с <strong><?= $domainTitle ?></strong>, обращайтесь в наш офис в Лондоне:</p>
                    <div class="policy-contacts">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-link-item">
                            <i data-lucide="mail"></i> hello@<?= $fullDomain ?>
                        </a>
                        <span class="policy-link-item">
                            <i data-lucide="map-pin"></i> 27 Old Gloucester St, London, UK
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационная технология вашего профессионального роста. Переосмыслите подход к развитию вместе с экспертами <?= $domainTitle ?>.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#about">О нас</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="icon-sm"></i>
                        <a href="tel:+442044272543">+44 20 4427 2543</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-sm"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-sm"></i>
                        <span>27 Old Gloucester St, Holborn, London WC1N 3AX, UK</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>© 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="cookie-accept" class="btn btn--outline btn--sm">Принять</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>