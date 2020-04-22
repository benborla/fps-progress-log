<?php

namespace App\Handler;

use App\Entity\ReactionTime;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class ReactionTimeHandler
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function handle(
      ReactionTime $reactionTime,
      User $currentUser
    ) {
        $reactionTime->setUser($currentUser);

        $this->em->persist($reactionTime);
        $this->em->flush();
    }
}
