
<?php

$lat_salida = $_POST['la_sal'];
$lon_salida = $_POST['lo_sal'];
$lat_llegada = $_POST['la_lle'];
$lon_llegada = $_POST['lo_lle'];


function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
	// Cálculo de la distancia en grados
	$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));

	// Conversión de la distancia en grados a la unidad escogida (kilómetros, millas o millas naúticas)
	switch($unit) {
		case 'km':
			$distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
			break;
		case 'mi':
			$distance = $degrees * 69.05482; // 1 grado = 69.05482 millas, basándose en el diametro promedio de la Tierra (7.913,1 millas)
			break;
		case 'nmi':
			$distance =  $degrees * 59.97662; // 1 grado = 59.97662 millas naúticas, basándose en el diametro promedio de la Tierra (6,876.3 millas naúticas)
	}
	return round($distance, $decimals);
}

$point1 = array("lat" => $lat_salida, "long" => $lon_salida); 
$point2 = array("lat" => $lat_llegada, "long" => $lon_llegada); 
$km = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']); // Calcular la distancia en kilómetros (por defecto)
$mi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'mi'); // Calcular la distancia en millas
$nmi = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long'], 'nmi'); // Calcular la distancia en millas naúticas
// echo "<h2>La distancia entre madrid y un pueblo de ciudad real es de $km km (= $mi millas = $nmi millas naúticas)</h2>";
if($km > 50) {
	$curva = ($km / 50) * 11;
	$total = $km + $curva; 
} else {
	$total = $km + 5;
}
echo $total;