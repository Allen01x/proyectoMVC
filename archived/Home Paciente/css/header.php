<?php /*
$nombreUsuario = $_SESSION['usuario']['usua_nombre'];
*/
?>
<header class="header">
    <div class="header-content">
        <img src="css/logo-brand.png" alt="">
        <div class="logo">SALUD BENEFIT</div>
    </div>
    <div class="nav-header">
        <nav>
            <ul>
                <ol>
                    <a href="#header-sab">🌐

                        Inicio</a>

                    <a href="#services-sab">💬
                        Servicios</a>

                    <a href="#tratamientos-sab">🦷
                        Tratamientos</a>


                </ol>
            </ul>
        </nav>
    </div>

    <div class="user-info">
        <div class="user-avatar"><img src="" alt=""></div>
        <button class="user-name-button"><?php /* echo htmlspecialchars($nombreUsuario); */ ?></button>
    </div>
</header>