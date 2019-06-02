<?php
    include_once("../RiotPHP.php");
    $rp = new RiotPHP\RiotPHP();
    $rp->setCurrentServer(RiotPHP\Collections\Server::EUW);
    
    echo "<pre>";
    print_r($rp->leagueEndpoint->getLeaguesEntriesByQueueAndTierAndDivision(RiotPHP\Collections\RankedQueueType::RANKED_SOLO_5x5,
    RiotPHP\Collections\Tier::DIAMOND,
    RiotPHP\Collections\Division::IV,
    1));
    // print_r($rp->championEndpoint->getChampionRotations());
    echo "</pre>";