<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4886. Autores</title>
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
            <h1>4886. Autores</h1>
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
            Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que
            los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest,
            Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y
            Pratt. La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento
            utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando
            sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt) Apellidos
            completos separados por guiones. Encontramos que la mezcla de dos convenciones en un papel es estéticamente
            desagradable y quisiera que usted escribiera un programa que transformara variaciones largas en cortas
        </p>
        <h2>Entrada</h2>
        <p>
            La prmera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una letra mayúscula.
             Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás caracteres serán letras minúsculas.
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
            </tr>
            <tr>
                <td>Knuth-Morris-Pratt</td>
                <td>KMP</td>
            </tr>
            <tr>
                <td>Mirko-Slavko</td>
                <td>MS</td>
            </tr>
            <tr>
                <td>0000000</td>
                <td>00000000</td>
            </tr>
            <tr>
                <td>Pasko-Patak</td>
                <td>PP</td>
            </tr>
        </table>
        <div class="form-container">
        <form action="AUTORES.php" method="post">
        <input type="text" name="txtPal">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){ 
            $may=$_POST['txtPal'];
            $cm=array();
            $t=strlen($may);
            echo "Abrev: ";
            for($i=0;$i<$t;$i++){
                if(ord($may[$i])>=65 and ord($may[$i])<=90){
                    echo $may[$i];
                }
            }
        }
    ?>
        </div>
    </main>
</body>

</html>
