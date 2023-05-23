<?php

require_once "View/ViewAddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Aditya");
addTodoList("Maulana");
addTodoList("Zidqy");
addTodoList("Alfan");
addTodoList("Nur Hadi");

viewAddTodoList();

showTodoList();