<?php

namespace SejuAPI\Collections\Riot;

/**
 * Class RankedQueueType
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class RankedQueueType
{
    const RANKED_SOLO_5x5 = "RANKED_SOLO_5x5";
    const RANKED_FLEX_SR = "RANKED_FLEX_SR";
    const RANKED_FLEX_TT = "RANKED_FLEX_TT";
}