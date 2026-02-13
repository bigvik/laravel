@layout('template')

@section('content')
<!-- Hero Slider -->
<section class="hero-slider py-20">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between text-white">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold mb-6">
                    Качественная мебельная фурнитура
                </h1>
                <p class="text-xl mb-8">
                    Прогрессивные решения для создания стильных проектов
                </p>
                <div class="flex space-x-4">
                    <a
                        href="#catalog"
                        class="bg-white text-teal-800 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
                    >
                        Каталог продукции
                    </a>
                    <a
                        href="#services"
                        class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-teal-800 transition"
                    >
                        Онлайн-калькуляторы
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <img
                    src="deborah-cortelazzi-gREquCUXQLI-unsplash.jpg"
                    alt="Hero"
                    class="rounded-lg shadow-2xl"
                />
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div
                class="text-center p-6 rounded-lg hover:bg-gray-50 transition"
            >
                <div
                    class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i
                        class="fas fa-medal text-3xl text-purple-600"
                    ></i>
                </div>
                <h3 class="font-semibold mb-2">Качество</h3>
                <p class="text-sm text-gray-600">
                    Непрерывные испытания продукции
                </p>
            </div>
            <div
                class="text-center p-6 rounded-lg hover:bg-gray-50 transition"
            >
                <div
                    class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i
                        class="fas fa-lightbulb text-3xl text-blue-600"
                    ></i>
                </div>
                <h3 class="font-semibold mb-2">Инновации</h3>
                <p class="text-sm text-gray-600">
                    Собственные разработки
                </p>
            </div>
            <div
                class="text-center p-6 rounded-lg hover:bg-gray-50 transition"
            >
                <div
                    class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i
                        class="fas fa-ruble-sign text-3xl text-green-600"
                    ></i>
                </div>
                <h3 class="font-semibold mb-2">Цены</h3>
                <p class="text-sm text-gray-600">
                    Адекватная стоимость
                </p>
            </div>
            <div
                class="text-center p-6 rounded-lg hover:bg-gray-50 transition"
            >
                <div
                    class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="fas fa-headset text-3xl text-red-600"></i>
                </div>
                <h3 class="font-semibold mb-2">Сервис</h3>
                <p class="text-sm text-gray-600">Помощь в подборе</p>
            </div>
        </div>
    </div>
</section>

<!-- New Products -->
<section class="py-16" id="catalog">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Популярное</h2>
            <a
                href="#"
                class="text-red-900 hover:text-red-700 font-semibold"
                >Показать все →</a
            >
        </div>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6"
        >
            <!-- Product Card 1 -->
            <div
                class="product-card bg-white rounded-lg shadow-md overflow-hidden"
            >
                <div class="relative">
                    <img
                        src="https://via.placeholder.com/300x300"
                        alt="Product"
                        class="w-full h-64 object-cover"
                    />
                    <span
                        class="badge-new absolute top-2 right-2 text-white text-xs font-bold px-3 py-1 rounded-full"
                        >NEW</span
                    >
                </div>
                <div class="p-4">
                    <h3
                        class="font-semibold mb-2 text-gray-800 hover:text-red-600 transition"
                    >
                        Мебельная ручка CONTUR RS069
                    </h3>
                    <p class="text-sm text-gray-600 mb-3">
                        224 мм / Сатиновое золото
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-red-500"
                            >742 ₽</span
                        >
                        <button
                            class="bg-red-900 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div
                class="product-card bg-white rounded-lg shadow-md overflow-hidden"
            >
                <div class="relative">
                    <img
                        src="https://via.placeholder.com/300x300"
                        alt="Product"
                        class="w-full h-64 object-cover"
                    />
                    <span
                        class="badge-sale absolute top-2 right-2 text-white text-xs font-bold px-3 py-1 rounded-full"
                        >АКЦИЯ</span
                    >
                </div>
                <div class="p-4">
                    <h3
                        class="font-semibold mb-2 text-gray-800 hover:text-red-600 transition"
                    >
                        Система выдвижения СТАРТ
                    </h3>
                    <p class="text-sm text-gray-600 mb-3">
                        PUSH+SOFT комплект
                    </p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-xl font-bold text-red-500"
                                >1 324 ₽</span
                            >
                            <span
                                class="text-sm text-gray-400 line-through ml-2"
                                >1 500 ₽</span
                            >
                        </div>
                        <button
                            class="bg-red-900 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div
                class="product-card bg-white rounded-lg shadow-md overflow-hidden"
            >
                <div class="relative">
                    <img
                        src="https://via.placeholder.com/300x300"
                        alt="Product"
                        class="w-full h-64 object-cover"
                    />
                </div>
                <div class="p-4">
                    <h3
                        class="font-semibold mb-2 text-gray-800 hover:text-red-600 transition"
                    >
                        Мебельная петля EVO
                    </h3>
                    <p class="text-sm text-gray-600 mb-3">
                        с амортизатором
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-red-500"
                            >368 ₽</span
                        >
                        <button
                            class="bg-red-900 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div
                class="product-card bg-white rounded-lg shadow-md overflow-hidden"
            >
                <div class="relative">
                    <img
                        src="https://via.placeholder.com/300x300"
                        alt="Product"
                        class="w-full h-64 object-cover"
                    />
                    <span
                        class="badge-new absolute top-2 right-2 text-white text-xs font-bold px-3 py-1 rounded-full"
                        >NEW</span
                    >
                </div>
                <div class="p-4">
                    <h3
                        class="font-semibold mb-2 text-gray-800 hover:text-red-600 transition"
                    >
                        Выдвижная корзина CARGO
                    </h3>
                    <p class="text-sm text-gray-600 mb-3">
                        для кухни 450 мм
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-red-500"
                            >2 005 ₽</span
                        >
                        <button
                            class="bg-red-900 text-white px-4 py-2 rounded hover:bg-red-700 transition"
                        >
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
            Каталог продукции
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <a
                href="#"
                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition"
            >
                <img
                    src="https://via.placeholder.com/300x200"
                    alt="Category"
                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-300"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end"
                >
                    <h3 class="text-white font-semibold p-4">
                        Мебельные ручки
                    </h3>
                </div>
            </a>

            <a
                href="#"
                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition"
            >
                <img
                    src="https://via.placeholder.com/300x200"
                    alt="Category"
                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-300"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end"
                >
                    <h3 class="text-white font-semibold p-4">
                        Системы выдвижения
                    </h3>
                </div>
            </a>

            <a
                href="#"
                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition"
            >
                <img
                    src="https://via.placeholder.com/300x200"
                    alt="Category"
                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-300"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end"
                >
                    <h3 class="text-white font-semibold p-4">
                        Мебельные петли
                    </h3>
                </div>
            </a>

            <a
                href="#"
                class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition"
            >
                <img
                    src="https://via.placeholder.com/300x200"
                    alt="Category"
                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-300"
                />
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end"
                >
                    <h3 class="text-white font-semibold p-4">
                        Кухонные корзины
                    </h3>
                </div>
            </a>
        </div>

        <div class="text-center mt-8">
            <a
                href="#"
                class="inline-block bg-red-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-red-700 transition"
            >
                Показать весь каталог
            </a>
        </div>
    </div>
