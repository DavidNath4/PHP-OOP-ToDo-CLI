<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("DATA 1");
    $todolistRepository->todolist[2] = new Todolist("DATA 2");
    $todolistRepository->todolist[3] = new Todolist("DATA 3");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}


function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("DATA 1");
    $todolistService->addTodolist("DATA 2");
    $todolistService->addTodolist("DATA 3");

    $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("DATA 1");
    $todolistService->addTodolist("DATA 2");
    $todolistService->addTodolist("DATA 3");

    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

// testShowTodolist();
// testAddTodolist();
testRemoveTodolist();
