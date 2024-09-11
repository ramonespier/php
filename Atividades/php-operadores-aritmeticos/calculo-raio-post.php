<?php
define("PI", 3.14);

$raio = $_POST['raio'];
$perimetro = 2 * PI * $raio;
$area = PI * ($raio**2);

echo "O perimêtro é $perimetro e a área é $area m²";

?>