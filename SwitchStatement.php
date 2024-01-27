<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda Lulus tapi kemungkinan salah jurusan" . PHP_EOL;
}