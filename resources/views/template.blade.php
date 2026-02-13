<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Мебельная фурнитура | Интернет-магазин</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap");

            body {
                font-family: "Inter", sans-serif;
            }

            .hero-slider {
                background: linear-gradient(135deg, #a1a6ad 0%, #547161 100%);
            }

            .product-card {
                transition: all 0.3s ease;
            }

            .product-card:hover {
                transform: translateY(-5px);
                box-shadow:
                    0 20px 25px -5px rgba(0, 0, 0, 0.1),
                    0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .nav-link {
                position: relative;
                transition: color 0.3s;
            }

            .nav-link:after {
                content: "";
                position: absolute;
                width: 0;
                height: 2px;
                bottom: -2px;
                left: 0;
                background-color: #6b0c1c;
                /*background-color: #667eea;*/
                transition: width 0.3s;
            }

            .nav-link:hover:after {
                width: 100%;
            }

            .badge-new {
                background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            }

            .badge-sale {
                background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            }
        </style>
    </head>
    <body class="bg-gray-50">
        <!-- Header -->
        <header class="bg-white shadow-md sticky top-0 z-50">
            <!-- Top Bar -->
            <div class="bg-gray-800 text-white text-sm">
                <div
                    class="container mx-auto px-4 py-2 flex justify-between items-center"
                >
                    <div class="flex items-center space-x-4">
                        <a
                            href="https://go.2gis.com/sga05"
                            class="flex items-center hover:text-gray-300"
                            ><i class="fas fa-map-marker-alt mr-2"></i>Астана</a
                        >
                        <a href="tel:+77054614599" class="hover:text-gray-300"
                            ><i class="fas fa-phone mr-2"></i>+7 (705)
                            461-45-99</a
                        >
                        <a href="tel:+77070602094" class="hover:text-gray-300"
                            ><i class="fas fa-phone mr-2"></i>+7 (707)
                            060-20-94</a
                        >
                    </div>
                    <div class="flex items-center space-x-4">
                        <!-- Language Selector -->
                        <div class="relative group">
                            <button
                                class="flex items-center space-x-1 hover:text-gray-300 transition"
                            >
                                <i class="fas fa-globe"></i>
                                <span>KZ</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            <div
                                class="absolute right-0 mt-2 w-32 bg-white text-gray-800 rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50"
                            >
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 flex items-center"
                                >
                                    <span class="mr-2">🇰🇿</span> Қазақша
                                </a>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 flex items-center"
                                >
                                    <span class="mr-2">🇷🇺</span> Русский
                                </a>
                                <a
                                    href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 flex items-center"
                                >
                                    <span class="mr-2">🇬🇧</span> English
                                </a>
                            </div>
                        </div>
                        <a
                            href="https://www.instagram.com/confirmat_kz"
                            class="hover:text-gray-300"
                            ><i class="fab fa-instagram"></i
                        ></a>
                        <a
                            href="https://www.facebook.com/confirmatastana"
                            class="hover:text-gray-300"
                            ><i class="fab fa-facebook"></i
                        ></a>
                    </div>
                </div>
            </div>

            <!-- Main Header -->
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <div class="text-white font-bold text-2xl py-2 rounded">
                            <img src="confirmat-logo.svg" width="300" />
                        </div>
                        <div class="ml-3 text-sm text-gray-600">
                            Интернет-магазин<br />мебельной фурнитуры
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                        <div class="relative w-full">
                            <input
                                type="text"
                                placeholder="Поиск товаров..."
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"
                            />
                            <button
                                class="absolute right-2 top-2 text-gray-400 hover:text-purple-600"
                            >
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center space-x-6">
                        <a
                            href="#"
                            class="flex flex-col items-center text-gray-700 hover:text-red-800"
                        >
                            <i class="fas fa-heart text-xl"></i>
                            <span class="text-xs mt-1">Избранное</span>
                        </a>
                        <a
                            href="#"
                            class="flex flex-col items-center text-gray-700 hover:text-red-800"
                        >
                            <i class="fas fa-balance-scale text-xl"></i>
                            <span class="text-xs mt-1">Сравнение</span>
                        </a>
                        <a
                            href="#"
                            class="flex flex-col items-center text-gray-700 hover:text-red-800 relative"
                        >
                            <i class="fas fa-shopping-cart text-xl"></i>
                            <span
                                class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center"
                                >0</span
                            >
                            <span class="text-xs mt-1">Корзина</span>
                        </a>
                        <a
                            href="#"
                            class="flex flex-col items-center text-gray-700 hover:text-red-800"
                        >
                            <i class="fas fa-user text-xl"></i>
                            <span class="text-xs mt-1">Войти</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="bg-gray-100 border-t border-gray-200">
                <div class="container mx-auto px-4">
                    <ul class="flex space-x-8 text-sm font-medium">
                        <li class="relative group">
                            <a
                                href="#"
                                class="nav-link block py-4 text-gray-700 hover:text-red-800"
                            >
                                <i class="fas fa-bars mr-2"></i>Каталог
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="nav-link block py-4 text-gray-700 hover:text-red-800"
                                >Как купить</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="nav-link block py-4 text-gray-700 hover:text-red-800"
                                >Онлайн-сервисы</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="nav-link block py-4 text-gray-700 hover:text-red-800"
                                >О компании</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                class="nav-link block py-4 text-gray-700 hover:text-red-800"
                                >Контакты</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-300">
            <div class="container mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <div class="inline-block">
                            <img
                                src="confirmat-logo-inverted.svg"
                                width="300"
                            />
                        </div>
                        <p class="text-sm mb-4">
                            Интернет-магазин мебельной фурнитуры
                        </p>
                        <div class="flex space-x-4">
                            <a
                                href="#"
                                class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition"
                            >
                                <i class="fab fa-vk"></i>
                            </a>
                            <a
                                href="#"
                                class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition"
                            >
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a
                                href="#"
                                class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition"
                            >
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Catalog -->
                    <div>
                        <h3 class="text-white font-semibold mb-4">Каталог</h3>
                        <ul class="space-y-2 text-sm">
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Новинки</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Акция</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Мебельные ручки</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Системы выдвижения</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Мебельные петли</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Кухонные корзины</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Help -->
                    <div>
                        <h3 class="text-white font-semibold mb-4">Помощь</h3>
                        <ul class="space-y-2 text-sm">
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Как купить</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Как оформить заказ</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Доставка и оплата</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Часто задаваемые вопросы</a
                                >
                            </li>
                            <li>
                                <a href="#" class="hover:text-white transition"
                                    >Контакты</a
                                >
                            </li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-white font-semibold mb-4">Контакты</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-start">
                                <i
                                    class="fas fa-map-marker-alt mt-1 mr-3 text-purple-500"
                                ></i>
                                <span
                                    >г. Астана, ул. Шары Жиенкуловой, д.
                                    13/1</span
                                >
                            </li>
                            <li class="flex items-center">
                                <i
                                    class="fas fa-phone mr-3 text-purple-500"
                                ></i>
                                <a
                                    href="tel:+77054614599"
                                    class="hover:text-white transition"
                                    >+7 (705) 461-45-99</a
                                >
                            </li>
                            <li class="flex items-center">
                                <i
                                    class="fas fa-phone mr-3 text-purple-500"
                                ></i>
                                <a
                                    href="tel:+77070602094"
                                    class="hover:text-white transition"
                                    >+7 (707) 060-20-94</a
                                >
                            </li>
                            <li class="flex items-center">
                                <i
                                    class="fas fa-envelope mr-3 text-purple-500"
                                ></i>
                                <a
                                    href="/cdn-cgi/l/email-protection#fc95929a93bc99849d918c9099d28e89"
                                    class="hover:text-white transition"
                                    ><span
                                        class="__cf_email__"
                                        data-cfemail="71181f171e311409101c011d145f0304"
                                        >[email&#160;protected]</span
                                    ></a
                                >
                            </li>
                            <li class="flex items-start">
                                <i
                                    class="fas fa-clock mt-1 mr-3 text-purple-500"
                                ></i>
                                <span>ПН-ПТ с 9:00 до 18:00</span>
                                <span>СБ с 9:00 до 15:00</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Footer -->
                <div
                    class="border-t border-gray-800 mt-12 pt-8 text-sm text-center"
                >
                    <p>
                        &copy; 2026 Мебельная фурнитура CONFIRMAT. Все права
                        защищены.
                    </p>
                </div>
            </div>
        </footer>

        <script
            data-cfasync="false"
            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
        ></script>
        <!-- Scroll to Top Button -->
        <button
            id="scrollTop"
            class="fixed bottom-8 right-8 bg-purple-600 text-white w-12 h-12 rounded-full shadow-lg hover:bg-purple-700 transition opacity-0 pointer-events-none"
        >
            <i class="fas fa-arrow-up"></i>
        </button>

        <script>
            // Scroll to top functionality
            const scrollTopBtn = document.getElementById("scrollTop");

            window.addEventListener("scroll", () => {
                if (window.pageYOffset > 300) {
                    scrollTopBtn.style.opacity = "1";
                    scrollTopBtn.style.pointerEvents = "auto";
                } else {
                    scrollTopBtn.style.opacity = "0";
                    scrollTopBtn.style.pointerEvents = "none";
                }
            });

            scrollTopBtn.addEventListener("click", () => {
                window.scrollTo({ top: 0, behavior: "smooth" });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    const target = document.querySelector(
                        this.getAttribute("href"),
                    );
                    if (target) {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });
                    }
                });
            });
        </script>
    </body>
</html>
