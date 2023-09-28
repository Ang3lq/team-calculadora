<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="imagen.css">
	<link rel="icon" href="data:image/png;base64,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">
	<!-- Font Awesome -->
	<link
	  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	  rel="stylesheet"
	/>
	<!-- Google Fonts -->
	<link
	  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	  rel="stylesheet"
	/>
	<!-- MDB -->
	<link
	  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
	  rel="stylesheet"
	/>	
	<!-- MDB -->
	<script
	  type="text/javascript"
	  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
	></script>
<body  >
<nav class="navbar navbar-light" style="background: #099934   ">
	 <a class="nav-link active" aria-current="page"><font face="Century Gothic"><center><h1 style="color:white;">Calculadora</h1></center></font></a>
  <div class="container-fluid">
     </div>
</nav>
</head>
<body>
    <br>
    <br>
    <center>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Numero 1:</label> <br>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Número 2:</label> <br>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="operacion">Operación:</label> <br>
        <select name="operacion" id="operacion">
            <option value="mas">Suma</option>
            <option value="menos">Resta</option>
            <option value="por">Multiplicación</option>
            <option value="entre">División</option>
        </select><br><br>
        
        <input type="submit" value="Calcular">
    </form>
    </center>
    <center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        $resultado = 0;

        switch ($operacion) {
            case "mas":
                $resultado = $num1 + $num2;
                break;
            case "menos":
                $resultado = $num1 - $num2;
                break;
            case "por":
                $resultado = $num1 * $num2;
                break;
            case "entre":
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
    </center>
</body>
</html>
