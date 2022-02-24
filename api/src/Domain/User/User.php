<?php

declare(strict_types=1);

namespace domain\User\User;

final class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $roleId;

    public function getId(): int
    {
        return $this->id;
    }
}
