<?php
    // Iniciar sesion
    session_start();

    // Verificar si ahi usuario logueado
    if (!isset($_SESSION['user_type'])) {
        header("Location: " . base_url ."view/index");
        exit;
    }
    // Incluye el archivo de configuración
    require_once '../../config/parameters.php';

    // Incluye el header
    include('../layout/header.php');
    include('../layout/nav.php');
?>
    <!-- Contenido específico de la página de alumno o profesor -->
    <h1>Bienvenido alumno:, <?php echo $_SESSION['user_type']; ?>!</h1>
<?php
    // Incluye el footer
    include('../layout/footer.php');
?>
