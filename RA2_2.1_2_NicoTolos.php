<?php
// Comprovem si el formulari ha estat enviat
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenim el número introduït pel usuari
    $numero = $_POST['numero'];

    // Comprovem si el número és parell o imparell
    if ($numero % 2 == 0) {
        echo "El número " . $numero . " és parell.";
    } else {
        echo "El número " . $numero . " és imparell.";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovació de Parell o Imparell</title>
</head>
<body>
    <h1>Introdueix un número per comprovar si és parell o imparell</h1>
    <form method="POST">
        <label for="numero">Número: </label>
        <input type="number" name="numero" required>
        <button type="submit">Comprovar</button>
    </form>
</body>
</html>
