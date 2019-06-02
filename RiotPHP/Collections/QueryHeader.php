<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 12/02/18
 * Time: 17:47
 */

namespace RiotPHP\Collections;

/**
 * Class QueryHeader
 * Acts as a Java enum for servers, which offers a better maintainability in case of Riot API model change
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
abstract class QueryHeader
{
    const GET = "GET";
    const POST = "POST";
    const PUT = "PUT";
}