<?php


namespace App\DTO;


use App\DTO\DtoInterface;
use App\Entity\User;

class Notification implements DtoInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $type;

    /** @var string|null */
    private $periodOfValidity;

    /** @var string|null */
    private $description;

    /** @var bool */
    private $isRead;

    /** @var Author|null */
    private $author;

    /** @var Album|null */
    private $album;

    /** @var Playlist|null */
    private $playlist;

    /** @var Track|null */
    private $track;

    /** @var User|null */
    private $user;

    public function __construct(
        int $id,
        string $type,
        ?string $periodOfValidity,
        ?string $description,
        bool $isRead,
        ?Author $author,
        ?Album $album,
        ?Playlist $playlist,
        ?Track $track,
        ?User $user
    )
    {
        $this->id = $id;
        $this->type = $type;
        $this->periodOfValidity = $periodOfValidity;
        $this->description = $description;
        $this->isRead = $isRead;
        $this->author = $author;
        $this->album = $album;
        $this->playlist = $playlist;
        $this->track = $track;
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getPeriodOfValidity(): ?string
    {
        return $this->periodOfValidity;
    }

    public function setPeriodOfValidity(?string $periodOfValidity): void
    {
        $this->periodOfValidity = $periodOfValidity;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): void
    {
        $this->isRead = $isRead;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): void
    {
        $this->author = $author;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): void
    {
        $this->album = $album;
    }

    public function getPlaylist(): ?Playlist
    {
        return $this->playlist;
    }

    public function setPlaylist(?Playlist $playlist): void
    {
        $this->playlist = $playlist;
    }

    public function getTrack(): ?Track
    {
        return $this->track;
    }

    public function setTrack(?Track $track): void
    {
        $this->track = $track;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;
    }
}