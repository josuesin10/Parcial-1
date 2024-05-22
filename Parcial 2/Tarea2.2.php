<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial 2</title>
    <link rel="stylesheet" href="CSS/Tarea2.2.css">
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
    <section>
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
                <h1>Juego de letras</h1>
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
            En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el teclado: las letras Q, A y Z reciben el valor 1.
            las letras W, S y X reciben el valor 2
            y así sucesivamente hasta que las letras O y L reciben el valor 9
            y la letra P recibe el valor 0
            Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor 7+1+7=15.
            Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor v de una palabra p.
            </p>

            <h2>Entrada</h2>
            <p>
                Un numero entero v
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
                    <td>UAM</td>
                    <td>15</td>
                </tr>
            </table>
            <div align="center">
                <?php
                function sumarValores($texto)
                {
                    $arr=array(
                    'Q'=> 1,
                    'W'=> 2,
                    'E'=> 3,
                    'R'=> 4,
                    'T'=> 5,
                    'Y'=> 6,
                    'U'=> 7,
                    'I'=> 8,
                    'O'=> 9,
                    'P'=> 0,
                    'A'=> 1,
                    'S'=> 2,
                    'D'=> 3,
                    'F'=> 4,
                    'G'=> 5,
                    'H'=> 6,
                    'J'=> 7,
                    'K'=> 8,
                    'L'=> 9,
                    'Z'=> 1,
                    'X'=> 2,
                    'C'=> 3,
                    'V'=> 4,
                    'B'=> 5,
                    'N'=> 6,
                    'M'=> 7
                    );
                $texto=strtoupper($texto);
                    $suma=0;

                    for($i=0; $i<strlen($texto); $i++)
                    {
                        $letra=$texto[$i];
                        if(array_key_exists($letra, $arr))
                        {
                            $suma += $arr[$letra];
                        }
                    }
                    return $suma;
                } 
                if($_POST)
                {
                    $texto=$_POST["txtTexto"];
                    $resultado=sumarValores($texto);
                    echo "<p>Suma de los valores es: ". $resultado . "</p>";
                }
                ?>
            </div>
            <form action="Tarea2.2.php" method="post">
                <table>
                    <tr>
                         <td>Entrada</td>
                         <td><input type="text" name="txtTexto"></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td><input type="submit" name="Enviar"></td>
                    </tr>
                </table>
            </form>
        </main>
    </section>
</body>
</html>
