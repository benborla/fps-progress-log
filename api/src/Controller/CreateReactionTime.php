<?php

namespace App\Controller;

use App\Entity\ReactionTime;
use App\Handler\ReactionTimeHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CreateReactionTime extends AbstractController
{
    private $reactionTimeHandler;

    public function __construct(ReactionTimeHandler $reactionTimeHandler)
    {
        $this->reactionTimeHandler = $reactionTimeHandler;
    }

    /**
     * __invoke
     *
     * @param ReactionTime $data
     * @access public
     * @return \App\Entity\ReactionTime
     */
    public function __invoke(ReactionTime $data)
    {
        $this->reactionTimeHandler->handle($data, $this->getUser());

        return $data;
    } // End function __invoke
}
