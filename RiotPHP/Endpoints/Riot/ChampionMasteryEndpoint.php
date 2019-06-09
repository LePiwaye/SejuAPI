<?php

namespace RiotPHP\Endpoints\Riot;

/**
 * Class ChampionMasteryEndpoint
 * This class is related to the /lol/champion-mastery/v4/champion-masteries API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionMasteryEndpoint extends GenericEndpoint
{

    /**
     * Get the champion masteries for each champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}
     * @param $encryptedSummonerID string Encrypted Summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array(\RiotPHP\DTO\Riot\ChampionMasteryDTO) Data object
     * @throws \RiotPHP\Exceptions\Riot\BadJSONDataException
     * @throws \RiotPHP\Exceptions\Riot\UnsupportedAPICall
     */
    public function getChampionMasteriesBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/champion-masteries/by-summoner/" . $encryptedSummonerID;
        $response = $this->callManager->sendQuery(\RiotPHP\Collections\Riot\QueryHeader::GET, $query);
        
        if(is_array($response)){
            $responseDTO = array();

            for($iterableResponse = 0; $iterableResponse < count($response); $iterableResponse++){
                $partialResponseDTO = new \RiotPHP\DTO\Riot\ChampionMasteryDTO();

                if($response[$iterableResponse]["chestGranted"] == 1)
                    $partialResponseDTO->setChestGranted(true);
                else
                    $partialResponseDTO->setChestGranted(false);
                
                $partialResponseDTO->setChampionLevel($response[$iterableResponse]["championLevel"]);
                $partialResponseDTO->setChampionPoints($response[$iterableResponse]["championPoints"]);
                $partialResponseDTO->setChampionId($response[$iterableResponse]["championId"]);
                $partialResponseDTO->setChampionPointsUntilNextLevel($response[$iterableResponse]["championPointsUntilNextLevel"]);
                $partialResponseDTO->setLastPlayTime($response[$iterableResponse]["championPoints"]);
                $partialResponseDTO->setTokensEarned($response[$iterableResponse]["tokensEarned"]);
                $partialResponseDTO->setChampionPointsSinceLastLevel($response[$iterableResponse]["championPointsSinceLastLevel"]);
                $partialResponseDTO->setSummonerId($response[$iterableResponse]["summonerId"]);

                $responseDTO[] = $partialResponseDTO;
            }

            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get the champion masteries for a specified champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}/by-champion/{championId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @param $championID string Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return \RiotPHP\DTO\Riot\ChampionMasteryDTO Data object
     * @throws \RiotPHP\Exceptions\Riot\BadJSONDataException
     * @throws \RiotPHP\Exceptions\Riot\UnsupportedAPICall
     */
    public function getChampionMasteryBySummonerIDByChampionID($encryptedSummonerID, $championID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/champion-masteries/by-summoner/" . $encryptedSummonerID . "/by-champion/" . $championID;
        $response = $this->callManager->sendQuery(\RiotPHP\Collections\Riot\QueryHeader::GET, $query);
        if(is_array($response)){
            $responseDTO = new \RiotPHP\DTO\Riot\ChampionMasteryDTO();

            if($response["chestGranted"] == 1)
                $responseDTO->setChestGranted(true);
            else
                $responseDTO->setChestGranted(false);
            
            $responseDTO->setChampionLevel($response["championLevel"]);
            $responseDTO->setChampionPoints($response["championPoints"]);
            $responseDTO->setChampionId($response["championId"]);
            $responseDTO->setChampionPointsUntilNextLevel($response["championPointsUntilNextLevel"]);
            $responseDTO->setLastPlayTime($response["championPoints"]);
            $responseDTO->setTokensEarned($response["tokensEarned"]);
            $responseDTO->setChampionPointsSinceLastLevel($response["championPointsSinceLastLevel"]);
            $responseDTO->setSummonerId($response["summonerId"]);

            return $responseDTO;
        }

        throw new \RiotPHP\Exceptions\Riot\UnsupportedAPICall();
    }

    /**
     * Get the champion masteries for a specified champion for a specified summoner ID
     * @see /lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerID}/by-champion/{championId}
     * @param $encryptedSummonerID string Encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return int Mastery score
     * @throws \RiotPHP\Exceptions\Riot\BadJSONDataException
     */
    public function getChampionScoreBySummonerID($encryptedSummonerID){
        $query = "https://" . $this->host . "/lol/champion-mastery/v4/scores/by-summoner/" . $encryptedSummonerID;
        return $this->callManager->sendQuery(\RiotPHP\Collections\Riot\QueryHeader::GET, $query);
    }
}