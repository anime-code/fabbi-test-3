<?php
$array = [ 5, 4, 7, 9, -10, 13, 93, 14, 15];
rsort($array);
$data = null;
$newArray = [];
$newArray1 = [];
//find min distance
for ($i = 0; $i < count($array); $i++) {
    if (isset($array[$i + 1])) {
        $data = $array[$i] - $array[$i + 1];
    }
    if ($data >= 0) {
        array_push($newArray, $data);
    }
}

$minDistance = min($newArray);
for ($i = 0; $i < count($array); $i++) {
    if (!empty($array[$i + 1])) {
        $data = $array[$i] - $array[$i + 1];
        if ($data === $minDistance) {
            $result = "[" . $array[$i] . "," . $array[$i + 1] . "]";
            array_push($newArray1, $result);
        }
    }
}
print_r($newArray1);