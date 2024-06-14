<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Add Activity" . PHP_EOL;

    $activity = input("Activity (x for cancel)");

    if($activity == "x") {
        echo "Cancel Add An Activity" .PHP_EOL;
    } else {
        addTodoList($activity);
    }
};