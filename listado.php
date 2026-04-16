<?php 
$pageTitle = "Listado BD - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Listado de Alumnos</h1>
<p>Datos extraídos de la base de datos MariaDB</p>
<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead style="background-color: #2c3e50; color: white;">
        <tr>
            <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Nombre</th>
            <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        try {
            // 1. Conectar a la base de datos (Host es 'db' por el docker-compose)
            $pdo = new PDO("mysql:host=db;dbname=examen_php", "examen", "examen123");
            
            // 2. Hacer la consulta SQL
            $stmt = $pdo->query("SELECT * FROM alumnos_examen");
            
            // 3. Recorrer los resultados e imprimirlos en filas de tabla (<tr> y <td>)
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td style='padding: 10px; border: 1px solid #ddd; text-align: center;'>" . $row['id'] . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['nombre'] . "</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>" . $row['email'] . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            // Si hay un error de conexión, lo mostramos
            echo "<tr><td colspan='3'>Error de conexión a la BD: " . $e->getMessage() . "</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php 
require __DIR__ . "/includes/footer.php"; 
?>