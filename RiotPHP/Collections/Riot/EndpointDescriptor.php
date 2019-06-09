<?php

namespace RiotPHP\Collections\Riot;

/**
 * Class EndpointDescriptor
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class EndpointDescriptor
{
    const CHAMPION_MASTERY = "champion-mastery";
    const CHAMPION = "champion";
    const LEAGUE = "league";
    const LOL_STATUS = "lol-status";
    const MATCH = "match";
    const SPECTATOR = "spectator";
    const SUMMONER = "summoner";
    const THIRD_PARTY_CODE = "third-party-code";
    const TOURNAMENT_STUB = "tournament-stub";
    const TOURNAMENT = "tournament";
}