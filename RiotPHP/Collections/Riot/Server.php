<?php

namespace RiotPHP\Collections\Riot;

/**
 * Class Server
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class Server
{
    const BR = "BR";
    const EUNE = "EUNE";
    const EUW = "EUW";
    const JP = "JP";
    const KR = "KR";
    const LAN = "LAN";
    const LAS = "LAS";
    const NA = "NA";
    const OCE = "OCE";
    const TR = "TR";
    const RU = "RU";
    const PBE = "PBE";
}