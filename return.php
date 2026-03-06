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
                <span class="section-tag">Payment & Refunds</span>
                <h1 class="pages__title">Политика <span class="text-gradient">возврата</span></h1>
            </div>

            <div class="legal-content" data-aos="fade-up">
                <div class="policy-hero-card glass-panel refund-accent">
                    <p>
                        Мы стремимся к максимальной прозрачности. В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, основанная на защите прав потребителей Великобритании и принципах честного партнерства.
                    </p>
                </div>

                <h2 class="legal-subtitle">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card-box glass-panel">
                        <i data-lucide="file-warning"></i>
                        <h3>Несоответствие</h3>
                        <p>Если содержание консультаций или материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card-box glass-panel">
                        <i data-lucide="settings-2"></i>
                        <h3>Техсбои</h3>
                        <p>Критические ошибки платформы <strong><?= $fullDomain ?></strong>, препятствующие доступу к инновационной технологии обучения.</p>
                    </div>
                    <div class="refund-card-box glass-panel">
                        <i data-lucide="refresh-ccw"></i>
                        <h3>Период охлаждения</h3>
                        <p>Отказ в течение 14 дней с момента оплаты согласно регламентам потребительского права Англии.</p>
                    </div>
                </div>

                <div class="procedure-block glass-panel">
                    <h2>Процедура запроса</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini-flow">
                        <div class="step-mini-item">
                            <span class="step-num">01</span>
                            <p>Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></p>
                        </div>
                        <div class="step-mini-item">
                            <span class="step-num">02</span>
                            <p>Тема: «Refund Request / Запрос на возврат»</p>
                        </div>
                        <div class="step-mini-item">
                            <span class="step-num">03</span>
                            <p>Укажите ФИО, Email и детали транзакции</p>
                        </div>
                        <div class="step-mini-item">
                            <span class="step-num">04</span>
                            <p>Опишите причину для улучшения наших сервисов</p>
                        </div>
                    </div>
                </div>

                <div class="legal-block">
                    <h2>Сроки и способ возврата</h2>
                    <p>
                        После одобрения запроса возврат денежных средств производится в течение <strong>7–14 рабочих дней</strong>. 
                        Средства возвращаются тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления зависит от регламента вашего банка в <strong>Великобритании</strong> или стране вашего пребывания.
                    </p>
                </div>

                <div class="warning-block-simple">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list-dots">
                        <li>Запрос подан по истечении 14 календарных дней с момента транзакции.</li>
                        <li>Вы уже получили более 50% индивидуальных консультаций или скачали материалы.</li>
                        <li>Технические проблемы вызваны софтом или соединением на стороне пользователя.</li>
                        <li>Нарушение условий использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy glass-panel">
                    <h2>Служба поддержки</h2>
                    <p>По всем финансовым вопросам обращайтесь к нашим специалистам в Лондоне:</p>
                    <div class="policy-contacts">
                        <a href="mailto:hello@<?= $fullDomain ?>" class="policy-link-item">
                            <i data-lucide="mail"></i> hello@<?= $fullDomain ?>
                        </a>
                        <span class="policy-link-item">
                            <i data-lucide="phone"></i> +44 20 4427 2543
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