<html>

<head>
    <title>@yield('title')</title>
    @vite('css/app.css')
</head>

<body>
    @section('base_menu')
    @show

    <header>
        <nav>
            <div class="logo">
                <img>
            </div>
            <div class="menu1">
                <div class="registro">
                    <ul>
                        <li>Registro</li>
                        <li>Mi pedido</li>
                        <li>Mi tienda: Sin seleccionar</li>
                    </ul>
                </div>
                <div class="ayuda">
                    <ul>
                        <li> Ayuda compra on-line</li>
                        <li> Carrito 0€ (0 productos)</li>
                    </ul>
                </div>
            </div>
            <div>Sobres de cartas</div>
            <div> Fundas</div>
            <div> Dados</div>
            <div> Contadores</div>
            <div> Tapetes</div>
            <div> Comunidad</div>
        </nav>
    </header>

    <main>
        <div class="ofertas">
            <p>Nuestras ofertas en tu e-mail</p>
            <p class="texto2">Mantente al día de todas las ofertas y oportunidades</p>
        </div>
    </main>

    <footer>
        <div class="redes">
            <div>Síguenos en:</div>
            <div> Instagram </div>
            <div> Twitter </div>
        </div>
        <nav class="nav3">
            <div class="menu3">
                <div>Empresa</div>
                <div>Aviso legal</div>
                <div>Contacto y opinión</div>
                <div>Política de cookies</div>
                <div>Comunicado seguridad</div>
            </div>
        </nav>
    </footer>
</body>

</html>
