<?php 
$pageTitle = "Galería Dinámica - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Nuestra Galería</h1>
<p>Imágenes cargadas dinámicamente con PHP desde la carpeta uploads.</p>

<div class="galeria-grid">
    <?php
    $dir = __DIR__ . "/uploads"; 
    $files = scandir($dir);
    
    foreach ($files as $file) {
        
        if ($file == "." || $file == "..") {
            continue;
        }
    
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        if ($extension == 'jpg' || $extension == 'png') {

            echo "<img src='uploads/$file' alt='Imagen de la galería'>";
        }
    }
    ?>
</div>

<?php 
require __DIR__ . "/includes/footer.php"; 
?>