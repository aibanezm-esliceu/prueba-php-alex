<?php 
// 1. Definimos el título de esta página en concreto
$pageTitle = "Inicio - Examen PHP"; 

// 2. Traemos todo el código de arriba (HTML, CSS y Menú)
require __DIR__ . "/includes/header.php"; 
?>

<section>
    <h1>Bienvenido a la página de inicio</h1>
    <p>Este es el proyecto de examen. El header y el footer se están cargando correctamente usando PHP.</p>
</section>

<?php 
// 4. Traemos todo el código de abajo (cierre de etiquetas)
require __DIR__ . "/includes/footer.php"; 
?>