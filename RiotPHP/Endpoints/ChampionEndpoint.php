<?php
/**
 * Created by PhpStorm.
 * User: piwaye
 * Date: 02/01/18
 * Time: 09:48
 */

namespace RiotPHP\Endpoints;

/**
 * Class ChampionEndpoint
 * This class is related to the /lol/platform/v3/champions API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionEndpoint extends CommonEndpoint
{

    /**
     * Retrieves champions rotations
     * @see /lol/platform/v3/champion-rotations
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     */
    public function getChampionRotations(){        
        $query = "https://" . $this->host . "/lol/platform/v3/champion-rotations";
        return $this->callManager->sendQuery($query, $this->returnFormat);
    }   
}