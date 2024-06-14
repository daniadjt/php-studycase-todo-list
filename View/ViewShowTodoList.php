<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Add Activity" . PHP_EOL;
        echo "2. Remove Activity" . PHP_EOL;
        echo "x. Back" .PHP_EOL;

        $option = input("Select");

        if($option == "1"){
            viewAddTodoList();
        }elseif ($option == "2"){
            viewRemoveTodoList();
        }elseif ($option == "x"){
            break;
        }else{
            echo "Please choose another option" .PHP_EOL;
        }
    }

    echo "See you around!" .PHP_EOL;
}