<?php

declare(strict_types=1);

namespace domain\User\User;

interface UserRepositoryInterface
{
    public function findById(int $userId): User;
    public function store(User $user): void;
    public function delete(User $user): void;
    public function update(User $user): User;
}
