<?php
    function penjumlahan($bil1, $bil2){
        $tambah = $bil1 + $bil2;
        return $tambah;
    }
    function pengurangan($bil1,$bil2){
        $kurang = $bil1 - $bil2;
        return $kurang;
    }
    function perkalian($bil1,$bil2){
        $kali = $bil1 * $bil2;
        return $kali;
    }
    function pembagian($bil1,$bil2){
        $bagi = $bil1 / $bil2;
        return $bagi;
    }
    function modulus($bil1,$bil2){
        $mod = $bil1 % $bil2;
        return $mod;
    }
    $bil1 = $_POST["bilangan1"];
    $bil2 = $_POST["bilangan2"];
    // tampilan
    echo "bilangan 1 = $bil1";
    echo "<br>";
    echo "bilangan 2 = $bil2";
    echo "<br>";
    echo "<br>";
    echo "Berikut merupakan hasil dari setiap operasi";
    echo "<br>";
    echo "<br>";
    //penjumlahan
    echo "PENJUMLAHAN";
    echo "<br>";
    echo "Operator : +";
    echo "<br>"; 
    $tambah = penjumlahan($bil1,$bil2);
    echo "Hasil : $tambah";
    //pengurangan
    echo "<br>"; 
    echo "<br>"; 
    echo "PENGURANGAN";
    echo "<br>"; 
    echo "Operator : -";
    echo "<br>"; 
    $kurang = pengurangan($bil1,$bil2);
    echo "Hasil : $kurang";
    //perkalian
    echo "<br>"; 
    echo "<br>";
    echo "PERKALIAN"; 
    echo "<br>"; 
    echo "Operator : *";
    echo "<br>"; 
    $kali = perkalian($bil1,$bil2);
    echo "Hasil : $kali";
    //pembagian
    echo "<br>"; 
    echo "<br>";
    echo "PEMBAGIAN";
    echo "<br>";  
    echo "Operator : /";
    echo "<br>"; 
    $bagi = pembagian($bil1,$bil2);
    echo "Hasil : $bagi";
    //modulus
    echo "<br>"; 
    echo "<br>";
    echo "MODULUS";
    echo "<br>";  
    echo "Operator : %";
    echo "<br>"; 
    $mod = modulus($bil1,$bil2);
    echo "Hasil : $mod";
?>