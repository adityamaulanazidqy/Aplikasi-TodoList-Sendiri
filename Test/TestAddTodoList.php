<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Aditya");
addTodoList("Maulana");
addTodoList("Zidqy");

var_dump($todoList);