<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body
    {
            text-align: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to left, #000, #333); /* Degradado de gris a negro */
            color: #fff; /* Color de texto blanco */
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
</style>
<body>
     <h1>Calificación de los alumnos del CBTis</h1>
     <h3>Descripcion</h3>
     <!-- <center> -->
     <p text-align: center;>
        - Generar un arreglo de entre 1 y 1000 elementos. <br>
        - Cada uno de los elementos representa la calificación de todos los alumnos del CBTis  (va entre 0 y 10). <br>
        - Obtener el promedio de todas las calificaciones (2 decimales) <br>
        - Obtener la cantidad de alumnos que tienen calificaciones mayores o iguales al promedio. <br>
        - Indicar la cantidad y porcentaje de alumnos reprobados. <br>
        - Indicar la cantidad y porcentaje de alumnos aprobados. <br>
        - Calcular la desviación estándar de todos los números. <br>
        - Imprimir todos los números generados en una tabla HTML  de 30 columnas de ancho y los renglones que sean necesarios. <br>
     </p>
     <h3> Resultados xd </h3>
     <!-- </center> -->
     <?php
            $cal=array();
            $x=rand(1,1000);
            for ($i=1; $i<=$x ; $i++)
            {
                array_push($cal, rand(0,10));
            }
            $pro=0;
            for($i=0; $i<$x; $i++)
            {
                $pro=$pro+$cal[$i];
            }
            $pro=$pro/$x;
            echo "el promedio es: ". round($pro,2). "<br>";
            #SACANDO EL PROMEDIO DE LAS CALAFIVICACIONES CON DOS DECIMALES.
            echo "calificaciones iguales o mayores al promedio:". "<br>";
            for($i=0; $i<$x; $i++)
            {
                if($cal[$i]>=$pro)
                {
                    echo $cal[$i]. ", ";
                }
            }
            echo "<br>";
            $apro=0;
            $contuno=0;
            $repro=0;
            $contdos=0;
            for($i=0; $i<$x; $i++)
            {
                if($cal[$i]<6)
                {
                    $contdos++;
                    $repro=$repro+$cal[$i];
                }
                else
                {
                    $contuno++;
                    $apro=$apro+$cal[$i];
                }
            }
            $apro=($apro/$x)*100;
            $repro=($repro/$x)*100;
            echo "alumnos reprobrados: "."total de alumnos: ". $contdos.",porcentaje: ".round($repro,2). "<br>";
            echo "alumnos aprobados: "."total de alumnos: ". $contuno.",porcentaje: ".round($apro,2). "<br>";
            $sum=0;
            for($i=0; $i<$x; $i++)
            {
                $sum=$sum+abs(($cal[$i]-$pro)*($cal[$i]-$pro));
            }
            $div=$sum/$x;
            $raiz=sqrt($div);
            echo "desviación estandar: ". round($raiz,2), "<br>";
            echo "<table border='1' cellspacing='3' cellpadign='3';  border: #fff 3px solid; font-style: italic;text-align: center;'>";
            for($i=0; $i<$x; $i++)
            {
                if($i%30==0)
                {
                    echo "<tr>";
                }
                else
                {
                    echo "<th  style='text-align: left; background-color: ##000000;'>". $cal[$i]. "</th>";
                }
            }
            echo "</tr>";
            echo "</table>";
            ?>
</html>
</body>