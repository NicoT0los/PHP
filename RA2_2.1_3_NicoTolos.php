<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Agafar els números introduïts pel formulari
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    // Trobar el número més gran
    $max = max($numero1, $numero2, $numero3);

    // Mostrar el resultat
    echo "El número més gran és: $max";
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trobar el número més gran</title>
</head>
<body>
    <h1>Introdueix tres números</h1>
    <form method="post">
        <label for="numero1">Primer número:</label>
        <input type="number" name="numero1" required><br><br>

        <label for="numero2">Segon número:</label>
        <input type="number" name="numero2" required><br><br>

        <label for="numero3">Tercer número:</label>
        <input type="number" name="numero3" required><br><br>

        <input type="submit" value="Trobar el més gran">
    </form>
</body>
</html>

