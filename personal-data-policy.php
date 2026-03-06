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
                <span class="section-tag">Privacy & Security</span>
                <h1 class="pages__title">Обработка <span class="text-gradient">данных</span></h1>
            </div>

            <div class="legal-content" data-aos="fade-up">
                <div class="policy-section">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика определяет порядок и условия обработки персональных данных, предпринимаемые платформой 
                        <strong><?= $domainTitle ?></strong> (далее — «Оператор»), в соответствии с международными стандартами защиты конфиденциальности и 
                        <strong>UK GDPR</strong>.
                    </p>
                    <p>
                        1.1. Оператор ставит своей важнейшей целью защиту прав и свобод Пользователей при использовании нашей 
                        <strong>передовой цифровой инфраструктуры</strong>.
                    </p>
                    <p>
                        1.2. Политика распространяется на всю информацию, которую Оператор может получить о посетителях веб-сайта 
                        <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <div class="terminology-grid">
                        <div class="term-item">
                            <strong>Веб-сайт</strong>
                            <span>Цифровая экосистема по адресу <?= $fullDomain ?>.</span>
                        </div>
                        <div class="term-item">
                            <strong>Пользователь</strong>
                            <span>Лицо, использующее наши решения для карьерного роста.</span>
                        </div>
                        <div class="term-item">
                            <strong>Обработка</strong>
                            <span>Сбор, систематизация и хранение данных для AI-анализа.</span>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid-policy">
                        <div class="data-card-mini">
                            <i data-lucide="user-check"></i>
                            <div class="data-card-mini__content">
                                <strong>Идентификационные данные:</strong>
                                <span>Имя, фамилия, адрес электронной почты.</span>
                            </div>
                        </div>
                        <div class="data-card-mini">
                            <i data-lucide="fingerprint"></i>
                            <div class="data-card-mini__content">
                                <strong>Технические параметры:</strong>
                                <span>IP-адрес, тип браузера, файлы cookie.</span>
                            </div>
                        </div>
                        <div class="data-card-mini">
                            <i data-lucide="phone-call"></i>
                            <div class="data-card-mini__content">
                                <strong>Контактная информация:</strong>
                                <span>Номер телефона для экспертной поддержки.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <p>Мы используем ваши данные для создания <strong>стратегии роста на базе инноваций</strong>:</p>
                    <ul class="legal-list">
                        <li><span class="list-bullet"></span> Идентификация для доступа к экспертным материалам.</li>
                        <li><span class="list-bullet"></span> Установление обратной связи и персонализация офферов.</li>
                        <li><span class="list-bullet"></span> Анализ профессионального профиля через <strong>AI-инструменты</strong>.</li>
                        <li><span class="list-bullet"></span> Улучшение качества консультационных услуг.</li>
                    </ul>
                </div>

                <div class="policy-section contact-footer-policy glass-panel">
                    <h2>6. Вопросы и обратная связь</h2>
                    <p>Если у вас возникли вопросы по поводу защиты данных на платформе <strong><?= $domainTitle ?></strong>, свяжитесь с нашим офисом в Лондоне:</p>
                    <div class="policy-contacts">
                        <a href="mailto:support@<?= $fullDomain ?>" class="policy-link-item">
                            <i data-lucide="mail"></i> support@<?= $fullDomain ?>
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