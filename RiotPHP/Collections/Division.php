<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 12/02/18
 * Time: 17:47
 */

namespace RiotPHP\Collections;

/**
 * Class Division
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class Division
{
    const IV = "IV";
    const III = "III";
    const II = "II";
    const I = "I";
}