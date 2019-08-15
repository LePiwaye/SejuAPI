<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class ChampionInfoDTO
 * This class handles Champion Info, usually returned by the ChampionEndpoint methods
 * It's defined accordingly to the ChampionInfo declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ChampionInfoDTO extends GenericDTO
{

    /**
     * @var array(int) List of Champions IDs available for free for new players
     */
    protected $freeChampionIdsForNewPlayers;

    /**
     * @var array(int) List of Champions IDs available for free
     */
    protected $freeChampionIds;

    /**
     * @var int Specified level under which players are noticed as new players
     */
    protected $maxNewPlayerLevel;

    /**
     * ChampionInfoDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->freeChampionIdsForNewPlayers = array();
        $this->freeChampionIds = array();
        $this->maxNewPlayerLevel = null;        
    }   

    /**
     * Gets list of Champions IDs available for free for new players
     * @return array(int) list of Champions IDs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getFreeChampionIdsForNewPlayers()
    {
        return $this->freeChampionIdsForNewPlayers;
    }

     /**
     * Sets list of Champions IDs available for free for new players
     * @param $freeChampionIdsForNewPlayers array(int) list of Champions IDs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setFreeChampionIdsForNewPlayers($freeChampionIdsForNewPlayers)
    {
        $this->freeChampionIdsForNewPlayers = $freeChampionIdsForNewPlayers;
    }

    /**
     * Adds champion IDs in the list of champions available for free for new players
     * @param $championID int Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function addFreeChampionIdForNewPlayers($championID)
    {
        $this->freeChampionIdsForNewPlayers[] = $championID;
    }

    /**
     * Gets list of Champions IDs available for free
     * @return array(int) list of Champions IDs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getFreeChampionIds()
    {
        return $this->freeChampionIds;
    }

     /**
     * Sets list of Champions IDs available for free
     * @param $freeChampionIds array(int) list of Champions IDs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setFreeChampionIds($freeChampionIds)
    {
        $this->freeChampionIds = $freeChampionIds;
    }

    /**
     * Adds champion IDs in the list of champions available for free for new players
     * @param $championID int Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function addFreeChampionId($championID)
    {
        $this->freeChampionIds[] = $championID;
    }

    /**
     * Gets maximum account level for being noticed as a new player
     * @return int Maximum account level for being noticed as a new player
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMaxNewPlayerLevel()
    {
        return $this->maxNewPlayerLevel;
    }

     /**
     * Sets maximum account level for being noticed as a new player
     * @param $maxNewPlayerLevel int Maximum account level for being noticed as a new player
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setMaxNewPlayerLevel($maxNewPlayerLevel)
    {
        $this->maxNewPlayerLevel = $maxNewPlayerLevel;
    }   
}