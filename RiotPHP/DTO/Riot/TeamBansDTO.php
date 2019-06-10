<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class TeamBansDTO
 * This class handles bans info, used in the League API
 * It's defined accordingly to the TeamBans declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class TeamBansDTO extends GenericDTO
{

    /**
     * @var int Pick turn
     */
    protected $pickTurn;

    /**
     * @var int Champion ID
     */
    protected $championId;

    /**
     * TeamBansDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->pickTurn = null;
        $this->championId = null;           
    }

	/**
	 * Get pick turn
	 * @return int Pick turn
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPickTurn()
	{
		return $this->pickTurn;
    }

	/**
	 * Set pick turn
	 * @param int $pickTurn Pick turn
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPickTurn($pickTurn)
	{
		$this->pickTurn = $pickTurn;
	}

	/**
	 * Get champion ID
	 * @return int Champion ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getChampionId()
	{
		return $this->championId;
    }

	/**
	 * Set champion ID
	 * @param int $championId Champion ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setChampionId($championId)
	{
		$this->championId = $championId;
	}
}