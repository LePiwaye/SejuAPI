<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class LeagueListDTO
 * This class handles the descriptor job for a League, used in the League API
 * It's defined accordingly to the LeagueList declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LeagueListDTO extends GenericDTO
{
    /**
     * @var string League ID
     */
    protected $leagueId;    

    /**
     * @var string Tier
     */
    protected $tier;   

    /**
     * @var array(\SejuAPI\DTO\Riot\LeagueItemDTO) League entries
     */
    protected $entries;  
    
    /**
     * @var string Queue
     */
    protected $queue;    

    /**
     * @var string League name
     */
    protected $name;  

    /**
     * LeagueListDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->leagueId = null;
        $this->tier = null;
        $this->entries = array();
        $this->queue = null;
        $this->name = null;             
    }   

    /**
     * Gets league ID
     * @return String League ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeagueId()
    {
        return $this->leagueId;
    }

     /**
     * Sets league ID
     * @param $leagueId String League ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLeagueId($leagueId)
    {
        $this->leagueId = $leagueId;
    }

    /**
     * Gets tier
     * @return String Tier
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getTier()
    {
        return $this->tier;
    }

     /**
     * Sets tier
     * @param $leagueId String Tier
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    }

    /**
     * Gets entries
     * @return array(\SejuAPI\DTO\Riot\LeagueItemDTO) League entries
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getEntries()
    {
        return $this->entries;
    }

     /**
     * Sets entries
     * @param $entries array(\SejuAPI\DTO\Riot\LeagueItemDTO) League entries
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }
    
    /**
     * Gets queue
     * @return String Queue
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getQueue()
    {
        return $this->queue;
    }

     /**
     * Sets queue
     * @param $leagueId String Queue
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
    }

    /**
     * Gets name
     * @return String Name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getName()
    {
        return $this->name;
    }

     /**
     * Sets queue
     * @param $leagueId String Name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}