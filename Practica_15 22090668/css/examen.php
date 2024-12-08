<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAMEN WEB</title>
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <h1>PROBLEMA FOTOVOLTAICA</h1>
    <p><strong>Estudiante:</strong> Juarez Bahena Carlos Adrian.<br>
    <strong>No. de control:</strong> 22090668</p>

    <div class="container">
        <div class="section problema">
            <h2>Problema</h2>
            <p>Se dispone de una placa fotovoltaica de 60x30 cm, cuyo rendimiento es del 20%. 
                Determinar la cantidad de energía eléctrica (kWh) que generará para acumular en una batería, 
                si la placa ha estado funcionando durante 8 horas, siendo el coeficiente de radiación de 0.9 cal/min·cm². 
                Se admite que no hay pérdidas ni en el transporte, ni en la carga de la batería.</p>
        </div>
        <div class="section imagen">
            <h2>Imagen</h2>
            <img src="http://localhost/public_html/Practica_15 22090668/images/placa.jpg" style="width:100%;">

        </div>
    </div>

    <div class="container">
        <div class="section datos">
            <h2>Datos</h2>
            <table>
                <tr>
                    <th>Parámetro</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Área de la placa</td>
                    <td>60 x 30 cm = 1800 cm²</td>
                </tr>
                <tr>
                    <td>Rendimiento</td>
                    <td>20%</td>
                </tr>
                <tr>
                    <td>Horas de funcionamiento</td>
                    <td>8 horas</td>
                </tr>
                <tr>
                    <td>Coeficiente de radiación</td>
                    <td>0.9 cal/min·cm²</td>
                </tr>
            </table>
            <p>Q = Energia Generada <br> k= Coeficiente de Radiacion <br>
            t= Tiempo en minutos<br>
            S = Area en cm2<br>
            r= Rendimiento 
        </p>
        </div>

        <div class="section formulas">
            <h2>Fórmulas</h2>
            <p>Q = k * t * S * r en Kcal<br>Convertir a kWh: 1 cal = 0.00116222 Wh</p>
        </div>
    </div>

    <div class="container">
        <div class="section solucion">
            <h2>Solución</h2>
            <p>
                La placa fotovoltaica tiene una superficie de 60 x 30 cm² = 1800 cm².<br>
                Funciona durante 8 horas = 8 x 60 min = 480 min.<br><br>
                Q = k * t * S = 0.9 cal/min·cm² * 480 min * 1800 cm² = 777,600 cal = 777.6 Kcal.<br><br>
                El rendimiento es del 20%, por tanto la energía obtenida es:<br> 777.6 * 0.2 Kcal = 155.52 Kcal.<br> <br>
                Convertir a kWh: 155.52 Kcal * 0.00116222 Wh/cal = 0.18 kWh.
            </p>
        </div>
        <div class="section resultado">
            <h2>Resultado</h2>
            <?php
            function calcularEnergia($area, $coefRadiacion, $tiempo, $rendimiento) {
                $energiaCal = $area * $coefRadiacion * $tiempo * $rendimiento;
                $energiaWh = $energiaCal * 0.00116222; // Conversión de cal a Wh
                $energiaKWh = $energiaWh / 1000; // Conversión de Wh a kWh
                return $energiaKWh;
            }

            $area = 60 * 30; // cm²
            $coefRadiacion = 0.9; // cal/min·cm²
            $tiempo = 8 * 60; // min
            $rendimiento = 0.2; // 20%

            $energiaKWh = calcularEnergia($area, $coefRadiacion, $tiempo, $rendimiento);

            echo "<p>Energía eléctrica generada: " . number_format($energiaKWh, 4) . " kWh</p>";
            ?>
        </div>
    </div>
</body>
</html>
