<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class TeamStatsDTO
 * This class handles team stats info, used in the League API
 * It's defined accordingly to the TeamStats declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class TeamStatsDTO extends GenericDTO
{

    /**
     * @var boolean Flag indicating whether or not the team scored the first Dragon kill
     */
    protected $firstDragon;

    /**
     * @var boolean Flag indicating whether or not the team destroyed the first inhibitor. 
     */
	protected $firstInhibitor;
	
	/**
     * @var array(\SejuAPI\DTO\Riot\TeamBansDTO) Banned champions data
     */
	protected $bans;
	
	/**
     * @var int Number of times the team killed Baron. 
     */
	protected $baronKills;

	/**
     * @var boolean Flag indicating whether or not the team scored the first Rift Herald kill. 
     */
	protected $firstRiftHerald;

	/**
     * @var boolean Flag indicating whether or not the team scored the first Baron kill. 
     */
	protected $firstBaron;

	/**
     * @var int Number of times the team killed Rift Herald. 
     */
	protected $riftHeraldKills;

	/**
     * @var boolean Flag indicating whether or not the team scored the first blood. 
     */
	protected $firstBlood;

	/**
     * @var int Team ID. 100 for blue side. 200 for red side. 
     */
	protected $teamId;

	/**
     * @var boolean Flag indicating whether or not the team destroyed the first tower. 
     */
	protected $firstTower;

	/**
     * @var int Number of times the team killed Vilemaw. 
     */
	protected $vilemawKills;

	/**
     * @var int Number of inhibitors the team destroyed. 
     */
	protected $inhibitorKills;

	/**
     * @var int Number of towers the team destroyed. 
     */
	protected $towerKills;

	/**
     * @var int For Dominion matches, specifies the points the team had at game end. 
     */
	protected $dominionVictoryScore;

	/**
     * @var String String indicating whether or not the team won. There are only two values visibile in public match history. (Legal values: Fail, Win) 
     */
	protected $win;

	/**
     * @var int Number of times the team killed Dragon. 
     */
	protected $dragonKills;

    /**
     * TeamStatsDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->firstDragon = null;
		$this->firstInhibitor = null;
		$this->bans = array();
		$this->baronKills = null;
		$this->firstRiftHerald = null;
		$this->firstBaron = null;
		$this->riftHeraldKills = null;
		$this->firstBlood = null;
		$this->teamId = null;
		$this->firstTower = null;
		$this->vilemawKills = null;
		$this->inhibitorKills = null;
		$this->towerKills = null;
		$this->dominionVictoryScore = null;
		$this->win = null;
		$this->dragonKills = null;
    }

	/**
	 * Get flag indicating whether or not the team scored the first Dragon kill
	 * @return boolean Flag indicating whether or not the team scored the first Dragon kill
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstDragon()
	{
		return $this->firstDragon;
    }

	/**
	 * Set flag indicating whether or not the team scored the first Dragon kill
	 * @param boolean $firstDragon Flag indicating whether or not the team scored the first Dragon kill
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstDragon($firstDragon)
	{
		$this->firstDragon = $firstDragon;
	}

	/**
	 * Get flag indicating whether or not the team destroyed the first inhibitor.
	 * @return boolean Flag indicating whether or not the team destroyed the first inhibitor.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstInhibitor()
	{
		return $this->firstInhibitor;
    }

	/**
	 * Set flag indicating whether or not the team destroyed the first inhibitor.
	 * @param boolean $firstInhibitor Flag indicating whether or not the team destroyed the first inhibitor.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstInhibitor($firstInhibitor)
	{
		$this->firstInhibitor = $firstInhibitor;
	}

	/**
	 * Get banned champions data
	 * @return array(TeamBansDTO) Banned champions data
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getBans()
	{
		return $this->bans;
    }

	/**
	 * Set banned champions data
	 * @param array(TeamBansDTO) $bans Banned champions data
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setBans($bans)
	{
		$this->bans = $bans;
	}

	/**
	 * Get number of times the team killed Baron.
	 * @return int Number of times the team killed Baron.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getBaronKills()
	{
		return $this->baronKills;
    }

	/**
	 * Set number of times the team killed Baron.
	 * @param int $baronKills Number of times the team killed Baron.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setBaronKills($baronKills)
	{
		$this->baronKills = $baronKills;
	}

	/**
	 * Get flag indicating whether or not the team scored the first Rift Herald kill.
	 * @return boolean Flag indicating whether or not the team scored the first Rift Herald kill.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstRiftHerald()
	{
		return $this->firstRiftHerald;
    }

	/**
	 * Set flag indicating whether or not the team scored the first Rift Herald kill.
	 * @param boolean $firstRiftHerald Flag indicating whether or not the team scored the first Rift Herald kill.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstRiftHerald($firstRiftHerald)
	{
		$this->firstRiftHerald = $firstRiftHerald;
	}

	/**
	 * Get flag indicating whether or not the team scored the first Baron kill.
	 * @return boolean Flag indicating whether or not the team scored the first Baron kill.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstBaron()
	{
		return $this->firstBaron;
    }

	/**
	 * Set flag indicating whether or not the team scored the first Baron kill.
	 * @param boolean $firstBaron Flag indicating whether or not the team scored the first Baron kill.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstBaron($firstBaron)
	{
		$this->firstBaron = $firstBaron;
	}

	/**
	 * Get number of times the team killed Rift Herald.
	 * @return int Number of times the team killed Rift Herald.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getRiftHeraldKills()
	{
		return $this->riftHeraldKills;
    }

	/**
	 * Set number of times the team killed Rift Herald.
	 * @param int $riftHeraldKills Number of times the team killed Rift Herald.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setRiftHeraldKills($riftHeraldKills)
	{
		$this->riftHeraldKills = $riftHeraldKills;
	}

	/**
	 * Get flag indicating whether or not the team scored the first blood.
	 * @return boolean Flag indicating whether or not the team scored the first blood.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstBlood()
	{
		return $this->firstBlood;
    }

	/**
	 * Set flag indicating whether or not the team scored the first blood.
	 * @param boolean $firstBlood Flag indicating whether or not the team scored the first blood.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstBlood($firstBlood)
	{
		$this->firstBlood = $firstBlood;
	}

	/**
	 * Get team ID. 100 for blue side. 200 for red side.
	 * @return int Team ID. 100 for blue side. 200 for red side.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTeamId()
	{
		return $this->teamId;
    }

	/**
	 * Set team ID. 100 for blue side. 200 for red side.
	 * @param int $teamId Team ID. 100 for blue side. 200 for red side.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTeamId($teamId)
	{
		$this->teamId = $teamId;
	}

	/**
	 * Get flag indicating whether or not the team destroyed the first tower.
	 * @return boolean Flag indicating whether or not the team destroyed the first tower.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstTower()
	{
		return $this->firstTower;
    }

	/**
	 * Set flag indicating whether or not the team destroyed the first tower.
	 * @param boolean $firstTower Flag indicating whether or not the team destroyed the first tower.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstTower($firstTower)
	{
		$this->firstTower = $firstTower;
	}

	/**
	 * Get number of times the team killed Vilemaw.
	 * @return int Number of times the team killed Vilemaw.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getVilemawKills()
	{
		return $this->vilemawKills;
    }

	/**
	 * Set number of times the team killed Vilemaw.
	 * @param int $vilemawKills Number of times the team killed Vilemaw.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setVilemawKills($vilemawKills)
	{
		$this->vilemawKills = $vilemawKills;
	}

	/**
	 * Get number of inhibitors the team destroyed.
	 * @return int Number of inhibitors the team destroyed.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getInhibitorKills()
	{
		return $this->inhibitorKills;
    }

	/**
	 * Set number of inhibitors the team destroyed.
	 * @param int $inhibitorKills Number of inhibitors the team destroyed.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setInhibitorKills($inhibitorKills)
	{
		$this->inhibitorKills = $inhibitorKills;
	}

	/**
	 * Get number of towers the team destroyed.
	 * @return int Number of towers the team destroyed.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTowerKills()
	{
		return $this->towerKills;
    }

	/**
	 * Set number of towers the team destroyed.
	 * @param int $towerKills Number of towers the team destroyed.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTowerKills($towerKills)
	{
		$this->towerKills = $towerKills;
	}

	/**
	 * Get for Dominion matches, specifies the points the team had at game end.
	 * @return int For Dominion matches, specifies the points the team had at game end.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDominionVictoryScore()
	{
		return $this->dominionVictoryScore;
    }

	/**
	 * Set for Dominion matches, specifies the points the team had at game end.
	 * @param int $dominionVictoryScore For Dominion matches, specifies the points the team had at game end.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDominionVictoryScore($dominionVictoryScore)
	{
		$this->dominionVictoryScore = $dominionVictoryScore;
	}

	/**
	 * Get string indicating whether or not the team won. There are only two values visibile in public match history. (Legal values: Fail, Win)
	 * @return String String indicating whether or not the team won. There are only two values visibile in public match history. (Legal values: Fail, Win)
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getWin()
	{
		return $this->win;
    }

	/**
	 * Set string indicating whether or not the team won. There are only two values visibile in public match history. (Legal values: Fail, Win)
	 * @param String $win String indicating whether or not the team won. There are only two values visibile in public match history. (Legal values: Fail, Win)
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setWin($win)
	{
		$this->win = $win;
	}

	/**
	 * Get number of times the team killed Dragon.
	 * @return int Number of times the team killed Dragon.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDragonKills()
	{
		return $this->dragonKills;
    }

	/**
	 * Set number of times the team killed Dragon.
	 * @param int $dragonKills Number of times the team killed Dragon.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDragonKills($dragonKills)
	{
		$this->dragonKills = $dragonKills;
	}
}