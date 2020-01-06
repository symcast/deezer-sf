<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DateTimeTrait
{
    /** @ORM\Column(type="datetime", nullable=true) */
    private $createdAt;

    /** @ORM\Column(type="datetime", nullable=true) */
    private $updatedAt;

    public function getCreatedAt():  ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}