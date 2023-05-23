<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../Helper/Input.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

function viewAddTodoList(){
    echo "- Menambahkan Todo -".PHP_EOL;

    $todo = input("Masukkan TODO (x Untuk Membatalkan)");

    if ($todo == "x"){
        echo "Batal Menambah Todo".PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
/**
 * Meng Require Once AddTodoList Untuk Jika $todo Sudah Di Isi Oleh User, Maka Akan Dibuatkan
 * Nomor Untuk Si todo Yang Baru Tersebut
 */