<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIT DE PARIDAD</title>
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
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 24px;
            margin: 0;
            color: #333;
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #777, #FF0000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        .navbar h1 span {
            display: inline-block;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 10px;
            padding: 0;
        }

        .navbar ul li {
            margin-right: 35px;
            position: relative;
        }

        .navbar a {
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            position: relative;
            color: #333;
            background: linear-gradient(to right, #777, #FF0000);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
        .navbar a:hover::after 
        {
            content: '';
            position: absolute;
            width: 50%;
            height: 5px; /* Reducí el valor para hacer la línea más delgada */
                background-color: #ffffff;
            /* Cambia el color de la línea al poner el cursor */
            bottom: -5px;
            left: 25%;
        }
        .navbar a:hover {
            cursor: pointer;
        }
        .navbar 
        {
            border-bottom: 1px solid #ccc; /* Línea de separación */
            margin-bottom: 20px;
        }
        hr 
        {
            margin: 20px 0; /* Margen arriba y abajo */
            border: none;
            border-top: 2px solid #ccc; /* Línea de separación */
            width: 100%; /* Ancho completo */
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
            <nav class="navbar container">
                <ul>
                    <li><a href="Index.php">Menu Principal</a></li>
                    <li><a href="BIT DE PARIDAD.php">Bit de Paridad</a></li>
                    <li><a href="AUTORES.php">Autores</a></li>
                    <li><a href="ADQUISICIÓN DE LETRAS.php">Adquisición de Letras</a></li>
                </ul>
            </nav>
            <h1>4352. Bit de paridad </h1>
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
                    <td>Límite de tiempo (total)</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                    <td>10 KiB</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
            Un bit de paridad es un dígito binario que indica si el número de bits con un valor de 1 en un conjunto de bits es par o impar. Los bits
            de paridad conforman el método de detección de errores más simple. Existen dos variantes de este método: <br>

            En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad se establece en uno y por tanto la suma del total anterior con este
            bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.
            Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
        </p>
        <ul style="text-align: left; margin-left: 150px;">
            <li>Bit de paridad par</li>
            <li>Bit de paridad impar</li>
        </ul>
        <h2>Entrada</h2>
        <p>
            La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.
        </p>
        <h2>Salida</h2>
        <p>
            La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.
        </p>
        <center>
            <h2 class="form-title">Ejemplo</h2>
        </center>

        <table class="example-table">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
                <td>Descripcion</td>
            </tr>
            <tr>
                <td>1010001</td>
                <td>10100011</td>
                <td>El número de bits con valor de 1 en la entrada es 3. La salida son los mismos siete bits de la entrada
                    y se añade un bit 1 para que en total el número de bits con valor 1 sea par.
                </td>
            </tr>
            <tr>
                <td>1101001</td>
                <td>11010010</td>
                <td>
                    El número de bits con valor de 1 en la entrada es 4. La salida son los mismos siete bits de la entrada y
                    se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par.
                </td>
            </tr>
            <tr>
                <td>0000000</td>
                <td>00000000</td>
                <td>
                    El número de bits con valor de 1 en la entrada es 0. La salida son los mismos siete bits de la entrada
                    y se añade un bit 0 para que en total el número de bits con valor 1 se mantenga par (cero es un número par).
                </td>
            </tr>
            <tr>
                <td>1111111</td>
                <td>11111111</td>
                <td>
                    El número de bits con valor de 1 en la entrada es 7. La salida son los mismos siete bits de la entrada y 
                    se añade un bit 1 para que en total el número de bits con valor 1 sea par.
                </td>
            </tr>
        </table>
        <div class="form-container">
        <form action="BIT DE PRIORIDAD.php" method="post">
        <input type="text" name="txtPal">
        <input type="submit" value="Enviar">
        </form>
        <?php
        if($_POST){ 
        $bit=$_POST['txtPal'];
        $t=strlen($bit);
        $z=0;
        echo "Fin: ";
        for($i=0;$i<$t;$i++){
            if($bit[$i]==1){
                $z++;
            }
        }
        echo $bit;
        if($z%2==0){
            echo "0";
        }
        else {echo "1";}
    }
?>
        </div>
    </main>
</body>

</html>
