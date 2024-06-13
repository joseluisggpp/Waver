        <header>
            <div class="header-container">
                <div></div>
                <div class="logo">
                    <!--Aquí viene el logo-->
                    <a href="{{ route('home') }}"><img src="{{ asset('media/logo_waver.png') }}"></a>
                </div>

                <div class="header-right-corner">
                    <!--Aquí vienen los 3 iconos de la esquina superior derecha-->

                    <a href="{{ route('login') }}"><img src="{{ asset('media/usuario.png') }}"></a>
                    <a href="{{ route('cart') }}"><img src="{{ asset('media/carrito-de-compras.png') }}"></a>

                </div>
            </div>
            <nav>
                <ul>
                    <a href="{{ route('top100songs') }}" class="href">
                        <li><strong>Top 100 Canciones</strong></li>
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
        </header>