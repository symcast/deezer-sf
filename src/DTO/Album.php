<?php


namespace App\DTO;


use App\DTO\DtoInterface;

class Album implements DtoInterface
{
    /** @var int */
    private $id;

    /** @var string|null */
    private $label;

    /** @var array */
    private $tracks;

    public function __construct(int $id, ?string $label, $tracks = [])
    {
        $this->id = $id;
        $this->label = $label;
        $this->tracks = $tracks;
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

    public function getTracks(): array
    {
        return $this->tracks;
    }

    public function setTracks(array $tracks): void
    {
        $this->tracks = $tracks;
    }

}