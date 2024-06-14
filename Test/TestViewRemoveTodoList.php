<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Wake Up");
addTodoList("Pray");
addTodoList("Brush Teeth");
addTodoList("Skin Care Routine");

showTodoList();

viewRemoveTodoList();

showTodoList();
