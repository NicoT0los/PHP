<?php
// Comprovem si s'ha enviat el formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenim la nota de l'usuari
    $nota = $_POST['nota'];
    
    // Comprovem que la nota estigui dins de l'interval vàlid (1-10)
    if ($nota >= 1 && $nota <= 10) {
        // Comprovem si ha aprovat o suspès
        if ($nota >= 5) {
            echo "Aprovat";
        } else {
            echo "Suspès";
        }
    } else {
        echo "Nota no vàlida. Introdueix un número entre 1 i 10.";
    }
}
?>

<!-- Formulari per introduir la nota -->
<form method="POST">
    <label for="nota">Introdueix un número de l'1 al 10: </label>
    <input type="number" name="nota" min="1" max="10" required>
    <button type="submit">Enviar</button>
</form>

