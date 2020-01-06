<?php


namespace App\DTO;


use App\DTO\DtoInterface;

class Author implements DtoInterface
{
    /** @var int */
    private $id;

    /** @var string|null */
    private $firstName;

    /** @var string|null */
    private $lastName;

    /** @var string|null */
    private $email;

    /** @var string|null */
    private $nickname;

    /** @var string|null */
    private $role;

    public function __construct(int $id, ?string $firstName, ?string $lastName, ?string $email, ?string $nickname, ?string $role)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->nickname = $nickname;
        $this->role = $role;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }


    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getLastName(): ?string
    {
        return $this->lastName;
    }


    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }


    public function getEmail(): ?string
    {
        return $this->email;
    }


    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }


    public function getNickname(): ?string
    {
        return $this->nickname;
    }


    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }


    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): void
    {
        $this->role = $role;
    }
}