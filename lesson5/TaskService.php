<?php

require_once "User.php";
require_once "Task.php";
require_once "Comment.php";

class TaskService
{
    public static function addComment(User $author, Task $task, string $text): Comment
    {
        return new Comment($author, $task, $text);
    }
}