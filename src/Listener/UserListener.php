<?php

namespace App\Listener;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsEntityListener]
readonly class UserListener
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }
    public function prePersist(User $user)
    {
        $user->setPassword($this->passwordHasher->hashPassword($user, $user->getPassword()));
    }

}