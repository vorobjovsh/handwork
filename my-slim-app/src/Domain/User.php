<?php

// src/Domain/User.php

//use DateTimeImmutable;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity, Table(name: 'users')]
final class User
{
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $id;

    #[Column(type: 'string', unique: true, nullable: false)]
    private string $email;

    #[Column(name: 'tel', type: 'string', nullable: false)]
    private string $tel;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->tel = $tel;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTel(): string
    {
        return $this->tel;
    }
}
