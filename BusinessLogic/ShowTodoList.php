<?php

/**
 * Menampilkan Todo Di List
 */
function showTodoList (){
    global $todoList; // Mengakses Variabel todoList Yang Berada Di Global Scope

    echo "- Aplikasi TodoList -".PHP_EOL;
    foreach ($todoList as $number => $value){ //Menggunakan Perulangan foreach
        echo "$number.$value".PHP_EOL; // $number Akan Diambil Dari Nilai Array $todoList
    }
}
/**
 * Line (11) Menggunakan Perulangan foreach, $todoList Sendiri Digunakan Untuk Memberi Value Ke
 * $number Dengan Lewat Nilai Arraynya $todoList
 * Line (12) $value Di Isi Dengan Valuenya $todoList ( Secara Berurutan ) Seperti Inde Yang
 * Diberikan $todoList Ke $number.
 */