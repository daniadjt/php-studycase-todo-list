<?php

//Menambah todo ke list
function addTodoList(string $activity){
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $activity;
}