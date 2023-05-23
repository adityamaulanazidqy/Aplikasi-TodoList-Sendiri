<?php

/**
 * Menambah Todo Ke List
 */
function addTodoList(string $todo){
    global $todoList;

    $number = sizeof($todoList) + 1;
    /**
     * Mengecek Apakah Ada Data di $todoList
     */

    $todoList[$number] = $todo;
    /**
     * $todoList Mempunyai Index $number yang dimana Valuenya ialah 1, Index 1 Tersebut
     * Dijadikan Tempat Untuk Menyimpan Data Todo Yang Pertama
     * nb   : Jika function addTodoList Dipanggil Lagi, Maka Akan Dilulang Lagi, Tapi Hanya Nilai Index Dari $todoListnya
     * Sudah Berubah
     */
}