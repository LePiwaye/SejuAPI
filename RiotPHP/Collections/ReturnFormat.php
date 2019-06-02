<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 19/01/18
 * Time: 09:33
 */

namespace RiotPHP\Collections;

/**
 * ReturnFormat abstract class - This class defines available formats for data when an endpoint is called
 * @package Piwaye
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class ReturnFormat
{
    const JSON = 0;
    const PHP = 1;
}