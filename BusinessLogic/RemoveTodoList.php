<?php

//Menghapus todo di list
function removeTodoList(Int $number){
    
    global $todoList;

    if ($number > sizeof($todoList)){
        return false;
    }

    for($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i + 1];
    }

    unset ($todoList[sizeof($todoList)]);

    return true;
}

//Perumpamaan Kode:
// 1. Makan
// 2. Minum
// 3. Tidur

//Mau hapus 1

//Alur kodenya
// 1. Makan
// 2. Tidur (Karna Minum dihapus)
// 3. Tidur (Duplikat sementara)

// Karna unset menjadi size of todo list sebenarnya yg tadinya ada 3 todo skrg ada 2
// 1. Makan
// 2. Tidur