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
                <span class="section-tag">Risk Disclosure</span>
                <h1 class="pages__title">Отказ от <span class="text-gradient">ответственности</span></h1>
            </div>

            <div class="legal-content" data-aos="fade-up">
                <div class="legal-block">
                    <h2><i data-lucide="info" class="icon-inline"></i> Общая информация</h2>
                    <p>
                        Все материалы, статьи и <strong>AI-инструменты</strong>, представленные на платформе 
                        <strong><?= $domainTitle ?></strong>, носят исключительно информационно-ознакомительный характер. 
                        Наша <strong>инновационная технология</strong> анализа рынка не является персональной инвестиционной рекомендацией 
                        или профессиональным юридическим советом. Решения, которые меняют правила игры, требуют индивидуального подхода.
                    </p>
                </div>

                <div class="legal-block">
                    <h2><i data-lucide="shield-alert" class="icon-inline"></i> Отсутствие гарантий</h2>
                    <p>
                        Команда <strong><?= $domainTitle ?></strong> стремится предоставлять передовую цифровую инфраструктуру, однако мы не даем 
                        гарантий относительно точности или актуальности данных. Любая <strong>стратегия роста на базе инноваций</strong> или 
                        упоминание программ пассивного дохода являются лишь примерами методологий, доказавших эффективность в прошлом, 
                        и не гарантируют аналогичных результатов в будущем.
                    </p>
                </div>

                <div class="legal-block">
                    <h2><i data-lucide="user-x" class="icon-inline"></i> Ограничение ответственности</h2>
                    <p>
                        Администрация сайта <strong><?= $fullDomain ?></strong> и экспертная поддержка не несут ответственности за любые прямые 
                        или косвенные убытки, возникшие в результате использования контента платформы. Вся ответственность за применение 
                        <strong>практик, применимых уже сегодня</strong>, лежит исключительно на пользователе.
                    </p>
                </div>

                <div class="legal-block risk-warning-box">
                    <div class="risk-header">
                        <i data-lucide="alert-triangle"></i>
                        <h3>Предупреждение о рисках</h3>
                    </div>
                    <p>
                        Любая деятельность, направленная на карьерный апгрейд или финансовые вложения, сопряжена с определенным уровнем риска. 
                        Прежде чем <strong>оценить перспективы проекта</strong> и принять важное решение, мы настоятельно рекомендуем 
                        проконсультироваться с независимым специалистом в вашей юрисдикции. 
                        Данное предложение активно только в странах ЕС и Великобритании.
                    </p>
                </div>

                <div class="legal-block agreement-footer">
                    <p>
                        Продолжая использовать <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, 
                        вы действуете по собственной воле и полностью принимаете все условия данного отказа от ответственности.
                    </p>
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