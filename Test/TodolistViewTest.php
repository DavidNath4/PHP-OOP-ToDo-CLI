<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("DATA 1");
    $todolistService->addTodolist("DATA 2");
    $todolistService->addTodolist("DATA 3");
    $todolistService->addTodolist("DATA 4");

    $todolistView->showTodolist();
}

function testViewAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("DATA 1");
    $todolistService->addTodolist("DATA 2");
    $todolistService->addTodolist("DATA 3");
    $todolistService->addTodolist("DATA 4");

    $todolistView->showTodolist();
    // $todolistView->addTodolist();

    // $todolistView->showTodolist();
}

function testViewRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("DATA 1");
    $todolistService->addTodolist("DATA 2");
    $todolistService->addTodolist("DATA 3");
    $todolistService->addTodolist("DATA 4");

    // $todolistView->showTodolist();
    // $todolistView->removeTodolist();

    $todolistView->showTodolist();
}

// testViewAddTodolist();
// testViewShowTodolist();
testViewRemoveTodolist();
