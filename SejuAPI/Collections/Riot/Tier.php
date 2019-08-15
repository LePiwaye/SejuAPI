<?php

namespace SejuAPI\Collections\Riot;

/**
 * Class Tier
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class Tier
{
    const CHALLENGER = "CHALLENGER";
    const GRANDMASTER = "GRANDMASTER";
    const MASTER = "MASTER";
    const DIAMOND = "DIAMOND";
    const PLATINUM = "PLATINUM";
    const GOLD = "GOLD";
    const SILVER = "SILVER";
    const BRONZE = "BRONZE";
    const IRON = "IRON";
}