<?php

namespace SejuAPI\Collections\Riot;

/**
 * Class GameType
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class GameType
{
    const CUSTOM = "CUSTOM_GAME";
    const TUTORIAL = "TUTORIAL_GAME";
    const MATCHED = "MATCHED_GAME";    
}