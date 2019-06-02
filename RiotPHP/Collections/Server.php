<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 12/02/18
 * Time: 17:47
 */

namespace RiotPHP\Collections;

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