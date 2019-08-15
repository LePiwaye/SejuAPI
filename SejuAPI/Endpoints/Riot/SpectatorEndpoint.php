<?php

namespace SejuAPI\Endpoints\Riot;

/**
 * Class SpectatorEndpoint
 * This class is related to the /lol/spectator/v4/ API endpoint.
 * It's basically all the available methods embedded in the SejuAPI environment
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class SpectatorEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \SejuAPI\Collections\Riot\EndpointDescriptor::SPECTATOR;
    }
}