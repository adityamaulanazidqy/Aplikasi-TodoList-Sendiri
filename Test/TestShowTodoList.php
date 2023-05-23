<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

$todoList[1] = "Belajar PHP Dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP Database";
/**
 * Nilai Array Dari $todoList Akan Dijadikan Sebagai Number Dan Valuenya Akan Dijadikan Value Dari Per Number
 */

showTodoList();
