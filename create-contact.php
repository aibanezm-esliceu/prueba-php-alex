<?php
// 1. Comprobar que el método sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "No se han recibido datos del formulario.";
    exit;
}

// 2. Los nombres aquí deben coincidir con los 'name' del HTML
$nom = $_POST["nom"] ?? "";
$telefon = $_POST["telefon"] ?? "";
$email = $_POST["email"] ?? "";
$missatge = $_POST["missatge"] ?? "";

// 3. Conexión a la BD
require __DIR__ . "/db.php";

// 4. Guardar en la BD
try {
    $sql = "INSERT INTO contactos (nombre, telefono, correo, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    // Aquí usamos las mismas variables que hemos definido en el paso 2
    $result = $stmt->execute([$nom, $telefon, $email, $missatge]);

    // 5. Mensaje de éxito
    if ($result) {
        $pageTitle = "Éxito"; 
        require __DIR__ . "/includes/header.php";
        echo "<h1>¡Mensaje enviado con éxito!</h1>";
        echo "<p>Gracias, $nom. Hemos guardado tu mensaje en la base de datos.</p>";
        echo "<a href='contacte.php'>Volver al formulario</a>";
        require __DIR__ . "/includes/footer.php";
    }
} catch (PDOException $e) {
    echo "Error al guardar el mensaje: " . $e->getMessage();
}
?><?php
// 1. Comprobar que el método sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "No se han recibido datos del formulario.";
    exit;
}

// 2. Los nombres aquí deben coincidir con los 'name' del HTML
$nom = $_POST["nom"] ?? "";
$telefon = $_POST["telefon"] ?? "";
$email = $_POST["email"] ?? "";
$missatge = $_POST["missatge"] ?? "";

// 3. Conexión a la BD
require __DIR__ . "/db.php";

// 4. Guardar en la BD
try {
    $sql = "INSERT INTO contactos (nombre, telefono, correo, mensaje) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    // Aquí usamos las mismas variables que hemos definido en el paso 2
    $result = $stmt->execute([$nom, $telefon, $email, $missatge]);

    // 5. Mensaje de éxito
    if ($result) {
        $pageTitle = "Éxito"; 
        require __DIR__ . "/includes/header.php";
        echo "<h1>¡Mensaje enviado con éxito!</h1>";
        echo "<p>Gracias, $nom. Hemos guardado tu mensaje en la base de datos.</p>";
        echo "<a href='contacte.php'>Volver al formulario</a>";
        require __DIR__ . "/includes/footer.php";
    }
} catch (PDOException $e) {
    echo "Error al guardar el mensaje: " . $e->getMessage();
}
?>