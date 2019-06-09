<?php

namespace RiotPHP\Endpoints\Riot;

/**
 * Class TournamentStub
 * This class is related to the /lol/tournament-stub/v4/ API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class TournamentStubEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \RiotPHP\Collections\Riot\EndpointDescriptor::TOURNAMENT_STUB;
    }
}