<?php

namespace RiotPHP\Endpoints;

/**
 * Class LolStatusEndpoint
 * This class is related to the /lol/lol-status/v3/ API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LolStatusEndpoint extends CommonEndpoint
{
     /**
     * Get the shard status for the current server
     * @see /lol/status/v3/shard-data
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     * @throws Exceptions\BadJSONDataException
     */
    public function getShardData(){
        $query = "https://" . $this->host . "/lol/status/v3/shard-data";
        return $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET, $query, $this->returnFormat);
    }
}