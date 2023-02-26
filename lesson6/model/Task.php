<?php

class Task
{
    private string $description = "";
    private int $isDone = 0;
    private int $id;
    private int $user_id;

    public function __construct()
    {
        $this->user_id = $_SESSION['user']->getId();
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function isDone(): int
    {
        return $this->isDone;
    }

    public function setIsDone(int $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }
    public function getId(): int
    {
        return $this->id;
    }
}
