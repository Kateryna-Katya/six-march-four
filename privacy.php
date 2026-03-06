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
                <span class="section-tag">Privacy Policy</span>
                <h1 class="pages__title">Конфиденциальность <br><span class="text-gradient">данных</span></h1>
            </div>

            <div class="legal-content" data-aos="fade-up">
                <div class="policy-hero-card glass-panel">
                    <p>
                        Настоящая Политика конфиденциальности распространяется на персональные данные, предоставляемые клиентами <strong><?= $domainTitle ?></strong>. Мы создаем <strong>инновационную технологию</strong> взаимодействия, где ваша приватность является фундаментом нашей цифровой инфраструктуры.
                    </p>
                </div>

                <div class="policy-notice">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять положения Политики в соответствии с изменениями законодательства Великобритании и ЕС. Предоставляя свои данные, вы доверяете нам построение вашей стратегии роста, и мы гарантируем их защиту передовыми методами шифрования.
                    </p>
                </div>

                <div class="storage-section">
                    <h2 class="legal-subtitle">Хранение и безопасность</h2>
                    <div class="storage-info-grid">
                        <div class="storage-item">
                            <i data-lucide="history"></i>
                            <div class="storage-item__text">
                                <strong>Регламент хранения</strong>
                                <span>Данные сохраняются в течение срока, необходимого для реализации программы карьерного апгрейда.</span>
                            </div>
                        </div>
                        <div class="storage-item">
                            <i data-lucide="shield-check"></i>
                            <div class="storage-item__text">
                                <strong>Правовой базис</strong>
                                <span>Обработка данных происходит исключительно на основании вашего добровольного согласия.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="data-collection-grid">
                    <div class="data-box glass-panel">
                        <h3><i data-lucide="cpu"></i> Технический стек</h3>
                        <ul class="legal-list">
                            <li>IP-адрес и лог времени доступа.</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong>.</li>
                            <li>Параметры браузера и взаимодействие с блоками.</li>
                        </ul>
                    </div>
                    <div class="data-box glass-panel">
                        <h3><i data-lucide="contact"></i> Персонализация</h3>
                        <ul class="legal-list">
                            <li>Имя и фамилия пользователя.</li>
                            <li>Контактный Email и номер телефона.</li>
                            <li>История взаимодействия с услугами консалтинга.</li>
                        </ul>
                    </div>
                </div>

                <div class="legal-section">
                    <h2 class="legal-subtitle">Цели обработки</h2>
                    <ul class="legal-list-dots">
                        <li>Предоставление доступа к <strong>AI-инструментам</strong> платформы.</li>
                        <li>Разработка новых решений на основе ваших предпочтений.</li>
                        <li>Информирование о ключевых событиях в блоге и индустрии Англии.</li>
                        <li>Обеспечение экспертной поддержки 24/7.</li>
                    </ul>
                </div>

                <div class="rights-block glass-panel" data-aos="zoom-in">
                    <h2>Ваши права</h2>
                    <p>
                        Вы имеете право на доступ, исправление или полное удаление ваших данных из нашей системы. Для реализации этих прав свяжитесь с командой <strong><?= $domainTitle ?></strong>:
                    </p>
                    <div class="rights-action">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="btn btn--outline">
                            <i data-lucide="send"></i> hello@<?= $fullDomain ?>
                        </a>
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