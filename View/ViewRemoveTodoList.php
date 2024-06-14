<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Remove Activity". PHP_EOL;

    $option = input("Number (x for undo)");

    if($option == "x") {
        echo "Cancel Remove An Activity" . PHP_EOL;
    } else {
        $success = removeTodoList($option);
    
        if ($success) {
            echo "Successfully deleted the activity!" .PHP_EOL;
        } else {
            echo "Failed to delete the activity" .PHP_EOL;
        }
    }
}