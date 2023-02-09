<?php

require_once "User.php";
require_once "Comment.php";

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private Comment $comment;

    public function __construct(string $description, int $priority, User $user)
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = $this->dateCreated;
        $this->priority = $priority;
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     */
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
        $this->setDateUpdated(new DateTime());
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     */
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @param DateTime $dateDone
     */
    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
        $this->setDateUpdated(new DateTime());
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
        $this->setDateUpdated(new DateTime());
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    public function markAsDone(): void
    {
        $this->setDateUpdated(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone(true);
    }

    /**
     * @return Comment
     */
    public function getComment(): Comment
    {
        return $this->comment;
    }

    /**
     * @param Comment $comment
     */
    public function setComment(string $text): void
    {
        $this->comment = TaskService::addComment($this->user, $this, $text);
    }
}