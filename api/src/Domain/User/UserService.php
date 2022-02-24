<?php

declare(strict_types=1);

namespace domain\User\User;

final class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function existCheck(User $user): bool
    {
        if ($this->userRepository->findById($user->getId())) {
            return false;
        }
        return true;
    }
}
