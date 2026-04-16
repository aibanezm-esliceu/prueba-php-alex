<?php 
$pageTitle = "Contacto - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Formulario de Contacto</h1>
<p>Envíanos un mensaje y lo guardaremos de forma segura en la base de datos.</p>

<form action="create-contact.php" method="POST" style="max-width: 400px; display: flex; flex-direction: column; gap: 15px;">
    
    <label>Nombre:</label>
    <input type="text" name="nom" required style="padding: 8px;">
    
    <label>Teléfono:</label>
    <input type="text" name="telefon" style="padding: 8px;">
    
    <label>Email:</label>
    <input type="email" name="email" required style="padding: 8px;">
    
    <label>Mensaje:</label>
    <textarea name="missatge" rows="4" required style="padding: 8px;"></textarea>
    
    <button type="submit" style="padding: 10px; background-color: #2c3e50; color: white; border: none; cursor: pointer;">Enviar Mensaje</button>
</form>

<?php require __DIR__ . "/includes/footer.php"; ?>