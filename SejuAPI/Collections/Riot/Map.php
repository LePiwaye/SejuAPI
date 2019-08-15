<?php

namespace SejuAPI\Collections\Riot;

/**
 * Class Map
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class Map
{
    const SUMMONERS_RIFT_ORIGINAL_SUMMER = 1;
    const SUMMONERS_RIFT_ORIGINAL_AUTUMN = 2;
    const PROVING_GROUNDS = 3;
    const TWISTED_TREELINE_ORIGINAL = 4;
    const CRYSTAL_SCAR = 8;
    const TWISTED_TREELINE_CURRENT = 10;
    const SUMMONERS_RIFT_CURRENT = 11;
    const HOWLING_ABYSS = 12;
    const BUTCHERS_BRIDGE = 14;
    const COSMIC_RUINS = 16;
    const VALORAN_CITY_PARK = 18;
    const SUBSTRUCTURE_43 = 19;
    const CRASH_SITE = 20;
    const NEXUS_BLITZ = 21;
}