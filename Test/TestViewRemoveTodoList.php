<?php

require_once "Model/TodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

addTodoList("Aditya");
addTodoList("Maulana");
addTodoList("Zidqy");
addTodoList("Alfan");
addTodoList("Nur Hadi");

showTodoList();

viewRemoveTodoList();

showTodoList();
