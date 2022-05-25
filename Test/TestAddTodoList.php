<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Omar");
addTodoList("Khadaffi");
addTodoList("Keren");

var_dump($todoList);