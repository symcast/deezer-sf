<?php


namespace App\DTO;

use App\DTO\DtoInterface;

class Track implements DtoInterface
{
    /** @var int */
    private $id;

    /** @var string|null */
    private $label;

    public function __construct(int $id, ?string $label)
    {
        $this->id = $id;
        $this->label = $label;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }
}