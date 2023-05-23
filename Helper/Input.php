<?php

function input(string $info){
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);// Supaya Space Dan WaitSpace Di Sekitar Hilang
}

/**
 * Function input Memiliki Parameter $info Yang Berjeniskan Data String Untuk Mengambil inputan dari client
 * Line (4) Untuk Mengambil Inputan Dari Client, Tidak Diberi PHP_EOL Karena Line (5) Digunakan Untuk Wadah Dari
 * Inputan Client. Terus Mengembalikan nilai.
 * 
 */