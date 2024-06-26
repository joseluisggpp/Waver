<header>
    <div class="header-container">
        <div></div>
        <div class="logo">
            <!-- Aquí viene el logo -->
            <a href="{{ route('home') }}"><img src="{{ asset('media/logo_waver.png') }}"></a>
        </div>

        <div class="header-right-corner">
            <!-- Aquí vienen los 3 iconos de la esquina superior derecha -->

            <a href="{{ route('login') }}"><img src="{{ asset('media/usuario.png') }}"></a>
            <a href="{{ route('cart') }}"><img src="{{ asset('media/carrito-de-compras.png') }}"></a>
            <button id="showBurger">
                <img src="{{ asset('media/burger.png') }}" alt="Menu">
            </button>
        </div>
    </div>
    <nav>
        <ul>
            <a href="{{ route('top10songs') }}" class="href">
                <li><strong>Top 10 Canciones</strong></li>
            </a>
            <a href="{{ route('detection') }}" class="href">
                <li><strong>Detección de canción</strong></li>
            </a>
            <a href="{{ route('contact') }}" class="href">
                <li><strong>Contacto</strong></li>
            </a>
            <a href="{{ route('about-us') }}" class="href">
                <li><strong>Sobre Nosotros</strong></li>
            </a>
        </ul>
    </nav>
    <div class="mobile-nav-items" id="mobileNavItems">
        <button id="closeBurger">
            <img src="{{ asset('media/boton-cerrar.png') }}" alt="Close">
        </button>
        <ul>
            <a href="{{ route('top10songs') }}" class="href">
                <li><strong>Top 10 Canciones</strong></li>
            </a>
            <a href="{{ route('detection') }}" class="href">
                <li><strong>Detección de canción</strong></li>
            </a>
            <a href="{{ route('contact') }}" class="href">
                <li><strong>Contacto</strong></li>
            </a>
            <a href="{{ route('about-us') }}" class="href">
                <li><strong>Sobre Nosotros</strong></li>
            </a>
        </ul>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showBurgerButton = document.getElementById('showBurger');
        const closeBurgerButton = document.getElementById('closeBurger');
        const mobileNavItems = document.getElementById('mobileNavItems');

        showBurgerButton.addEventListener('click', function() {
            mobileNavItems.classList.add('show');
        });

        closeBurgerButton.addEventListener('click', function() {
            mobileNavItems.classList.remove('show');
        });
    });
</script>