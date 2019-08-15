<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class MatchReferenceDTO
 * This class handles Match Reference Info, used in the League API
 * It's defined accordingly to the MatchReference declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MatchReferenceDTO extends GenericDTO
{

    /**
     * @var String Lane
     */
    protected $lane;

    /**
     * @var long Game ID
     */
    protected $gameId;

     /**
     * @var int Champion ID
     */
    protected $champion;

    /**
     * @var String Platform ID
     */
    protected $platformId; 

    /**
     * @var \SejuAPI\Collections\Riot\Season Season ID
     */
    protected $season; 

    /**
     * @var \SejuAPI\Collections\Riot\MatchmakingQueue Queue ID
     */
    protected $queue; 

    /**
     * @var String Role
     */
    protected $role; 

    /**
     * @var long Timestamp
     */
    protected $timestamp; 

    /**
     * MatchReferenceDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->lane = null;
        $this->gameId = null;
        $this->champion = null;
        $this->platformId = null;
        $this->season = null;
        $this->queue = null;
        $this->role = null;
        $this->timestamp = null;
    }   

    /**
     * Gets progress
     * @return String Lane String
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLane()
    {
        return $this->lane;
    }

     /**
     * Sets lane
     * @param $lane String Lane string
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLane($lane)
    {
        $this->lane = $lane;
    }

    /**
     * Gets game ID
     * @return long Game ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getGameId()
    {
        return $this->gameId;
    }

     /**
     * Sets game ID
     * @param $gameId long Losses number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * Gets champion ID
     * @return int Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getChampion()
    {
        return $this->champion;
    }

     /**
     * Sets game ID
     * @param $championId int Champion number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setChampion($championId)
    {
        $this->championId = $championId;
    }

	/**
	 * Get platform ID
	 * @return String Platform ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlatformId()
	{
		return $this->platformId;
    }

	/**
	 * Set platform ID
	 * @param String $platformId Platform ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
	}

	/**
	 * Get season ID
	 * @return \SejuAPI\Collections\Riot\Season Season ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSeason()
	{
		return $this->season;
    }

	/**
	 * Set season ID
	 * @param \SejuAPI\Collections\Riot\Season $season Season ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSeason($season)
	{
		$this->season = $season;
	}

	/**
	 * Get queue ID
	 * @return \SejuAPI\Collections\Riot\MatchmakingQueue Queue ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getQueue()
	{
		return $this->queue;
    }

	/**
	 * Set queue ID
	 * @param \SejuAPI\Collections\Riot\MatchmakingQueue $queue Queue ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setQueue($queue)
	{
		$this->queue = $queue;
	}

	/**
	 * Get role
	 * @return String Role
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getRole()
	{
		return $this->role;
    }

	/**
	 * Set role
	 * @param String $role Role
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setRole($role)
	{
		$this->role = $role;
	}

	/**
	 * Get timestamp
	 * @return long Timestamp
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTimestamp()
	{
		return $this->timestamp;
    }

	/**
	 * Set timestamp
	 * @param long $timestamp Timestamp
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTimestamp($timestamp)
	{
		$this->timestamp = $timestamp;
	}
}