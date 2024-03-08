<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulota</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #080808;
            display: flex;
            min-height: 100vh;
            flex-direction: column; /* Alinea los elementos en columna */
            color: #fff; /* Color de texto blanco */
        }

        .container-hero {
            background: linear-gradient(to right, #333, #000);
            text-align: center;
        }

        .container-navbar {
            background: linear-gradient(to bottom, #333, #000);
            text-align: center;
        }

        h1 /*Titulo " formulota" */
        {
            font-family: 'Didot', serif;
            background: linear-gradient(to right, #555, #ff0000);
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }

        h2,
        p {
            width: 80%;
            margin: 0 auto; /* Centra el contenedor */
            padding: 10px;
            border-bottom: 1px solid #ccc; /* Línea delgada debajo */
        }

        .form-title {
            border-bottom: none; /* Quitar la línea delgada debajo de este h2 */
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td 
        {
            border: 1px solid #333;
            border-collapse: collapse;
            background-color: #1c1a1a;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }
        table.example-table 
        {
            border-collapse: collapse;
            width: auto; /* Cambiado a ancho automático */
            margin: 20px auto;
            background-color: #1c1a1a; /* Color de fondo de la tabla */
        }

        table.example-table th, table.example-table td 
        {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            background-color: #0d0c0c; /* Color de fondo de las celdas */
            width: auto; /* Ajuste automático del ancho de la celda */
        }
        .form-container 
        {
            text-align: center;
            margin: 0 auto;
        }
    </style>
</head>

<body>
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
            <h1>Formulota</h1>
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
                    <td>Límite de tiempo (caso)</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            Diseñar un programa que pregunte los valores de las variables x, y, z y evalúe la función f(x, y, z).
        </p>
        <p>
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block" style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 30px; color:#6d8777">
                <mi>f</mi>
                <mo>(</mo>
                <mi>x</mi>
                <mo>,</mo>
                <mi>y</mi>
                <mo>,</mo>
                <mi>z</mi>
                <mo>)</mo>
                <mo>=</mo>
                <mfrac>
                  <mrow>
                    <mfrac>
                      <mrow>
                        <mi>x</mi>
                        <mo>+</mo>
                        <mi>y</mi>
                      </mrow>
                      <mrow>
                        <mn>2</mn>
                        <mi>x</mi>
                      </mrow>
                    </mfrac>
                    <mo>+</mo>
                    <mfrac>
                      <mrow>
                        <msup><mi>x</mi><mn>3</mn></msup>
                        <mo>+</mo>
                        <msup><mi>y</mi><mn>3</mn></msup>
                      </mrow>
                      <mrow>
                        <msup><mi>x</mi><mn>2</mn></msup>
                        <mo>+</mo>
                        <msup><mi>y</mi><mn>2</mn></msup>
                      </mrow>
                    </mfrac>
                  </mrow>
                  <mrow>
                    <msup><mi>x</mi><mn>2</mn></msup>
                    <mo>+</mo>
                    <msup><mi>y</mi><mn>2</mn></msup>
                    <mo>+</mo>
                    <msup><mi>z</mi><mn>2</mn></msup>
                  </mrow>
                </mfrac>
              </math> 
        </p>
        <h2>Entrada</h2>
        <p>
            El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
        </p>

        <h2>Salida</h2>
        <p>
            La respuesta, o salida a la consola, será el valor de la función f(x, y, z) redondeado a 6 decimales.
            Nota: Se puede usar la función `toFixed(numero, decimales)` para ajustar la salida.
        </p>

        <center>
            <h2 class="form-title">Ejemplos</h2>
        </center>

        <table class="example-table">
            <tr>
                <th>Entrada</th>
                <th>Descripción</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>1 <br> 2 <br> 3 <br> </td>
                <td>0.235714</td>
                <td>0.235714285714286</td>
            </tr>
            <tr>
                <td>a <br> 5 <br> 6 <br> </td>
                <td>0.074477</td>
                <td>0.0744773519163764</td>
            </tr>
            <tr>
                <td>7 <br> 8 <br> 9 <br> </td>
                <td>0.044525</td>
                <td>0.0445247435713634</td>
            </tr>
        </table>

        <div class="form-container">
        <form action="Formulota.php" method="post">
            <label for="campo1">Numero 1:</label>
            <input type="text" name="txtnum1"> <br>

            <label for="campo1">Numero 2:</label>
            <input type="text" name="txtnum2"> <br>

            <label for="campo1">Numero 3:</label>
            <input type="text" name="txtnum3"> <br>

            <input type="submit" value="Enviar"> <br>
            </form>
        </div>
            <?php
            if($_POST)
            {
              $x=$_POST["txtnum1"];
              $y=$_POST["txtnum2"];
              $z=$_POST["txtnum3"];
    
              $f1=($x+$y)/(2*$x);
              $f2=(pow($x,3)+pow($y,3))/(($x*$x)+($y*$y));
              $f3=($x*$x)+($y*$y)+($z*$z);
              $ft=($f1+$f2)/($f3);
              echo round($ft,6);
            }
          ?>
    </main>
</body>
</html>
