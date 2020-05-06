<?php


namespace App\EntityListener;



use App\Entity\GamesList;

class GamesListListener
{

    public function preFlush(GamesList $gamesList)
    {

        $gamesList->setSlug(strtolower(str_replace([' ','\''],'',$gamesList->getGame())));

    }



}