</section>

<!-- Services -->
<!--<section class="py-16 bg-gradient-to-r from-stone-200 to-teal-800 text-white" id="services">-->
<section class="py-16 hero-slider text-white" id="services">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-4 text-center">
            Воспользуйтесь удобными сервисами
        </h2>
        <p class="text-center mb-12 opacity-90">
            Онлайн-калькуляторы и конструкторы
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div
                class="bg-white/10 backdrop-blur-lg rounded-lg p-6 hover:bg-white/20 transition"
            >
                <div
                    class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4"
                >
                    <i class="fas fa-calculator text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">
                    Калькулятор СТАРТ
                </h3>
                <p class="opacity-90 mb-4">
                    Рассчитай стоимость своего СТАРТ
                </p>
                <a
                    href="#"
                    class="inline-flex items-center font-semibold hover:underline"
                >
                    Рассчитать <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div
                class="bg-white/10 backdrop-blur-lg rounded-lg p-6 hover:bg-white/20 transition"
            >
                <div
                    class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4"
                >
                    <i class="fas fa-wrench text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">
                    Калькулятор EVO
                </h3>
                <p class="opacity-90 mb-4">Собери комплект петель</p>
                <a
                    href="#"
                    class="inline-flex items-center font-semibold hover:underline"
                >
                    Собрать комплект
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div
                class="bg-white/10 backdrop-blur-lg rounded-lg p-6 hover:bg-white/20 transition"
            >
                <div
                    class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-4"
                >
                    <i class="fas fa-palette text-2xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">
                    Конструктор ручек
                </h3>
                <p class="opacity-90 mb-4">
                    Выбери необходимые параметры
                </p>
                <a
                    href="#"
                    class="inline-flex items-center font-semibold hover:underline"
                >
                    Подобрать <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="grid">
        <div class="container mx-auto px-4">
            <div
                class="flex items-center justify-between text-white taggbox bg-grey-100"
                style="width: 100%; height: 100%; overflow: auto"
                data-widget-id="315784"
                data-website="1"
            ></div>
            <script
                src="https://widget.taggbox.com/embed.min.js"
                type="text/javascript"
            ></script>
        </div>
    </div>
</section>
<!-- Advantages -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center">
            Наши преимущества
        </h2>

        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6"
        >
            <div class="text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="fas fa-star text-3xl text-white"></i>
                </div>
                <h3 class="font-semibold mb-2">
                    Качество и технологичность
                </h3>
            </div>

            <div class="text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-pink-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="fas fa-fire text-3xl text-white"></i>
                </div>
                <h3 class="font-semibold mb-2">Трендовые решения</h3>
            </div>

            <div class="text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="fas fa-tags text-3xl text-white"></i>
                </div>
                <h3 class="font-semibold mb-2">Адекватная стоимость</h3>
            </div>

            <div class="text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i
                        class="fas fa-shield-alt text-3xl text-white"
                    ></i>
                </div>
                <h3 class="font-semibold mb-2">Бессрочный сервис</h3>
            </div>

            <div class="text-center">
                <div
                    class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4"
                >
                    <i class="fas fa-heart text-3xl text-white"></i>
                </div>
                <h3 class="font-semibold mb-2">Любовь к делу</h3>
            </div>
        </div>
    </div>
</section>
@endsection
