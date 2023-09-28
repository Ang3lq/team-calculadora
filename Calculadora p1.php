<<!DOCTYPE html>
<html>
<head>
    <title>Calculadora en PHP</title>
</head>
<body>
    <h1>Calculadora en PHP</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>
        
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    echo "<p style='color: red;'>Error: No se puede dividir por cero.</p>";
                }
                break;
            default:
                echo "<p style='color: red;'>Operación no válida.</p>";
                break;
        }

        echo "<h2>Resultado:</h2>";
        echo "<p>{$num1} {$operacion} {$num2} = {$resultado}</p>";
    }
    ?>
</body>
</html>
