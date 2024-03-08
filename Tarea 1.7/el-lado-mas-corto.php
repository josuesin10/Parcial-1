<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El lado mas corto</title>
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

        table.example-table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #1c1a1a; /* Color de fondo de la tabla */
        }

        table.example-table th, table.example-table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            background-color: #0d0c0c; /* Color de fondo de las celdas */
        }
        .form-container 
        {
            text-align: center;
            margin: 0 auto;
            margin-left: 590px;
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
            <h1>El lado mas corto</h1>
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
            Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
        </p>
        <img src="el lado mas corto.png"alt="hola" width="300" height="200" style= "margin-left: 140px; margin-top: 25px;">
        <h2>Entrada</h2>
        <p>
            El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
        </p>

        <h2>Salida</h2>
        <p>
            Ocho reales x<span style="font-size: x-small;">1</span>, x<span style="font-size: x-small;">2</span>
            , x<span style="font-size: x-small;">3</span>, x<span style="font-size: x-small;">4</span>, 
            y<span style="font-size: x-small;">1</span>, y<span style="font-size: x-small;">2</span>,
            y<span style="font-size: x-small;">3</span>, y<span style="font-size: x-small;">4</span>.
            Puedes suponer que 0 &le; x<span style="font-size: x-small;">i</span>,
            y<span style="font-size: x-small;">i</span> &le; 100 y que los vértices se listan ordenados en el
            sentido de las manecillas del reloj.
        </p>
        <center>
            <h2 class="form-title">Ejemplos</h2>
        </center>
        <table class="example-table">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>10.1 10.2 <br>
                    20.2 10.3 <br>
                    22.3 4.1 <br>
                    7.5 0.9 <br>
                </td>
                <td>6.545991</td>
            </tr>
        </table>

        <div class="form-container">
            <form action="el-lado-mas-corto.php" method="post" style="border: #273527 2px solid; width: 200px; text-align: center;">
                <div>
                    numero 1:
                        <input type="text" name="txtnum11"> <br>
                        numero 2:
                        <input type="text" name="txtnum22"> <br>
                        numero 3:
                        <input type="text" name="txtnum33"> <br>
                        numero 4:
                        <input type="text" name="txtnum4"> <br>
                    </div>
                    <div>
                    numero 5:
                        <input type="text" name="txtnum5"> <br>
                        numero 6:
                        <input type="text" name="txtnum6"> <br>
                        numero 7:
                        <input type="text" name="txtnum7"> <br>
                        numero 8:
                        <input type="text" name="txtnum8"> <br>
                    </div>
                    <input type="submit" value="Enviar"> <br>
                </form>
                <?php
                if($_POST)
                {
                $x1=$_POST["txtnum11"];
                $y1=$_POST["txtnum22"];
                $x2=$_POST["txtnum33"];
                $y2=$_POST["txtnum4"];
                $x3=$_POST["txtnum5"];
                $y3=$_POST["txtnum6"];
                $x4=$_POST["txtnum7"];
                $y4=$_POST["txtnum8"];
        
                $c=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
                $d=sqrt(($x3-$x2)*($x3-$x2)+($y3-$y2)*($y3-$y2));
                $f=sqrt(($x4-$x3)*($x4-$x3)+($y4-$y3)*($y4-$y3));
                $g=sqrt(pow($x1-$x4,2)+pow($y1-$y4,2));
                if($c<$d and $c<$f and $c<$g)
                {
                    echo round($c,6);
                }
                else if($d<$f and $d<$g)
                {
                    echo round($d,6);
                }
                else if($f<$g)
                {
                    echo round($f,6);
                }
                else
                {
                    echo round($g,6);
                }
                }
            ?>
        </div>
    </main>
</body>

</html>
