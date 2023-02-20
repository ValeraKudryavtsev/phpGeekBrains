<?php

class Task
{
    private string $description = "";
    private int $isDone = 0;

    public function __construct(string $description)
    {
        $this->description = $description;
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
}
