<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Baca");
addTodoList("Pergi");
addTodoList("Isi Bensin");


viewAddTodoList();

showTodoList();

viewAddTodoList();
showTodoList();