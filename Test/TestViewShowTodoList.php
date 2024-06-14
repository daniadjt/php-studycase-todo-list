<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Wake Up");
addTodoList("Pray");
addTodoList("Brush Teeth");
addTodoList("Skin Care Routine");

viewShowTodoList();