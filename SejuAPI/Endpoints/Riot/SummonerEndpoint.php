<?php

namespace SejuAPI\Endpoints\Riot;

/**
 * Class Summoner
 * This class is related to the /lol/summoner/v4/ API endpoint.
 * It's basically all the available methods embedded in the SejuAPI environment
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class SummonerEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \SejuAPI\Collections\Riot\EndpointDescriptor::SUMMONER;
    }
}