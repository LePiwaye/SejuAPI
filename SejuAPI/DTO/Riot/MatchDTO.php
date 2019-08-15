<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class MatchDTO
 * This class handles Match info, used in the League API
 * It's defined accordingly to the Rune declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MatchDTO extends GenericDTO
{

    /**
     * @var int Season ID
     */
    protected $seasonId;

    /**
     * @var int Queue ID
     */
    protected $queueId;

    /**
     * @var long Game ID
     */
    protected $gameId;

    /**
     * @var array(\SejuAPI\DTO\Riot\ParticipantIdentityDto) Game ID
     */
    protected $participantIdentities;

    /**
     * @var string Game version
     */
    protected $gameVersion;

    /**
     * @var string Platform ID
     */
    protected $platformId;

    /**
     * @var string Game mode
     */
    protected $gameMode;

    /**
     * @var int Map ID
     */
    protected $mapId;

    /**
     * @var string Game type
     */
    protected $gameType;

    /**
     * @var array(\SejuAPI\DTO\Riot\TeamStatsDTO) Teams
     */
    protected $teams;

    /**
     * @var array(\SejuAPI\DTO\Riot\ParticipantDTO) Teams
     */
    protected $participants;

    /**
     * @var long Game duration
     */
    protected $gameDuration;

    /**
     * @var long Game creation
     */
    protected $gameCreation;

    /**
     * MatchDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->seasonId = null;
        $this->queueId = null; 
        $this->gameId = null;    
        $this->participantIdentities = array();   
        $this->gameVersion = null; 
        $this->platformId = null;       
        $this->gameMode = null; 
        $this->mapId = null;  
        $this->gameType = null;  
        $this->teams = array();
        $this->participants = array();
    }

	/**
	 * Get season ID
	 * @return int Season ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSeasonId()
	{
		return $this->seasonId;
    }

	/**
	 * Set season ID
	 * @param int $seasonId Season ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSeasonId($seasonId)
	{
		$this->seasonId = $seasonId;
	}

	/**
	 * Get queue ID
	 * @return int Queue ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getQueueId()
	{
		return $this->queueId;
    }

	/**
	 * Set queue ID
	 * @param int $queueId Queue ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setQueueId($queueId)
	{
		$this->queueId = $queueId;
	}

	/**
	 * Get game ID
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
	 * Set game ID
	 * @param long $gameId Game ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameId($gameId)
	{
		$this->gameId = $gameId;
	}

	/**
	 * Get game ID
	 * @return array(\SejuAPI\DTO\Riot\ParticipantIdentityDto) Game ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getParticipantIdentities()
	{
		return $this->participantIdentities;
    }

	/**
	 * Set game ID
	 * @param array(\SejuAPI\DTO\Riot\ParticipantIdentityDto) $participantIdentities Game ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setParticipantIdentities($participantIdentities)
	{
		$this->participantIdentities = $participantIdentities;
	}

	/**
	 * Get game version
	 * @return string Game version
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGameVersion()
	{
		return $this->gameVersion;
    }

	/**
	 * Set game version
	 * @param string $gameVersion Game version
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameVersion($gameVersion)
	{
		$this->gameVersion = $gameVersion;
	}

	/**
	 * Get platform ID
	 * @return string Platform ID
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
	 * @param string $platformId Platform ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
	}

	/**
	 * Get game mode
	 * @return string Game mode
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGameMode()
	{
		return $this->gameMode;
    }

	/**
	 * Set game mode
	 * @param string $gameMode Game mode
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameMode($gameMode)
	{
		$this->gameMode = $gameMode;
	}

	/**
	 * Get map ID
	 * @return int Map ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMapId()
	{
		return $this->mapId;
    }

	/**
	 * Set map ID
	 * @param int $mapId Map ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMapId($mapId)
	{
		$this->mapId = $mapId;
	}

	/**
	 * Get game type
	 * @return string Game type
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGameType()
	{
		return $this->gameType;
    }

	/**
	 * Set game type
	 * @param string $gameType Game type
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameType($gameType)
	{
		$this->gameType = $gameType;
	}

	/**
	 * Get teams
	 * @return array(\SejuAPI\DTO\Riot\TeamStatsDTO) Teams
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTeams()
	{
		return $this->teams;
    }

	/**
	 * Set teams
	 * @param array(\SejuAPI\DTO\Riot\TeamStatsDTO) $teams Teams
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTeams($teams)
	{
		$this->teams = $teams;
	}

	/**
	 * Get teams
	 * @return array(\SejuAPI\DTO\Riot\ParticipantDTO) Teams
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getParticipants()
	{
		return $this->participants;
    }

	/**
	 * Set teams
	 * @param array(\SejuAPI\DTO\Riot\ParticipantDTO) $participants Teams
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setParticipants($participants)
	{
		$this->participants = $participants;
	}

	/**
	 * Get game duration
	 * @return long Game duration
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGameDuration()
	{
		return $this->gameDuration;
    }

	/**
	 * Set game duration
	 * @param long $gameDuration Game duration
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameDuration($gameDuration)
	{
		$this->gameDuration = $gameDuration;
	}

	/**
	 * Get game creation
	 * @return long Game creation
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGameCreation()
	{
		return $this->gameCreation;
    }

	/**
	 * Set game creation
	 * @param long $gameCreation Game creation
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGameCreation($gameCreation)
	{
		$this->gameCreation = $gameCreation;
	}
}