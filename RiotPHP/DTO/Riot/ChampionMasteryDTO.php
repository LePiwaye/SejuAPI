<?php

namespace RiotPHP\DTO;

/**
 * Class ChampionMasteryDTO
 * This class handles Champion Mastery Info, usually returned by the ChampionMasteryEndpoint methods
 * It's defined accordingly to the ChampionMasteryDTO declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionMasteryDTO extends GenericDTO
{
    /**
     * @var boolean Is chest granted for this champion or not in current season. 
     */
    protected $chestGranted;

    /**
     * @var int Champion level for specified player and champion combination. 
     */
    protected $championLevel;

    /**
     * @var int Total number of champion points for this player and champion combination - they are used to determine championLevel.
     */
    protected $championPoints;

    /**
     * @var long Champion ID for this entry. 
     */
    protected $championId;

    /**
     * @var long Number of points needed to achieve next level. Zero if player reached maximum champion level for this champion. 
     */
    protected $championPointsUntilNextLevel;

    /**
     * @var long Last time this champion was played by this player - in Unix milliseconds time format. 
     */
    protected $lastPlayTime;

    /**
     * @var int The token earned for this champion to levelup. 
     */
    protected $tokensEarned;

    /**
     * @var long Number of points earned since current level has been achieved. 
     */
    protected $championPointsSinceLastLevel;

    /**
     * @var string Summoner ID for this entry. (Encrypted) 
     */
    protected $summonerId;

    /**
     * ChampionMasteryDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->chestGranted = null;
        $this->championLevel = null;
        $this->championPoints = null;
        $this->championId = null;
        $this->championPointsUntilNextLevel = null;
        $this->lastPlayTime = null;
        $this->tokensEarned = null;
        $this->championPointsSinceLastLevel = null;
        $this->summonerId = null;
    }   

    /**
     * Gets granted chest information
     * @return boolean Chest granted status
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChestGranted()
    {
        return $this->chestGranted;
    }

     /**
     * Sets granted chest information
     * @param $chestGranted boolean Chest granted status
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChestGranted($chestGranted)
    {
        $this->chestGranted = $chestGranted;
    }

    /**
     * Gets champion level for specified player and champion
     * @return int Champion level
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampionLevel()
    {
        return $this->championLevel;
    }

    /**
     * Sets champion level for specified player and champion
     * @param $championLevel int Champion level
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampionLevel($championLevel)
    {
        $this->championLevel = $championLevel;
    }

   /**
     * Gets total number of champion points for this player and champion combination - they are used to determine championLevel. 
     * @return int Champion points
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampionPoints()
    {
        return $this->championPoints;
    }

    /**
     * Sets total number of champion points for this player and champion combination - they are used to determine championLevel. 
     * @param $championPoints int Champion points
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampionPoints($championPoints)
    {
        $this->championPoints = $championPoints;
    }

    
    /**
     * Gets champion ID for this entry. 
     * @return long Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * Sets champion ID for this entry. 
     * @param $championId long Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    }

    /**
     * Gets number of points needed to achieve next level. Zero if player reached maximum champion level for this champion. 
     * @return long Champion points needed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampionPointsUntilNextLevel()
    {
        return $this->championPointsUntilNextLevel;
    }

    /**
     * Sets number of points needed to achieve next level. Zero if player reached maximum champion level for this champion. 
     * @param $championPointsUntilNextLevel long Champion points needed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampionPointsUntilNextLevel($championPointsUntilNextLevel)
    {
        $this->championPointsUntilNextLevel = $championPointsUntilNextLevel;
    }

    /**
     * Gets last time this champion was played by this player - in Unix milliseconds time format. 
     * @return long Last playing timestamp
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLastPlayTime()
    {
        return $this->lastPlayTime;
    }

    /**
     * Sets last time this champion was played by this player - in Unix milliseconds time format. 
     * @param $lastPlayTime long Last playing timestamp
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLastPlayTime($lastPlayTime)
    {
        $this->lastPlayTime = $lastPlayTime;
    }

    /**
     * Gets the token earned for this champion to levelup. 
     * @return int Tokens earned
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getTokensEarned()
    {
        return $this->tokensEarned;
    }

    /**
     * Sets the token earned for this champion to levelup. 
     * @param $lastPlayTime int Tokens earned
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setTokensEarned($tokensEarned)
    {
        $this->tokensEarned = $tokensEarned;
    }

    /**
     * Gets number of points earned since current level has been achieved. 
     * @return long Points earned
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampionPointsSinceLastLevel()
    {
        return $this->championPointsSinceLastLevel;
    }

    /**
     * Sets number of points earned since current level has been achieved. 
     * @param $championPointsSinceLastLevel long Points earned
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampionPointsSinceLastLevel($championPointsSinceLastLevel)
    {
        $this->championPointsSinceLastLevel = $championPointsSinceLastLevel;
    }

    /**
     * Gets summoner ID for this entry. (Encrypted) 
     * @return string Encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * Sets summoner ID for this entry. (Encrypted) 
     * @param $summonerId string Encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }
}