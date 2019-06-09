<?php

namespace RiotPHP\DTO;

/**
 * Class LeagueEntryDTO
 * This class handles a summoner status in a ranked ladder, plus some league info used in the League API
 * It's defined accordingly to the LeagueEntry declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LeagueEntryDTO extends GenericDTO
{
    /**
     * @var string Summoner name
     */
    protected $summonerName;

    /**
     * @var boolean Is the summoner in a hot streak ?
     */
    protected $hotStreak;

     /**
     * @var \RiotPHP\DTO\MiniSeriesDTO Possible miniSeries data (can be null)
     */
    protected $miniSeries;

    /**
     * @var int Wins number
     */
    protected $wins;

    /**
     * @var boolean Is the summoner a veteran in his league ?
     */
    protected $veteran;

    /**
     * @var int Loss number
     */
    protected $losses;

    /**
     * @var boolean Is the summoner new in his league ?
     */
    protected $freshBlood;

    /**
     * @var boolean Is the summoner inactive in his league ? (Potential rank decay)
     */
    protected $inactive;

    /**
     * @var string Summoner rank
     */
    protected $rank;

    /**
     * @var string Summoner ID (Encrypted)
     */
    protected $summonerId;

    /**
     * @var int League points
     */
    protected $leaguePoints;

    /**
     * @var string Queue type
     */
    protected $queueType;

    /**
     * @var string League ID
     */
    protected $leagueId;

    /**
     * @var int League Tier
     */
    protected $tier;

    /**
     * LeagueItemDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->summonerName = null;
        $this->hotStreak = null;
        $this->miniSeries = null;
        $this->wins = null;      
        $this->veteran = null;
        $this->losses = null;
        $this->freshBlood = null;
        $this->inactive = null;
        $this->rank = null;
        $this->summonerId = null;
        $this->leaguePoints = null;
        $this->queueType = null;
        $this->leagueId = null;
        $this->tier = null;
    }   

    /**
     * Gets summoner name
     * @return String Summoner name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getSummonerName()
    {
        return $this->summonerName;
    }

     /**
     * Sets summoner name
     * @param $summonerName String Summoner name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setSummonerName($summonerName)
    {
        $this->summonerName = $summonerName;
    }

    /**
     * Gets hot streak
     * @return boolean Is player in hot streak ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getHotStreak()
    {
        return $this->hotStreak;
    }

    /**
     * Sets hot streak
     * @param $hotStreak boolean Is player in hot streak ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setHotStreak($hotStreak)
    {
        $this->hotStreak = $hotStreak;
    }

    /**
     * Gets miniSeries object
     * @return \RiotPHP\DTO\MiniSeriesDTO MiniSeries data
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMiniSeries()
    {
        return $this->miniSeries;
    }

    /**
     * Set miniSeries object
     * @param $miniSeries \RiotPHP\DTO\MiniSeriesDTO MiniSeries data
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setMiniSeries($miniSeries)
    {
        $this->miniSeries = $miniSeries;
    }

    /**
     * Gets wins
     * @return int Wins number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getWins()
    {
        return $this->wins;
    }

     /**
     * Sets wins
     * @param $progress int Wins number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * Gets veteran status
     * @return boolean Is player veteran ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getVeteran()
    {
        return $this->veteran;
    }

     /**
     * Sets veteran status
     * @param $progress boolean Is player veteran ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setVeteran($veteran)
    {
        $this->veteran = $veteran;
    }

    /**
     * Gets losses
     * @return int Losses number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLosses()
    {
        return $this->losses;
    }     

     /**
     * Sets losses
     * @param $losses int Losses number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    }

    /**
     * Gets fresh blood status
     * @return boolean Is player new in his league ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getFreshBlood()
    {
        return $this->freshBlood;
    }

     /**
     * Sets fresh blood status
     * @param $freshBlood boolean Is player new in his league ? ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setFreshBlood($freshBlood)
    {
        $this->freshBlood = $freshBlood;
    }

    /**
     * Gets inactive status
     * @return boolean Is player inactive in his league ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getInactive()
    {
        return $this->inactive;
    }

     /**
     * Sets inactive status
     * @param $inactive boolean Is player new in his league ? ?
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
    }

    /**
     * Gets rank
     * @return String Rank
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getRank()
    {
        return $this->rank;
    }

     /**
     * Sets rank
     * @param $rank String Rank
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * Gets summoner ID
     * @return String Summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

     /**
     * Sets summoner ID
     * @param $summonerName String Summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }

    /**
     * Gets league points
     * @return int League Points
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }

     /**
     * Sets League Points
     * @param $leaguePoints int League Points
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLeaguePoints($leaguePoints)
    {
        $this->leaguePoints = $leaguePoints;
    }

    /**
     * Gets queue type
     * @return String Queue type
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

     /**
     * Sets queue type
     * @param $queueType String queue type
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setQueueType($queueType)
    {
        $this->queueType = $queueType;
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
     * @param $leagueID String League ID
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
     * @param $tier String Tier
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    }
}