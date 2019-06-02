<?php

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
class ChampionEndpoint extends GenericEndpoint
{

    /**
     * Retrieves champions rotations
     * @see /lol/platform/v3/champion-rotations
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return \RiotPHP\DTO\ChampionInfoDTO Data array
     * @throws \RiotPHP\Exceptions\BadJSONDataException
     * @throws \RiotPHP\Exceptions\UnsupportedAPICall
     */
    public function getChampionRotations(){        
        $query = "https://" . $this->host . "/lol/platform/v3/champion-rotations";
        $response = $this->callManager->sendQuery(\RiotPHP\Collections\QueryHeader::GET,$query);

        if(is_array($response)){
            $responseDTO = new \RiotPHP\DTO\ChampionInfoDTO();

            for($iterableResponse = 0; $iterableResponse < count($response['freeChampionIds']); $iterableResponse++){
                $responseDTO->addFreeChampionId($response['freeChampionIds'][$iterableResponse]);
            }

            for($iterableResponse = 0; $iterableResponse < count($response['freeChampionIdsForNewPlayers']); $iterableResponse++){
                $responseDTO->addFreeChampionIdForNewPlayers($response['freeChampionIdsForNewPlayers'][$iterableResponse]);
            }

            $responseDTO->setMaxNewPlayerLevel($response['maxNewPlayerLevel']);

            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\UnsupportedAPICall();

    }   
}