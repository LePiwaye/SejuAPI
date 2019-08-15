<?php

namespace SejuAPI\Collections\Riot;

/**
 * Class GameMode
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class GameMode
{
    const CLASSIC_SR_TT = "CLASSIC";
    const DOMINION_CRYSTAL_SCAR = "ODIN";
    const ARAM = "ARAM";
    const TUTORIAL = "TUTORIAL";
    const URF = "URF";
    const DOOM_BOTS = "DOOMBOTSTEEMO";
    const ONE_FOR_ALL = "ONEFORALL";
    const ASCENSION = "ASCENSION";
    const SNOWDOWN_SHOWDOWN = "FIRSTBLOOD";
    const PORO_KING = "KINGPORO";
    const NEXUS_SIEGE = "SIEGE";
    const BLOOD_HUNT_ASSASSIN = "ASSASSINATE";
    const ALL_RANDOM_SUMMONERS_RIFT = "ARSR";
    const DARK_STAR_SINGULARITY = "DARKSTAR";
    const STAR_GUARDIAN = "STARGUARDIAN";
    const PROJECT_HUNTERS = "PROJECT";
    const NEXUS_BLITZ = "GAMEMODEX";
    const ODYSSEY = "ODYSSEY";
    
}