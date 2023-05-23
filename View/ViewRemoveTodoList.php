<?php

require_once __DIR__."/../Helper/Input.php";
require_once __DIR__."/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList(){
    echo "- Menghapus Todo -".PHP_EOL;

    $pilihan = input("Nomor Berapa (x Untuk Membatalkan)");

    if ($pilihan == "x"){
        echo "Batal Menghapus Todo".PHP_EOL;
    } else {
        $succes = removeTodoList($pilihan);
        
        if ($succes){
            echo "Succes Menghapus Todo Nomor $pilihan".PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo Nomor $pilihan".PHP_EOL;
        }
    }
}

/**
 * Line (10) Jika Inputan Yang Diberi Ke $pilihan Ber Value x, Maka Batal Menghapus Todo.
 * Dan Jika Inputan Yang Diberi Ke $pilihan Ber Value Selain x, Maka Dikatakan Succes.
 * Line (13) Prosses Penghapusan Todo. removeTodoList Ditaruh Di $succes Hanya Untuk
 * Supaya Dia Bisa Dijadikan Percabangan Line (15).
 */