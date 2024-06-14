<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Take A Shower");
addTodoList("Gua Sha");
addTodoList("Learn PHP");
addTodoList("Break Time");
addTodoList("Lunch");

showTodoList();

removeTodoList(2);

showTodoList();
