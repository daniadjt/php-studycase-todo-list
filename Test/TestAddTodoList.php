<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Prepare B'fast");
addTodoList("B'fast");
addTodoList("Work Out");

var_dump($todoList);