
<?php
/*
require_once '../../../config/auth.php';

requiereSesion();
$id_usuario = $_SESSION['usuario']['id_usuario'];
$nombreUsuario = $_SESSION['usuario']['usua_nombre'];
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <title>¡Bienvenido a SAB!</title>
</head>

<body>
    <?php 
    include 'css/header.php';
    ?>

    <!-- Main Content -->
    <main class="main-content">
     <div class="title">
            <h1>Sobre Nosotros</h1>
        </div>
      <div class="content-grid">
       
            <div class="content-card">
                <h3 class="card-title">Agenda Tu Cita</h3>
                <p class="card-description">Reserva fácilmente tu cita para chequeos, limpiezas, tratamientos especializados o cualquier consulta.
                ¡Tu salud oral es nuestra prioridad!.</p>
                <a href="#" class="btn btn-primary" style="margin-top: 16px;">Ver más</a>
            </div>

            <div class="content-card">
                <h3 class="card-title">Tratamientos</h3>
                <p class="card-description">En nuestro Centro Odontológico te ofrecemos una amplia gama de tratamientos diseñados para cuidar y mejorar tu salud bucal.</p>
                <a href="#" class="btn btn-primary" style="margin-top: 16px;">Ver más</a>
            </div>

            <div class="content-card">
                <h3 class="card-title">Pqrs</h3>
                <p class="card-description">En SAB estamos comprometidos con mejorar cada día.
        Envía tus peticiones, quejas, reclamos o sugerencias y ayúdanos a brindarte una mejor atención.</p>
                <a href="#" class="btn btn-primary" style="margin-top: 16px;">Ver más</a>
            </div>
        </div>

    
    </main>
<?php 
include  'css/footer.php';
?>
</body>

</html>