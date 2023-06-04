<?php

require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../BusinessLogic/EditTodoList.php";
require_once __DIR__."/../View/viewAddTodoList.php";
require_once __DIR__."/../View/viewRemoveTodoList.php";
require_once __DIR__."/../Helper/Input.php";

function viewShowTodoList(){
global $todoList;
  while (true){
    showTodoList(); 

    echo "    ↓ Menu List ↓".PHP_EOL;
    echo "1. Tambah TodoListnya".PHP_EOL;
    echo "2. Hapus TodoListnya".PHP_EOL;
    echo "3. Edit TodoLisnya".PHP_EOL;
    echo "x. Keluar".PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1"){
        viewAddTodoList();
    }else if($pilihan == "2"){
        viewRemoveTodoList();
    }else if($pilihan == "3"){
        if (sizeof($todoList) == 0){
            echo "Maaf TodoList Masih Kosong".PHP_EOL;
        }else if (sizeof($todoList) > 0) {
            editTodoList();
        }
    }else if($pilihan == "x"){
        // Akan Keluar Dari Proggram
        break;
    }else {
        echo " Maaf Perintah Tidak Dimengerti".PHP_EOL;
        echo "- Mengulangi Proggram -".PHP_EOL;
        continue;
    }
  }
  echo "Sampai Jumpa Lagi Yah!".PHP_EOL;
}