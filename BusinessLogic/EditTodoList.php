<?php

require_once "View/ViewShowTodoList.php";
require_once "Helper/Input.php";
/**
 * Mengedit TodoList
 */
function editTodoList() {
    global $todoList;

    echo "- Edit TodoList -".PHP_EOL;

    $number = input("TodoList Nomor Berapa");

    if ($number > sizeof($todoList)){
        echo "Gagal Mengedit Todo, Isi Todo Terlebih Dahulu".PHP_EOL;
        viewShowTodoList();
    }else if ($number == 0){
        echo "Gagal Mengedit Todo, Perintah Tidak Dimengerti".PHP_EOL;
        viewShowTodoList();
    }

    $newTodo = (string) input ("Masukkan Todo Baru");

    $todoList[$number] = $newTodo;
}