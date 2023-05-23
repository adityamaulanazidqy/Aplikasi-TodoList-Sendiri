<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Aditya");
addTodoList("Maulana");
addTodoList("Zidqy");
addTodoList("Alfan");
addTodoList("Nur Hadi");
/**
 * Menambah Beberapa Nilai TodoList
 */

showTodoList();
/**
 * Akan Muncul TodoList 5
 */

removeTodoList(3);
/**
 * Menghapus TodoList Ke 3
 */
showTodoList();
/**
 * TodoList Tinggal 4, Karena Sudah Dihapus di Line 19
 */
$false = removeTodoList(5);
var_dump($false);
/**
 * Mengecek Apakah Error Jika Kita Menghapus Number Yang Melebihi List TodoList
 */

 showTodoList(); // Mengecek Apakah ada yang terhapus