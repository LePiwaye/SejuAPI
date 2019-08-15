<?php

namespace SejuAPI\Endpoints\Riot;

/**
 * Class ChampionEndpoint
 * This class is related to the /lol/platform/v3/champions API endpoint.
 * It's basically all the available methods embedded in the SejuAPI environment
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionEndpoint extends GenericEndpoint
{

    public function __construct(){
        parent::__construct();
        $this->endpointName = \SejuAPI\Collections\Riot\EndpointDescriptor::CHAMPION;
    }

    /**
     * Retrieves champions rotations
     * @see /lol/platform/v3/champion-rotations
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return \SejuAPI\DTO\Riot\ChampionInfoDTO Data array
     * @throws \SejuAPI\Exceptions\Riot\UnsupportedAPICall
     */
    public function getChampionRotations(){        
        $query = "https://" . $this->host . "/lol/platform/v3/champion-rotations";
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \SejuAPI\Collections\Riot\QueryHeader::GET,$query);

        if(is_array($response)){
            $responseDTO = new \SejuAPI\DTO\Riot\ChampionInfoDTO();

            for($iterableResponse = 0; $iterableResponse < count($response['freeChampionIds']); $iterableResponse++){
                $responseDTO->addFreeChampionId($response['freeChampionIds'][$iterableResponse]);
            }

            for($iterableResponse = 0; $iterableResponse < count($response['freeChampionIdsForNewPlayers']); $iterableResponse++){
                $responseDTO->addFreeChampionIdForNewPlayers($response['freeChampionIdsForNewPlayers'][$iterableResponse]);
            }

            $responseDTO->setMaxNewPlayerLevel($response['maxNewPlayerLevel']);

            return $responseDTO;
        }

        throw new \SejuAPI\Exceptions\Riot\UnsupportedAPICall();

    }   
}