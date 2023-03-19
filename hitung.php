<?php

$pilihan = $_POST['hitung'];

switch($pilihan){
    case 'persegi':
        $p = $_POST['panjang'];
        $keliling = 4 * $p;
        $luas = $p * $p;
        break;
    case 'pPanjang':
        $p = $_POST['panjang'];
        $l = $_POST['lebar'];
        $keliling = 2 * $p + 2 * $l;
        $luas = $p * $l;
        break;
    case 'jajar':
        $a = $_POST['alas'];
        $t = $_POST['tinggi'];
        $b = $_POST['bawah'];
        $s = $_POST['samping'];
        $keliling = 2 * $b + 2 * $s;
        $luas = $a * $t;
        break;
    case 'segitiga':
        $a = $_POST['alas'];
        $t = $_POST['tinggi'];
        $s = $_POST['samping'];
        $keliling = $a + $t + $s;
        $luas = 0.5 * $a * $t;
        break;
    case 'layang':
        $d1 = $_POST['diagonal1'];
        $d2 = $_POST['diagonal2'];
        $s1 = $_POST['sisi1'];
        $s2 = $_POST['sisi2'];
        $s3 = $_POST['sisi3'];
        $s4 = $_POST['sisi4'];
        $keliling = $s1 + $s2 + $s3 + $s4;
        $luas = 0.5 * $d1 * $d2;
        break;

}
?>



