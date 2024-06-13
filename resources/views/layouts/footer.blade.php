<footer class="footer p-4">
    <div class="copyright">
        <p> Copyright &copy; 2024 Waver. Todos los derechos reservados.</p>
    </div>
    <div class="footer-container">
        <!--Este div está seccionado en 3 columnas-->
        <div class="atributos-legales">
            <p><strong>Atributos Legales</strong></p>
            <a href="{{ route('terms-conditions') }}" class="href">
                <p>Términos y Condiciones</p>
            </a>
            <a href="{{ route('cookies-policy') }}" class="href">
                <p>Política de Cookies</p>
            </a>
            <a href="{{ route('privacy-policy') }}" class="href">
                <p>Política de Privacidad</p>
            </a>
            <a href="{{ route('cookies-settings') }}" class="href">
                <p>Configuración de Cookies</p>
            </a>
        </div>

        <div class="social-icons">

            <p><strong>Redes Sociales</strong></p>

            <div class="logos">
                <img src="{{ asset('media/instagram.png') }}">
                <img src="{{ asset('media/facebook.png') }}">
                <img src="{{ asset('media/whatsapp.png') }}">
                <img src="{{ asset('media/youtube.png') }}">
                <img src="{{ asset('media/gmail.png') }}">
            </div>
        </div>

        <div class="support">
            <p><strong>Soporte</strong></p>
            <a href="{{ route('faqs') }}" class="href">
                <p>FAQs</p>
            </a>
        </div>
    </div>
</footer>