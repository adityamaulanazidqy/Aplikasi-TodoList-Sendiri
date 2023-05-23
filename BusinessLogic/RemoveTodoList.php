<?php

/**
 * Menghapus Todo Di List
 */

 function removeTodoList (int $number): bool {

    global $todoList;

    if ($number > sizeof($todoList)){
        return false;
    }
    /**
     * Jika Nilai Input $number Lebih Besar Dari Nilai Indexnya $todoList Maka Dinyatakan
     * Tidak Valid
     */
    for ($i = $number; $i < sizeof($todoList);$i++){
        $todoList[$i] = $todoList[$i + 1];
    }
    /**
     * Nilai $i Sama Dengan $number, Jika Value $i Lebih Kecil Dari Nilai Indexnya
     * $todoList, Maka $i Ditambah 1.
     * Jika Sudah, Tambah Lagi Nilai Array $todoList Dengan 1
     */

     unset($todoList[sizeof($todoList)]);
     /**
      * Menghapus Array Dari $todoList Yang Dimana Nilai Arraynya Didapat Dari Prosesses
      * Line 18 - 20
      */

      return true;
    
 }