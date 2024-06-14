<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Wake Up");
addTodoList("Pray");
addTodoList("Brush Teeth");
addTodoList("Skin Care Routine");

viewAddTodoList();

showTodoList();