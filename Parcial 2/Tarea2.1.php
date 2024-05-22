<?php
function f ($a, $b)
{
   $f=(4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
    return $f;
}

function g ($a, $b)
{
    $g=(7*(int)$b-3)%($a*$a+1);
    return $g;
}

function h ($x,$y,$z)
{
    $h= ($x/$y)+3*g($z/$y,$x);
    return $h;
}

if($_POST)
{
    $entrada = explode(" ", $_POST["txtn1"]);
    $x = (int)$entrada[0];
    $y = (int)$entrada[1];
    $z = (int)$entrada[2];

    $hola= h($x,$y,$z);

    echo " <table>";
    echo "<tr>";
    echo "<td> La salida es:  </td> ";
    echo "<td>";
    echo $hola;
    echo "</td>";
    echo "</tr>";
    echo "";
    echo "</table>";
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="CSS/Tarea2.1.css">
</head>
<body>
    <header>
        <center>
            <h1>Tarea 2.1</h1>
        </center>
    </header>
    <nav>
        <ul>
            <li><a href="html/index.html">Inicio</a></li>
            <li><a href="Tarea2.1.php">Tarea 2.1</a></li>
            <li><a href="Tarea2.2.php">Tarea 2.2</a></li>
            <li><a href="html/Tarea2.7.html">Tarea 2.7</a></li>
        </ul>
    </nav>
    <form action="Tarea2.1.php" method="post">
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action=""> 
                </form>    
            </div>
        </div>
    </section>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1>Practicando funciones</h1>
        </div>
    </header>
    <main>
        <center>
            <table>
                <tr>
                    <td>Puntos</td>
                    <td>23.98</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                <tr>
                    <td>Límite de tiempo</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            Dados tres numeros x,y,z, calcula el valor de h(x,y,z), si las funciones f,g,h estan definidas. Usa enteros para realizar los cálculos, y 
    es la operación residuo de la división (también llamada módulo). Los resultados de las operaciones deben coincidir con aquellos del lenguaje C.
        <h2>Entrada</h2>
        <p>
            Tres numeros enteros x,y,z separados por un espacioPuedes suponer que 1 < x,y,z < 100 y que no se produciran diviciones entre cero
</p>

<h2>Salida</h2>
<p>
    El entero obtenido a evaluar h(x,y,z)
</p>

<center>
    <h2 class="form-title">Ejemplo</h2>
</center>

<table class="example-table">
    <tr>
        <th>Entrada</th>
        <th>Salida</th>
    </tr>
    <tr>
        <td>-10 -4 18</td>
        <td>-36</td>
    </tr>
</table>

<div align="center">
    <form action="Tarea2.1.php" method="post">
        <table>
            <tr>
                 <td>Entrada</td>
                 <td><input type="text" name="txtn1"></td>
                 <td><input type="text" name="txtn2"></td>
                 <td><input type="text" name="txtn3"></td>
            </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="Enviar"></td>
            </tr>
        </table>
    </form>
    <?php
    if($_POST)
    {
        $entrada = explode(" ", $_POST["txtn1"]);
        $x = (int)$entrada[0];
        $y = (int)$entrada[1];
        $z = (int)$entrada[2];
        function f ($a, $b)
        {
           $f=(4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
            return $f;
        }

        function g ($a, $b)
        {
            $g=(7*(int)$b-3)%($a*$a+1);
            return $g;
        }

        function h ($x,$y,$z)
        {
            $h= ($x/$y)+3*g($z/$y,$x);
            return $h;
        }

        $hola= h($x,$y,$z);

        echo " <table>";
        echo "<tr>";
        echo "<td> La salida es:  </td> ";
        echo "<td>";
        echo $hola;
        echo "</td>";
        echo "</tr>";
        echo "";
        echo "</table>";
    }
    ?>
</div>
</main>
</body>
</html>
