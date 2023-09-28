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