/**
 * Project: six-march-four | Career Upgrade Platform
 * Full Integrated Script v2.0 (Three.js + GSAP + Swiper + Validation)
 */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // === 1. ГЛОБАЛЬНЫЕ НАСТРОЙКИ И ИНИЦИАЛИЗАЦИЯ ===
    lucide.createIcons();
    
    AOS.init({
        duration: 1000,
        once: true,
        offset: 50,
        easing: 'ease-out-cubic'
    });

    // === 2. THREE.JS: ГЛОБАЛЬНЫЙ ШЕЙДЕРНЫЙ ФОН ===
    // Фикс: alpha: true позволяет видеть канвас сквозь прозрачные секции
    const initShaderBackground = () => {
        const container = document.getElementById('site-canvas-background');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
        const renderer = new THREE.WebGLRenderer({ 
            antialias: true, 
            alpha: true,
            powerPreference: "high-performance" 
        });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        const geometry = new THREE.PlaneGeometry(2, 2);
        const uniforms = {
            u_time: { value: 1.0 },
            u_resolution: { value: new THREE.Vector2(window.innerWidth, window.innerHeight) },
            u_mouse: { value: new THREE.Vector2(0, 0) }
        };

        const material = new THREE.ShaderMaterial({
            uniforms: uniforms,
            vertexShader: `
                varying vec2 vUv;
                void main() {
                    vUv = uv;
                    gl_Position = vec4(position, 1.0);
                }
            `,
            fragmentShader: `
                uniform float u_time;
                uniform vec2 u_resolution;
                uniform vec2 u_mouse;
                varying vec2 vUv;

                void main() {
                    vec2 st = gl_FragCoord.xy / u_resolution.xy;
                    float aspect = u_resolution.x / u_resolution.y;
                    st.x *= aspect;

                    // Создаем динамический шум/волны
                    vec2 pos = st * 3.0;
                    float wave = sin(pos.x + u_time * 0.5) * cos(pos.y + u_time * 0.3);
                    wave += sin(st.y * 10.0 - u_time) * 0.02;

                    // Цвета: Глубокий темно-серый и Цифровой синий
                    vec3 color1 = vec3(0.04, 0.05, 0.06); // Почти черный
                    vec3 color2 = vec3(0.0, 0.5, 0.7);    // Приглушенный синий
                    
                    // Эффект интерактивности мыши
                    float dist = distance(st, u_mouse * vec2(aspect, 1.0));
                    float mGlow = 0.15 * (1.0 - smoothstep(0.0, 0.6, dist));

                    vec3 finalColor = mix(color1, color2, (wave * 0.1) + mGlow);
                    gl_FragColor = vec4(finalColor, 1.0);
                }
            `
        });

        const mesh = new THREE.Mesh(geometry, material);
        scene.add(mesh);

        window.addEventListener('mousemove', (e) => {
            uniforms.u_mouse.value.x = e.clientX / window.innerWidth;
            uniforms.u_mouse.value.y = 1.0 - (e.clientY / window.innerHeight);
        });

        const animate = () => {
            requestAnimationFrame(animate);
            uniforms.u_time.value += 0.01;
            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            renderer.setSize(window.innerWidth, window.innerHeight);
            uniforms.u_resolution.value.set(window.innerWidth, window.innerHeight);
        });
    };
    initShaderBackground();

    // === 3. GSAP: ПРЕМИАЛЬНАЯ АНИМАЦИЯ КОНТЕНТА ===
    const initGsapAnimations = () => {
        if (typeof gsap === 'undefined') return;

        const tl = gsap.timeline({ defaults: { ease: "power4.out" } });

        // Появление хедера и элементов Hero
        tl.from(".header", { y: -100, opacity: 0, duration: 1.2 })
          .from(".hero__badge", { opacity: 0, scale: 0.8, duration: 0.8 }, "-=0.5")
          .from(".hero__title", { y: 50, opacity: 0, skewY: 5, duration: 1.2 }, "-=0.6")
          .from(".hero__text", { x: -30, opacity: 0, duration: 1 }, "-=0.8")
          .from(".hero__actions", { y: 20, opacity: 0, duration: 0.8 }, "-=0.8")
          .from(".hero__scroll", { opacity: 0, duration: 1 }, "-=0.5");
    };
    initGsapAnimations();

    // === 4. МОБИЛЬНОЕ МЕНЮ И СКРОЛЛ ===
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const header = document.getElementById('header');

    if (burger) {
        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            nav.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    }

    // Закрытие при клике на ссылку (для SPA-эффекта)
    document.querySelectorAll('.nav__link').forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('active');
            nav.classList.remove('active');
            document.body.classList.remove('no-scroll');
        });
    });

    // Скролл-эффект хедера
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // === 5. SWIPER: ОТЗЫВЫ ===
    if (document.querySelector('.reviews-slider')) {
        new Swiper('.reviews-slider', {
            loop: true,
            speed: 1000,
            autoplay: { delay: 6000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            effect: 'fade',
            fadeEffect: { crossFade: true }
        });
    }

    // === 6. КОНТАКТНАЯ ФОРМА И КАПЧА ===
    const form = document.getElementById('ajax-form');
    if (form) {
        // Капча
        const n1 = Math.floor(Math.random() * 9) + 1;
        const n2 = Math.floor(Math.random() * 9) + 1;
        const answer = n1 + n2;
        const label = document.getElementById('captcha-label');
        if (label) label.innerText = `Подтвердите, что вы не бот: ${n1} + ${n2} = ?`;

        // Маска телефона (только цифры)
        const phone = document.getElementById('phone-input');
        phone?.addEventListener('input', (e) => { e.target.value = e.target.value.replace(/\D/g, ''); });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const userVal = parseInt(document.getElementById('captcha-input').value);
            const success = document.getElementById('form-success');
            const error = document.getElementById('form-error');

            if (userVal !== answer) {
                error.innerText = "Математическая ошибка. Попробуйте снова.";
                error.style.display = 'block';
                return;
            }

            // Имитация отправки
            const btn = form.querySelector('button');
            btn.disabled = true;
            btn.innerText = "Запрос отправляется...";

            setTimeout(() => {
                success.style.display = 'block';
                error.style.display = 'none';
                form.reset();
                btn.disabled = false;
                btn.innerText = "Доступ получен";
            }, 2000);
        });
    }

    // === 7. COOKIE POPUP ===
    const cookiePopup = document.getElementById('cookie-popup');
    if (cookiePopup && !localStorage.getItem('cookies_accepted')) {
        setTimeout(() => cookiePopup.classList.add('show'), 3000);
        
        document.getElementById('cookie-accept').addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', 'true');
            cookiePopup.classList.remove('show');
        });
    }
});