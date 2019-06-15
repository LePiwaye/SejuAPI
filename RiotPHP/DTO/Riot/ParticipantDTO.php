<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class ParticipantDTO
 * This class handles participant info, used in the League API
 * It's defined accordingly to the Rune declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ParticipantDTO extends GenericDTO
{

    /**
     * @var int \RiotPHP\DTO\Riot\ParticipantStatsDto Participant statictics
     */
    protected $stats;

    /**
     * @var int Participant ID
     */
    protected $participantId;

    /**
     * @var array(\RiotPHP\DTO\Riot\RuneDTO) List of legacy Rune information. Not included for matches played with Runes Reforged. 
     */
    protected $runes;

    /**
     * @var \RiotPHP\DTO\Riot\ParticipantTimelineDTO Participant timeline data. 
     */
    protected $timeline;

    /**
     * @var int Team ID. 100 for blue side. 200 for red side. 
     */
    protected $teamId;

    /**
     * @var int Second Summoner Spell id. 
     */
    protected $spell2Id;

    /**
     * @var array(\RiotPHP\DTO\Riot\MasteryDTO) List of legacy Mastery information. Not included for matches played with Runes Reforged. 
     */
    protected $masteries;

    /**
     * @var string Highest ranked tier achieved for the previous season in a specific subset of queueIds, if any, otherwise null. Used to display border in game loading screen. Please refer to the Ranked Info documentation. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED) 
     */
    protected $highestAchievedSeasonTier;

    /**
     * @var int First Summoner Spell id. 
     */
    protected $spell1Id;

    /**
     * @var int Champion ID
     */
    protected $championId;

    /**
     * RuneDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->stats = null;
        $this->participantId = null;   
        $this->runes = array();
        $this->timeline = null;  
        $this->teamId = null;
        $this->spell2Id = null;  
        $this->masteries = array();
        $this->highestAchievedSeasonTier = null;   
        $this->spell1Id = null;
        $this->championId = null;         
    }

	/**
	 * Get \RiotPHP\DTO\Riot\ParticipantStatsDto Participant statictics
	 * @return int \RiotPHP\DTO\Riot\ParticipantStatsDto Participant statictics
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getStats()
	{
		return $this->stats;
    }

	/**
	 * Set \RiotPHP\DTO\Riot\ParticipantStatsDto Participant statictics
	 * @param int $stats \RiotPHP\DTO\Riot\ParticipantStatsDto Participant statictics
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setStats($stats)
	{
		$this->stats = $stats;
	}

	/**
	 * Get participant ID
	 * @return int Participant ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getParticipantId()
	{
		return $this->participantId;
    }

	/**
	 * Set participant ID
	 * @param int $participantId Participant ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setParticipantId($participantId)
	{
		$this->participantId = $participantId;
	}

	/**
	 * Get list of legacy Rune information. Not included for matches played with Runes Reforged.
	 * @return array(\RiotPHP\DTO\Riot\RuneDTO) List of legacy Rune information. Not included for matches played with Runes Reforged.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getRunes()
	{
		return $this->runes;
    }

	/**
	 * Set list of legacy Rune information. Not included for matches played with Runes Reforged.
	 * @param array(\RiotPHP\DTO\Riot\RuneDTO) $runes List of legacy Rune information. Not included for matches played with Runes Reforged.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setRunes($runes)
	{
		$this->runes = $runes;
	}

	/**
	 * Get participant timeline data.
	 * @return \RiotPHP\DTO\Riot\ParticipantTimelineDTO Participant timeline data.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTimeline()
	{
		return $this->timeline;
    }

	/**
	 * Set participant timeline data.
	 * @param \RiotPHP\DTO\Riot\ParticipantTimelineDTO $timeline Participant timeline data.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTimeline($timeline)
	{
		$this->timeline = $timeline;
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
	 * Get second Summoner Spell id.
	 * @return int Second Summoner Spell id.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSpell2Id()
	{
		return $this->spell2Id;
    }

	/**
	 * Set second Summoner Spell id.
	 * @param int $spell2Id Second Summoner Spell id.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSpell2Id($spell2Id)
	{
		$this->spell2Id = $spell2Id;
	}

	/**
	 * Get list of legacy Mastery information. Not included for matches played with Runes Reforged.
	 * @return array(\RiotPHP\DTO\Riot\MasteryDTO) List of legacy Mastery information. Not included for matches played with Runes Reforged.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMasteries()
	{
		return $this->masteries;
    }

	/**
	 * Set list of legacy Mastery information. Not included for matches played with Runes Reforged.
	 * @param array(\RiotPHP\DTO\Riot\MasteryDTO) $masteries List of legacy Mastery information. Not included for matches played with Runes Reforged.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMasteries($masteries)
	{
		$this->masteries = $masteries;
	}

	/**
	 * Get highest ranked tier achieved for the previous season in a specific subset of queueIds, if any, otherwise null. Used to display border in game loading screen. Please refer to the Ranked Info documentation. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
	 * @return string Highest ranked tier achieved for the previous season in a specific subset of queueIds, if any, otherwise null. Used to display border in game loading screen. Please refer to the Ranked Info documentation. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getHighestAchievedSeasonTier()
	{
		return $this->highestAchievedSeasonTier;
    }

	/**
	 * Set highest ranked tier achieved for the previous season in a specific subset of queueIds, if any, otherwise null. Used to display border in game loading screen. Please refer to the Ranked Info documentation. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
	 * @param string $highestAchievedSeasonTier Highest ranked tier achieved for the previous season in a specific subset of queueIds, if any, otherwise null. Used to display border in game loading screen. Please refer to the Ranked Info documentation. (Legal values: CHALLENGER, MASTER, DIAMOND, PLATINUM, GOLD, SILVER, BRONZE, UNRANKED)
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setHighestAchievedSeasonTier($highestAchievedSeasonTier)
	{
		$this->highestAchievedSeasonTier = $highestAchievedSeasonTier;
	}

	/**
	 * Get first Summoner Spell id.
	 * @return int First Summoner Spell id.
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSpell1Id()
	{
		return $this->spell1Id;
    }

	/**
	 * Set first Summoner Spell id.
	 * @param int $spell1Id First Summoner Spell id.
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSpell1Id($spell1Id)
	{
		$this->spell1Id = $spell1Id;
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