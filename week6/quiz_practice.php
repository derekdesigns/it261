<!DOCTYPE html>
<html lang="en">
<head>
<title>Quiz Practice</title>
</head>

<body>

<?php

function area_volume($length, $width, $height) {

$area = $length * $width;

$volume = $length * $width * $height;

return array($area, $volume);

}

$result_array = area_volume(5, 5, 2);

echo "Area: " . $result_array[0] . "<br />";

echo "Volume: " . $result_array[1] . "<br />";

list($area_result, $volume_result) = area_volume(20, 10, 6);
echo "Area: " . $area_result . "<br />";
echo "Volume: " . $volume_result . "<br />";

?>

</body>
</html>