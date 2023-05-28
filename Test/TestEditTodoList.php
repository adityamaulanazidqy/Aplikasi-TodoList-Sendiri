<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/EditTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
function testEditTodoList (){
    addTodoList("aditya");
    addTodoList("Maulana");
    addTodoList("Zidqy");
    addTodoList("Alfan");
    addTodoList("Nur Hadi");

    showTodoList();

    editTodoList();

    showTodoList();
}

testEditTodoList();