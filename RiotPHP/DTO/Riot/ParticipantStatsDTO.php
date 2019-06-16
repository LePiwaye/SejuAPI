<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class ParticipantStatsDTO
 * This class handles participant stats info, used in the League API
 * It's defined accordingly to the ParticipantStats declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ParticipantStatsDTO extends GenericDTO
{
    /**
     * @var boolean First blood assist
     */
    protected $firstBloodAssist;

    /**
     * @var long Vision score
     */
    protected $visionScore;

    /**
     * @var long Magic damage dealt to champions
     */
    protected $magicDamageDealtToChampions;

    /**
     * @var long Damage dealt to objectives
     */
    protected $damageDealtToObjectives;

    /**
     * @var int Total time crowd control dealt
     */
    protected $totalTimeCrowdControlDealt;

    /**
     * @var int Longest time spent living
     */
    protected $longestTimeSpentLiving;

    /**
     * @var int Perk 1 - Var 1
     */
    protected $perk1Var1;

    /**
     * @var int Perk 1 - Var 2
     */
    protected $perk1Var2;

    /**
     * @var int Perk 1 - Var 3
     */
    protected $perk1Var3;

    /**
     * @var int Triple kills number
     */
    protected $tripleKills;

    /**
     * @var int Perk 3 - Var 3
     */
    protected $perk3Var3;

    /**
     * @var int Node neutralize assist
     */
    protected $nodeNeutralizeAssist;

    /**
     * @var int Perk 3 - Var 2
     */
    protected $perk3Var2;

    /**
     * @var int Player score 0
     */
    protected $playerScore0;

    /**
     * @var int Player score 1
     */
    protected $playerScore1;

    /**
     * @var int Player score 2
     */
    protected $playerScore2;

    /**
     * @var int Player score 3
     */
    protected $playerScore3;

    /**
     * @var int Player score 4
     */
    protected $playerScore4;

    /**
     * @var int Player score 5
     */
    protected $playerScore5;

    /**
     * @var int Player score 6
     */
    protected $playerScore6;

    /**
     * @var int Player score 7
     */
    protected $playerScore7;

    /**
     * @var int Player score 8
     */
    protected $playerScore8;

    /**
     * @var int Player score 9
     */
    protected $playerScore9;

    /**
     * @var int Kills
     */
    protected $kills;

    /**
     * @var int Perk 5 - Var 1
     */
    protected $perk5Var1;

    /**
     * @var int Perk 5 - Var 3
     */
    protected $perk5Var2;

    /**
     * @var int Perk 5 - Var 3
     */
    protected $perk5Var3;

    /**
     * @var int Total score rank
     */
    protected $totalScoreRank;

    /**
     * @var int Neutral minions killed
     */
    protected $neutralMinionsKilled;

    /**
     * @var long Damage dealt to turrets
     */
    protected $damageDealtToTurrets;

    /**
     * @var long Physical damage dealt to champions
     */
    protected $physicalDamageDealtToChampions;

    /**
     * @var int Node capture
     */
    protected $nodeCapture;

    /**
     * @var int Largest multi kill
     */
    protected $largestMultiKill;

    /**
     * @var int Perk 2 - Var 2
     */
    protected $perk2Var2;

    /**
     * @var int Perk 2 - Var 3
     */
    protected $perk2Var3;

    /**
     * @var int Total units healed
     */
    protected $totalUnitsHealed;

    /**
     * @var int Perk 2 - Var 1
     */
    protected $perk2Var1;

    /**
     * @var int Perk 4 - Var 1
     */
    protected $perk4Var1;

    /**
     * @var int Perk 4 - Var 2
     */
    protected $perk4Var2;

    /**
     * @var int Perk 4 - Var 3
     */
    protected $perk4Var3;

    /* --------------------------- */

    /**
     * @var int Wards killed
     */
    protected $wardsKilled;

    /**
     * @var int Largest critical strike
     */
    protected $largestCriticalStrike;

    /**
     * @var int Largest killing spree
     */
    protected $largestKillingSpree;

    /**
     * @var int Quadra kills
     */
    protected $quadraKills;

    /**
     * @var int Team objective
     */
    protected $teamObjective;

    /**
     * @var long Magic damage dealt
     */
    protected $magicDamageDealt;

    /**
     * @var int Item 0
     */
    protected $item0;

    /**
     * @var int Item 2
     */
    protected $item2;

    /**
     * @var int Item 3
     */
    protected $item3;

    /**
     * @var int Item 4
     */
    protected $item4;

    /**
     * @var int Item 5
     */
    protected $item5;

    /**
     * @var int Item 6
     */
    protected $item6;

    /**
     * @var int Neutral minions killed in team jungle
     */
    protected $neutralMinionsKilledTeamJungle;

    /**
     * @var int Perk 0
     */
    protected $perk0;

    /**
     * @var int Perk 1
     */
    protected $perk1;

    /**
     * @var int Perk 2
     */
    protected $perk2;

    /**
     * @var int Perk 3
     */
    protected $perk3;

    /**
     * @var int Perk 4
     */
    protected $perk4;

    /**
     * @var int Perk 5
     */
    protected $perk5;

    /**
     * @var int Perk 3 - Var 1
     */
    protected $perk3Var1;

    /**
     * @var int Self-mitigated damage
     */
    protected $damageSelfMitigated;

    /**
     * @var int Magical damage taken
     */
    protected $magicalDamageTaken;

    /**
     * @var boolean First inhibitor kill
     */
    protected $firstInhibitorKill;

    /**
     * @var long True damage taken
     */
    protected $trueDamageTaken;

    /**
     * @var int Node neutralize
     */
    protected $nodeNeutralize;

    /**
     * @var int Assists
     */
    protected $assists;

    /**
     * @var int Combat player score
     */
    protected $combatPlayerScore;

    /**
     * @var int Primary rune path
     */
    protected $perkPrimaryStyle;

    /**
     * @var int Gold spent
     */
    protected $goldSpent;

    /**
     * @var long True damage dealt
     */
    protected $trueDamageDealt;

    /**
     * @var int Participant ID
     */
    protected $participantId;

    /**
     * @var long Total damage taken
     */
    protected $totalDamageTaken;

    /**
     * @var long Physical damage dealt
     */
    protected $physicalDamageDealt;

    /**
     * @var int Sight ward bought in game
     */
    protected $sightWardsBoughtInGame;

    /**
     * @var long Total damage dealt to champions
     */
    protected $totalDamageDealtToChampions;

    /**
     * @var long Physical damage taken
     */
    protected $physicalDamageTaken;

    /**
     * @var int Total player score
     */
    protected $totalPlayerScore;

    /**
     * @var boolean Win
     */
    protected $win;

    /**
     * @var int Objective player score
     */
    protected $objectivePlayerScore;

    /**
     * @var long Total damage dealt
     */
    protected $totalDamageDealt;

    /**
     * @var int Item 1
     */
    protected $item1;

    /**
     * @var int Neutral minions killed in enemy jungle
     */
    protected $neutralMinionsKilledEnemyJungle;

    /**
     * @var int Deaths
     */
    protected $deaths;

    /**
     * @var int Wards places
     */
    protected $wardsPlaced;

    /**
     * @var int Secondary rune path
     */
    protected $perkSubStyle;

    /**
     * @var int Turret kills
     */
    protected $turretKills;

    /**
     * @var int First blood kill
     */
    protected $firstBloodKill;

    /**
     * @var long True damage dealt to champions
     */
    protected $trueDamageDealtToChampions;

    /**
     * @var int Gold earned
     */
    protected $goldEarned;

    /**
     * @var int Killing sprees
     */
    protected $killingSprees;

    /**
     * @var int Unreal kills
     */
    protected $unrealKills;

    /**
     * @var int Altars captured
     */
    protected $altarsCaptured;

    /**
     * @var boolean First tower assist
     */
    protected $firstTowerAssist;

    /**
     * @var boolean First tower assist
     */
    protected $firstTowerKill;

    /**
     * @var int Champion level
     */
    protected $champLevel;

    /**
     * @var int Double kills
     */
    protected $doubleKills;

    /**
     * @var int Node capture assist
     */
    protected $nodeCaptureAssist;

    /**
     * @var int Inhibitor kills
     */
    protected $inhibitorKills;

    /**
     * @var boolean First inhibitor assist
     */
    protected $firstInhibitorAssist;

    /**
     * @var int Perk 0 - Var 1
     */
    protected $perk0Var1;

    /**
     * @var int Perk 0 - Var 2
     */
    protected $perk0Var2;

    /**
     * @var int Perk 0 - Var 3
     */
    protected $perk0Var3;

    /**
     * @var int Vision wards bought in game
     */
    protected $visionWardsBoughtInGame;

    /**
     * @var int Altars neutralized
     */
    protected $altarsNeutralized;

    /**
     * @var int Pentakills
     */
    protected $pentaKills;

    /**
     * @var long Total heal
     */
    protected $totalHeal;

    /**
     * @var int Total minions killed
     */
    protected $totalMinionsKilled;

    /**
     * @var long Time CCing others
     */
    protected $timeCCingOthers;

    /**
     * ParticipantStatsDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->firstBloodAssist = null;
        $this->visionScore = null;
        $this->magicDamageDealtToChampions = null;
        $this->damageDealtToObjectives = null;
        $this->totalTimeCrowdControlDealt = null; 
        $this->longestTimeSpentLiving = null;
        $this->perk1Var1 = null;
        $this->perk1Var2 = null;
        $this->perk1Var3 = null;
        $this->tripleKills = null;
        $this->perk3Var3 = null;
        $this->nodeNeutralizeAssist = null;
        $this->perk3Var2 = null;
        $this->playerScore0 = null;
        $this->playerScore1 = null;
        $this->playerScore2 = null;
        $this->playerScore3 = null;
        $this->playerScore4 = null;
        $this->playerScore5 = null;
        $this->playerScore6 = null;
        $this->playerScore7 = null;
        $this->playerScore8 = null;
        $this->playerScore9 = null;
        $this->kills = null;
        $this->perk5Var1 = null;
        $this->perk5Var2 = null;
        $this->perk5Var3 = null;
        $this->totalScoreRank = null;
        $this->neutralMinionsKilled = null;
        $this->damageDealtToTurrets = null;
        $this->physicalDamageDealtToChampions = null;
        $this->nodeCapture = null;
        $this->largestMultiKill = null;
        $this->perk2Var2 = null;
        $this->perk2Var3 = null;
        $this->totalUnitsHealed = null;
        $this->perk2Var1 = null;
        $this->perk4Var1 = null;
        $this->perk4Var2 = null;
        $this->perk4Var3 = null;
        $this->wardsKilled = null;
        $this->largestCriticalStrike = null;
        $this->largestKillingSpree = null;
        $this->quadraKills = null;
        $this->teamObjective = null;
        $this->magicDamageDealt = null;
        $this->item2 = null;
        $this->item3 = null;
        $this->item0 = null;
        $this->neutralMinionsKilledTeamJungle = null;
        $this->item6 = null;
        $this->item4 = null;
        $this->item5 = null;
        $this->perk0 = null;
        $this->perk1 = null;
        $this->perk2 = null;
        $this->perk3 = null;
        $this->perk4 = null;
        $this->perk5 = null;
        $this->damageSelfMitigated = null;
        $this->magicalDamageTaken = null;
        $this->firstInhibitorKill = null;
        $this->trueDamageTaken = null;
        $this->nodeNeutralize = null;
        $this->assists = null;
        $this->combatPlayerScore = null;
        $this->perkPrimaryStyle = null;
        $this->goldSpent = null;
        $this->trueDamageDealt = null;
        $this->participantId = null;
        $this->totalDamageTaken = null;
        $this->physicalDamageDealt = null;
        $this->sightWardsBoughtInGame = null;
        $this->totalDamageDealtToChampions = null;
        $this->physicalDamageTaken = null;
        $this->totalPlayerScore = null;
        $this->win = null;
        $this->objectivePlayerScore = null;
        $this->totalDamageDealt = null;
        $this->item1 = null;
        $this->neutralMinionsKilledEnemyJungle = null;
        $this->deaths = null;
        $this->wardsPlaced = null;
        $this->perkSubStyle = null;
        $this->turretKills = null;
        $this->firstBloodKill = null;
        $this->trueDamageDealtToChampions = null;
        $this->goldEarned = null;
        $this->killingSprees = null;
        $this->unrealKills = null;
        $this->altarsCaptured = null;
        $this->firstTowerAssist = null;
        $this->firstTowerKill = null;
        $this->champLevel = null;
        $this->doubleKills = null;
        $this->nodeCaptureAssist = null;
        $this->inhibitorKills = null;
        $this->firstInhibitorAssist = null;
        $this->perk0Var1 = null;
        $this->perk0Var2 = null;
        $this->perk0Var3 = null;
        $this->visionWardsBoughtInGame = null;
        $this->altarsNeutralized = null;
        $this->pentaKills = null;
        $this->totalHeal = null;
        $this->totalMinionsKilled = null;
        $this->timeCCingOthers = null;
    }    

	/**
	 * Get first blood assist
	 * @return boolean First blood assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstBloodAssist()
	{
		return $this->firstBloodAssist;
    }

	/**
	 * Set first blood assist
	 * @param boolean $firstBloodAssist First blood assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstBloodAssist($firstBloodAssist)
	{
		$this->firstBloodAssist = $firstBloodAssist;
	}

	/**
	 * Get vision score
	 * @return long Vision score
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getVisionScore()
	{
		return $this->visionScore;
    }

	/**
	 * Set vision score
	 * @param long $visionScore Vision score
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setVisionScore($visionScore)
	{
		$this->visionScore = $visionScore;
	}

	/**
	 * Get magic damage dealt to champions
	 * @return long Magic damage dealt to champions
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMagicDamageDealtToChampions()
	{
		return $this->magicDamageDealtToChampions;
    }

	/**
	 * Set magic damage dealt to champions
	 * @param long $magicDamageDealtToChampions Magic damage dealt to champions
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMagicDamageDealtToChampions($magicDamageDealtToChampions)
	{
		$this->magicDamageDealtToChampions = $magicDamageDealtToChampions;
	}

	/**
	 * Get damage dealt to objectives
	 * @return long Damage dealt to objectives
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDamageDealtToObjectives()
	{
		return $this->damageDealtToObjectives;
    }

	/**
	 * Set damage dealt to objectives
	 * @param long $damageDealtToObjectives Damage dealt to objectives
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDamageDealtToObjectives($damageDealtToObjectives)
	{
		$this->damageDealtToObjectives = $damageDealtToObjectives;
	}

	/**
	 * Get total time crowd control dealt
	 * @return int Total time crowd control dealt
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalTimeCrowdControlDealt()
	{
		return $this->totalTimeCrowdControlDealt;
    }

	/**
	 * Set total time crowd control dealt
	 * @param int $totalTimeCrowdControlDealt Total time crowd control dealt
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalTimeCrowdControlDealt($totalTimeCrowdControlDealt)
	{
		$this->totalTimeCrowdControlDealt = $totalTimeCrowdControlDealt;
	}

	/**
	 * Get longest time spent living
	 * @return int Longest time spent living
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLongestTimeSpentLiving()
	{
		return $this->longestTimeSpentLiving;
    }

	/**
	 * Set longest time spent living
	 * @param int $longestTimeSpentLiving Longest time spent living
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLongestTimeSpentLiving($longestTimeSpentLiving)
	{
		$this->longestTimeSpentLiving = $longestTimeSpentLiving;
	}

	/**
	 * Get perk 1 - Var 1
	 * @return int Perk 1 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk1Var1()
	{
		return $this->perk1Var1;
    }

	/**
	 * Set perk 1 - Var 1
	 * @param int $perk1Var1 Perk 1 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk1Var1($perk1Var1)
	{
		$this->perk1Var1 = $perk1Var1;
	}

	/**
	 * Get perk 1 - Var 2
	 * @return int Perk 1 - Var 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk1Var2()
	{
		return $this->perk1Var2;
    }

	/**
	 * Set perk 1 - Var 2
	 * @param int $perk1Var2 Perk 1 - Var 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk1Var2($perk1Var2)
	{
		$this->perk1Var2 = $perk1Var2;
	}

	/**
	 * Get perk 1 - Var 3
	 * @return int Perk 1 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk1Var3()
	{
		return $this->perk1Var3;
    }

	/**
	 * Set perk 1 - Var 3
	 * @param int $perk1Var3 Perk 1 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk1Var3($perk1Var3)
	{
		$this->perk1Var3 = $perk1Var3;
	}

	/**
	 * Get triple kills number
	 * @return int Triple kills number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTripleKills()
	{
		return $this->tripleKills;
    }

	/**
	 * Set triple kills number
	 * @param int $tripleKills Triple kills number
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTripleKills($tripleKills)
	{
		$this->tripleKills = $tripleKills;
	}

	/**
	 * Get perk 3 - Var 3
	 * @return int Perk 3 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk3Var3()
	{
		return $this->perk3Var3;
    }

	/**
	 * Set perk 3 - Var 3
	 * @param int $perk3Var3 Perk 3 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk3Var3($perk3Var3)
	{
		$this->perk3Var3 = $perk3Var3;
	}

	/**
	 * Get node neutralize assist
	 * @return int Node neutralize assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNodeNeutralizeAssist()
	{
		return $this->nodeNeutralizeAssist;
    }

	/**
	 * Set node neutralize assist
	 * @param int $nodeNeutralizeAssist Node neutralize assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNodeNeutralizeAssist($nodeNeutralizeAssist)
	{
		$this->nodeNeutralizeAssist = $nodeNeutralizeAssist;
	}

	/**
	 * Get perk 3 - Var 2
	 * @return int Perk 3 - Var 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk3Var2()
	{
		return $this->perk3Var2;
    }

	/**
	 * Set perk 3 - Var 2
	 * @param int $perk3Var2 Perk 3 - Var 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk3Var2($perk3Var2)
	{
		$this->perk3Var2 = $perk3Var2;
	}

	/**
	 * Get player score 0
	 * @return int Player score 0
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore0()
	{
		return $this->playerScore0;
    }

	/**
	 * Set player score 0
	 * @param int $playerScore0 Player score 0
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore0($playerScore0)
	{
		$this->playerScore0 = $playerScore0;
	}

	/**
	 * Get player score 1
	 * @return int Player score 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore1()
	{
		return $this->playerScore1;
    }

	/**
	 * Set player score 1
	 * @param int $playerScore1 Player score 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore1($playerScore1)
	{
		$this->playerScore1 = $playerScore1;
	}

	/**
	 * Get player score 3
	 * @return int Player score 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore3()
	{
		return $this->playerScore3;
    }

	/**
	 * Set player score 3
	 * @param int $playerScore3 Player score 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore3($playerScore3)
	{
		$this->playerScore3 = $playerScore3;
	}

	/**
	 * Get player score 4
	 * @return int Player score 4
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore4()
	{
		return $this->playerScore4;
    }

	/**
	 * Set player score 4
	 * @param int $playerScore4 Player score 4
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore4($playerScore4)
	{
		$this->playerScore4 = $playerScore4;
	}

	/**
	 * Get player score 5
	 * @return int Player score 5
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore5()
	{
		return $this->playerScore5;
    }

	/**
	 * Set player score 5
	 * @param int $playerScore5 Player score 5
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore5($playerScore5)
	{
		$this->playerScore5 = $playerScore5;
	}

	/**
	 * Get player score 6
	 * @return int Player score 6
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore6()
	{
		return $this->playerScore6;
    }

	/**
	 * Set player score 6
	 * @param int $playerScore6 Player score 6
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore6($playerScore6)
	{
		$this->playerScore6 = $playerScore6;
	}

	/**
	 * Get player score 7
	 * @return int Player score 7
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore7()
	{
		return $this->playerScore7;
    }

	/**
	 * Set player score 7
	 * @param int $playerScore7 Player score 7
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore7($playerScore7)
	{
		$this->playerScore7 = $playerScore7;
	}

	/**
	 * Get player score 8
	 * @return int Player score 8
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore8()
	{
		return $this->playerScore8;
    }

	/**
	 * Set player score 8
	 * @param int $playerScore8 Player score 8
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore8($playerScore8)
	{
		$this->playerScore8 = $playerScore8;
	}

	/**
	 * Get player score 9
	 * @return int Player score 9
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore9()
	{
		return $this->playerScore9;
    }

	/**
	 * Set player score 9
	 * @param int $playerScore9 Player score 9
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore9($playerScore9)
	{
		$this->playerScore9 = $playerScore9;
	}

	/**
	 * Get kills
	 * @return int Kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getKills()
	{
		return $this->kills;
    }

	/**
	 * Set kills
	 * @param int $kills Kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setKills($kills)
	{
		$this->kills = $kills;
	}

	/**
	 * Get perk 5 - Var 1
	 * @return int Perk 5 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk5Var1()
	{
		return $this->perk5Var1;
    }

	/**
	 * Set perk 5 - Var 1
	 * @param int $perk5Var1 Perk 5 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk5Var1($perk5Var1)
	{
		$this->perk5Var1 = $perk5Var1;
	}

	/**
	 * Get perk 5 - Var 3
	 * @return int Perk 5 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk5Var2()
	{
		return $this->perk5Var2;
    }

	/**
	 * Set perk 5 - Var 3
	 * @param int $perk5Var2 Perk 5 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk5Var2($perk5Var2)
	{
		$this->perk5Var2 = $perk5Var2;
	}

	/**
	 * Get perk 5 - Var 3
	 * @return int Perk 5 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk5Var3()
	{
		return $this->perk5Var3;
    }

	/**
	 * Set perk 5 - Var 3
	 * @param int $perk5Var3 Perk 5 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk5Var3($perk5Var3)
	{
		$this->perk5Var3 = $perk5Var3;
	}

	/**
	 * Get totalScoreRank
	 * @return int totalScoreRank
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalScoreRank()
	{
		return $this->totalScoreRank;
    }

	/**
	 * Set totalScoreRank
	 * @param int $totalScoreRank totalScoreRank
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalScoreRank($totalScoreRank)
	{
		$this->totalScoreRank = $totalScoreRank;
	}

	/**
	 * Get neutral minions killed
	 * @return int Neutral minions killed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNeutralMinionsKilled()
	{
		return $this->neutralMinionsKilled;
    }

	/**
	 * Set neutral minions killed
	 * @param int $neutralMinionsKilled Neutral minions killed
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNeutralMinionsKilled($neutralMinionsKilled)
	{
		$this->neutralMinionsKilled = $neutralMinionsKilled;
	}

	/**
	 * Get damage dealt to turrets
	 * @return long Damage dealt to turrets
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDamageDealtToTurrets()
	{
		return $this->damageDealtToTurrets;
    }

	/**
	 * Set amage dealt to turrets
	 * @param long $damageDealtToTurrets Damage dealt to turrets
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDamageDealtToTurrets($damageDealtToTurrets)
	{
		$this->damageDealtToTurrets = $damageDealtToTurrets;
	}

	/**
	 * Get physical damage dealt to champions
	 * @return long Physical damage dealt to champions
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPhysicalDamageDealtToChampions()
	{
		return $this->physicalDamageDealtToChampions;
    }

	/**
	 * Set physical damage dealt to champions
	 * @param long $physicalDamageDealtToChampions Physical damage dealt to champions
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPhysicalDamageDealtToChampions($physicalDamageDealtToChampions)
	{
		$this->physicalDamageDealtToChampions = $physicalDamageDealtToChampions;
	}

	/**
	 * Get node capture
	 * @return int Node capture
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNodeCapture()
	{
		return $this->nodeCapture;
    }

	/**
	 * Set node capture
	 * @param int $nodeCapture Node capture
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNodeCapture($nodeCapture)
	{
		$this->nodeCapture = $nodeCapture;
	}

	/**
	 * Get largest multi kill
	 * @return int Largest multi kill
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLargestMultiKill()
	{
		return $this->largestMultiKill;
    }

	/**
	 * Set largest multi kill
	 * @param int $largestMultiKill Largest multi kill
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLargestMultiKill($largestMultiKill)
	{
		$this->largestMultiKill = $largestMultiKill;
	}

	/**
	 * Get perk 2 - Var 2
	 * @return int Perk 2 - Var 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk2Var2()
	{
		return $this->perk2Var2;
    }

	/**
	 * Set perk 2 - Var 2
	 * @param int $perk2Var2 Perk 2 - Var 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk2Var2($perk2Var2)
	{
		$this->perk2Var2 = $perk2Var2;
	}

	/**
	 * Get perk 2 - Var 3
	 * @return int Perk 2 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk2Var3()
	{
		return $this->perk2Var3;
    }

	/**
	 * Set perk 2 - Var 3
	 * @param int $perk2Var3 Perk 2 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk2Var3($perk2Var3)
	{
		$this->perk2Var3 = $perk2Var3;
	}

	/**
	 * Get total units healed
	 * @return int Total units healed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalUnitsHealed()
	{
		return $this->totalUnitsHealed;
    }

	/**
	 * Set total units healed
	 * @param int $totalUnitsHealed Total units healed
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalUnitsHealed($totalUnitsHealed)
	{
		$this->totalUnitsHealed = $totalUnitsHealed;
	}

	/**
	 * Get perk 2 - Var 1
	 * @return int Perk 2 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk2Var1()
	{
		return $this->perk2Var1;
    }

	/**
	 * Set perk 2 - Var 1
	 * @param int $perk2Var1 Perk 2 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk2Var1($perk2Var1)
	{
		$this->perk2Var1 = $perk2Var1;
	}

	/**
	 * Get perk 4 - Var 1
	 * @return int Perk 4 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk4Var1()
	{
		return $this->perk4Var1;
    }

	/**
	 * Set perk 4 - Var 1
	 * @param int $perk4Var1 Perk 4 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk4Var1($perk4Var1)
	{
		$this->perk4Var1 = $perk4Var1;
	}

	/**
	 * Get perk 4 - Var 2
	 * @return int Perk 4 - Var 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk4Var2()
	{
		return $this->perk4Var2;
    }

	/**
	 * Set perk 4 - Var 2
	 * @param int $perk4Var2 Perk 4 - Var 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk4Var2($perk4Var2)
	{
		$this->perk4Var2 = $perk4Var2;
	}

	/**
	 * Get perk 4 - Var 3
	 * @return int Perk 4 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk4Var3()
	{
		return $this->perk4Var3;
    }

	/**
	 * Set perk 4 - Var 3
	 * @param int $perk4Var3 Perk 4 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk4Var3($perk4Var3)
	{
		$this->perk4Var3 = $perk4Var3;
	}

	/**
	 * Get wards killed
	 * @return int Wards killed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getWardsKilled()
	{
		return $this->wardsKilled;
    }

	/**
	 * Set wards killed
	 * @param int $wardsKilled Wards killed
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setWardsKilled($wardsKilled)
	{
		$this->wardsKilled = $wardsKilled;
	}

	/**
	 * Get largest critical strike
	 * @return int Largest critical strike
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLargestCriticalStrike()
	{
		return $this->largestCriticalStrike;
    }

	/**
	 * Set largest critical strike
	 * @param int $largestCriticalStrike Largest critical strike
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLargestCriticalStrike($largestCriticalStrike)
	{
		$this->largestCriticalStrike = $largestCriticalStrike;
	}

	/**
	 * Get largest killing spree
	 * @return int Largest killing spree
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLargestKillingSpree()
	{
		return $this->largestKillingSpree;
    }

	/**
	 * Set largest killing spree
	 * @param int $largestKillingSpree Largest killing spree
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLargestKillingSpree($largestKillingSpree)
	{
		$this->largestKillingSpree = $largestKillingSpree;
	}

	/**
	 * Get quadra kills
	 * @return int Quadra kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getQuadraKills()
	{
		return $this->quadraKills;
    }

	/**
	 * Set quadra kills
	 * @param int $quadraKills Quadra kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setQuadraKills($quadraKills)
	{
		$this->quadraKills = $quadraKills;
	}

	/**
	 * Get team objective
	 * @return int Team objective
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTeamObjective()
	{
		return $this->teamObjective;
    }

	/**
	 * Set team objective
	 * @param int $teamObjective Team objective
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTeamObjective($teamObjective)
	{
		$this->teamObjective = $teamObjective;
	}

	/**
	 * Get magic damage dealt
	 * @return long Magic damage dealt
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMagicDamageDealt()
	{
		return $this->magicDamageDealt;
    }

	/**
	 * Set magic damage dealt
	 * @param long $magicDamageDealt Magic damage dealt
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMagicDamageDealt($magicDamageDealt)
	{
		$this->magicDamageDealt = $magicDamageDealt;
	}

	/**
	 * Get item 0
	 * @return int Item 0
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem0()
	{
		return $this->item0;
    }

	/**
	 * Set item 0
	 * @param int $item0 Item 0
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem0($item0)
	{
		$this->item0 = $item0;
	}

	/**
	 * Get item 2
	 * @return int Item 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem2()
	{
		return $this->item2;
    }

	/**
	 * Set item 2
	 * @param int $item2 Item 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem2($item2)
	{
		$this->item2 = $item2;
	}

	/**
	 * Get item 3
	 * @return int Item 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem3()
	{
		return $this->item3;
    }

	/**
	 * Set item 3
	 * @param int $item3 Item 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem3($item3)
	{
		$this->item3 = $item3;
	}

	/**
	 * Get item 4
	 * @return int Item 4
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem4()
	{
		return $this->item4;
    }

	/**
	 * Set item 4
	 * @param int $item4 Item 4
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem4($item4)
	{
		$this->item4 = $item4;
	}

	/**
	 * Get item 5
	 * @return int Item 5
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem5()
	{
		return $this->item5;
    }

	/**
	 * Set item 5
	 * @param int $item5 Item 5
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem5($item5)
	{
		$this->item5 = $item5;
	}

	/**
	 * Get item 6
	 * @return int Item 6
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem6()
	{
		return $this->item6;
    }

	/**
	 * Set item 6
	 * @param int $item6 Item 6
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem6($item6)
	{
		$this->item6 = $item6;
	}

	/**
	 * Get neutral minions killed in team jungle
	 * @return int Neutral minions killed in team jungle
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNeutralMinionsKilledTeamJungle()
	{
		return $this->neutralMinionsKilledTeamJungle;
    }

	/**
	 * Set neutral minions killed in team jungle
	 * @param int $neutralMinionsKilledTeamJungle Neutral minions killed in team jungle
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNeutralMinionsKilledTeamJungle($neutralMinionsKilledTeamJungle)
	{
		$this->neutralMinionsKilledTeamJungle = $neutralMinionsKilledTeamJungle;
	}

	/**
	 * Get perk 0
	 * @return int Perk 0
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk0()
	{
		return $this->perk0;
    }

	/**
	 * Set perk 0
	 * @param int $perk0 Perk 0
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk0($perk0)
	{
		$this->perk0 = $perk0;
	}

	/**
	 * Get perk 1
	 * @return int Perk 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk1()
	{
		return $this->perk1;
    }

	/**
	 * Set perk 1
	 * @param int $perk1 Perk 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk1($perk1)
	{
		$this->perk1 = $perk1;
	}

	/**
	 * Get perk 2
	 * @return int Perk 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk2()
	{
		return $this->perk2;
    }

	/**
	 * Set perk 2
	 * @param int $perk2 Perk 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk2($perk2)
	{
		$this->perk2 = $perk2;
	}

	/**
	 * Get perk 3
	 * @return int Perk 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk3()
	{
		return $this->perk3;
    }

	/**
	 * Set perk 3
	 * @param int $perk3 Perk 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk3($perk3)
	{
		$this->perk3 = $perk3;
	}

	/**
	 * Get perk 4
	 * @return int Perk 4
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk4()
	{
		return $this->perk4;
    }

	/**
	 * Set perk 4
	 * @param int $perk4 Perk 4
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk4($perk4)
	{
		$this->perk4 = $perk4;
	}

	/**
	 * Get perk 5
	 * @return int Perk 5
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk5()
	{
		return $this->perk5;
    }

	/**
	 * Set perk 5
	 * @param int $perk5 Perk 5
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk5($perk5)
	{
		$this->perk5 = $perk5;
	}

	/**
	 * Get perk 3 - Var 1
	 * @return int Perk 3 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk3Var1()
	{
		return $this->perk3Var1;
    }

	/**
	 * Set perk 3 - Var 1
	 * @param int $perk3Var1 Perk 3 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk3Var1($perk3Var1)
	{
		$this->perk3Var1 = $perk3Var1;
	}

	/**
	 * Get self-mitigated damage
	 * @return int Self-mitigated damage
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDamageSelfMitigated()
	{
		return $this->damageSelfMitigated;
    }

	/**
	 * Set self-mitigated damage
	 * @param int $damageSelfMitigated Self-mitigated damage
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDamageSelfMitigated($damageSelfMitigated)
	{
		$this->damageSelfMitigated = $damageSelfMitigated;
	}

	/**
	 * Get magical damage taken
	 * @return int Magical damage taken
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMagicalDamageTaken()
	{
		return $this->magicalDamageTaken;
    }

	/**
	 * Set magical damage taken
	 * @param int $magicalDamageTaken Magical damage taken
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMagicalDamageTaken($magicalDamageTaken)
	{
		$this->magicalDamageTaken = $magicalDamageTaken;
	}

	/**
	 * Get first inhibitor kill
	 * @return boolean First inhibitor kill
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstInhibitorKill()
	{
		return $this->firstInhibitorKill;
    }

	/**
	 * Set first inhibitor kill
	 * @param boolean $firstInhibitorKill First inhibitor kill
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstInhibitorKill($firstInhibitorKill)
	{
		$this->firstInhibitorKill = $firstInhibitorKill;
	}

	/**
	 * Get true damage taken
	 * @return long True damage taken
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTrueDamageTaken()
	{
		return $this->trueDamageTaken;
    }

	/**
	 * Set true damage taken
	 * @param long $trueDamageTaken True damage taken
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTrueDamageTaken($trueDamageTaken)
	{
		$this->trueDamageTaken = $trueDamageTaken;
	}

	/**
	 * Get node neutralize
	 * @return int Node neutralize
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNodeNeutralize()
	{
		return $this->nodeNeutralize;
    }

	/**
	 * Set node neutralize
	 * @param int $nodeNeutralize Node neutralize
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNodeNeutralize($nodeNeutralize)
	{
		$this->nodeNeutralize = $nodeNeutralize;
	}

	/**
	 * Get assists
	 * @return int Assists
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getAssists()
	{
		return $this->assists;
    }

	/**
	 * Set assists
	 * @param int $assists Assists
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setAssists($assists)
	{
		$this->assists = $assists;
	}

	/**
	 * Get combat player score
	 * @return int Combat player score
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCombatPlayerScore()
	{
		return $this->combatPlayerScore;
    }

	/**
	 * Set combat player score
	 * @param int $combatPlayerScore Combat player score
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCombatPlayerScore($combatPlayerScore)
	{
		$this->combatPlayerScore = $combatPlayerScore;
	}

	/**
	 * Get primary rune path
	 * @return int Primary rune path
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerkPrimaryStyle()
	{
		return $this->perkPrimaryStyle;
    }

	/**
	 * Set primary rune path
	 * @param int $perkPrimaryStyle Primary rune path
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerkPrimaryStyle($perkPrimaryStyle)
	{
		$this->perkPrimaryStyle = $perkPrimaryStyle;
	}

	/**
	 * Get gold spent
	 * @return int Gold spent
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGoldSpent()
	{
		return $this->goldSpent;
    }

	/**
	 * Set gold spent
	 * @param int $goldSpent Gold spent
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGoldSpent($goldSpent)
	{
		$this->goldSpent = $goldSpent;
	}

	/**
	 * Get true damage dealt
	 * @return long True damage dealt
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTrueDamageDealt()
	{
		return $this->trueDamageDealt;
    }

	/**
	 * Set true damage dealt
	 * @param long $trueDamageDealt True damage dealt
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTrueDamageDealt($trueDamageDealt)
	{
		$this->trueDamageDealt = $trueDamageDealt;
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
	 * Get total damage taken
	 * @return long Total damage taken
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalDamageTaken()
	{
		return $this->totalDamageTaken;
    }

	/**
	 * Set total damage taken
	 * @param long $totalDamageTaken Total damage taken
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalDamageTaken($totalDamageTaken)
	{
		$this->totalDamageTaken = $totalDamageTaken;
	}

	/**
	 * Get physical damage dealt
	 * @return long Physical damage dealt
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPhysicalDamageDealt()
	{
		return $this->physicalDamageDealt;
    }

	/**
	 * Set physical damage dealt
	 * @param long $physicalDamageDealt Physical damage dealt
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPhysicalDamageDealt($physicalDamageDealt)
	{
		$this->physicalDamageDealt = $physicalDamageDealt;
	}

	/**
	 * Get sight ward bought in game
	 * @return int Sight ward bought in game
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSightWardsBoughtInGame()
	{
		return $this->sightWardsBoughtInGame;
    }

	/**
	 * Set sight ward bought in game
	 * @param int $sightWardsBoughtInGame Sight ward bought in game
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSightWardsBoughtInGame($sightWardsBoughtInGame)
	{
		$this->sightWardsBoughtInGame = $sightWardsBoughtInGame;
	}

	/**
	 * Get total damage dealt to champions
	 * @return long Total damage dealt to champions
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalDamageDealtToChampions()
	{
		return $this->totalDamageDealtToChampions;
    }

	/**
	 * Set total damage dealt to champions
	 * @param long $totalDamageDealtToChampions Total damage dealt to champions
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalDamageDealtToChampions($totalDamageDealtToChampions)
	{
		$this->totalDamageDealtToChampions = $totalDamageDealtToChampions;
	}

	/**
	 * Get physical damage taken
	 * @return long Physical damage taken
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPhysicalDamageTaken()
	{
		return $this->physicalDamageTaken;
    }

	/**
	 * Set physical damage taken
	 * @param long $physicalDamageTaken Physical damage taken
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPhysicalDamageTaken($physicalDamageTaken)
	{
		$this->physicalDamageTaken = $physicalDamageTaken;
	}

	/**
	 * Get total player score
	 * @return int Total player score
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalPlayerScore()
	{
		return $this->totalPlayerScore;
    }

	/**
	 * Set total player score
	 * @param int $totalPlayerScore Total player score
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalPlayerScore($totalPlayerScore)
	{
		$this->totalPlayerScore = $totalPlayerScore;
	}

	/**
	 * Get win
	 * @return boolean Win
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getWin()
	{
		return $this->win;
    }

	/**
	 * Set win
	 * @param boolean $win Win
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setWin($win)
	{
		$this->win = $win;
	}

	/**
	 * Get objective player score
	 * @return int Objective player score
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getObjectivePlayerScore()
	{
		return $this->objectivePlayerScore;
    }

	/**
	 * Set objective player score
	 * @param int $objectivePlayerScore Objective player score
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setObjectivePlayerScore($objectivePlayerScore)
	{
		$this->objectivePlayerScore = $objectivePlayerScore;
	}

	/**
	 * Get total damage dealt
	 * @return long Total damage dealt
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalDamageDealt()
	{
		return $this->totalDamageDealt;
    }

	/**
	 * Set total damage dealt
	 * @param long $totalDamageDealt Total damage dealt
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalDamageDealt($totalDamageDealt)
	{
		$this->totalDamageDealt = $totalDamageDealt;
	}

	/**
	 * Get item 1
	 * @return int Item 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getItem1()
	{
		return $this->item1;
    }

	/**
	 * Set item 1
	 * @param int $item1 Item 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setItem1($item1)
	{
		$this->item1 = $item1;
	}

	/**
	 * Get neutral minions killed in enemy jungle
	 * @return int Neutral minions killed in enemy jungle
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNeutralMinionsKilledEnemyJungle()
	{
		return $this->neutralMinionsKilledEnemyJungle;
    }

	/**
	 * Set neutral minions killed in enemy jungle
	 * @param int $neutralMinionsKilledEnemyJungle Neutral minions killed in enemy jungle
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNeutralMinionsKilledEnemyJungle($neutralMinionsKilledEnemyJungle)
	{
		$this->neutralMinionsKilledEnemyJungle = $neutralMinionsKilledEnemyJungle;
	}

	/**
	 * Get deaths
	 * @return int Deaths
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDeaths()
	{
		return $this->deaths;
    }

	/**
	 * Set deaths
	 * @param int $deaths Deaths
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDeaths($deaths)
	{
		$this->deaths = $deaths;
	}

	/**
	 * Get wards places
	 * @return int Wards places
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getWardsPlaced()
	{
		return $this->wardsPlaced;
    }

	/**
	 * Set wards places
	 * @param int $wardsPlaced Wards places
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setWardsPlaced($wardsPlaced)
	{
		$this->wardsPlaced = $wardsPlaced;
	}

	/**
	 * Get secondary rune path
	 * @return int Secondary rune path
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerkSubStyle()
	{
		return $this->perkSubStyle;
    }

	/**
	 * Set secondary rune path
	 * @param int $perkSubStyle Secondary rune path
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerkSubStyle($perkSubStyle)
	{
		$this->perkSubStyle = $perkSubStyle;
	}

	/**
	 * Get turret kills
	 * @return int Turret kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTurretKills()
	{
		return $this->turretKills;
    }

	/**
	 * Set turret kills
	 * @param int $turretKills Turret kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTurretKills($turretKills)
	{
		$this->turretKills = $turretKills;
	}

	/**
	 * Get first blood kill
	 * @return int First blood kill
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstBloodKill()
	{
		return $this->firstBloodKill;
    }

	/**
	 * Set first blood kill
	 * @param int $firstBloodKill First blood kill
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstBloodKill($firstBloodKill)
	{
		$this->firstBloodKill = $firstBloodKill;
	}

	/**
	 * Get true damage dealt to champions
	 * @return long True damage dealt to champions
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTrueDamageDealtToChampions()
	{
		return $this->trueDamageDealtToChampions;
    }

	/**
	 * Set true damage dealt to champions
	 * @param long $trueDamageDealtToChampions True damage dealt to champions
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTrueDamageDealtToChampions($trueDamageDealtToChampions)
	{
		$this->trueDamageDealtToChampions = $trueDamageDealtToChampions;
	}

	/**
	 * Get gold earned
	 * @return int Gold earned
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGoldEarned()
	{
		return $this->goldEarned;
    }

	/**
	 * Set gold earned
	 * @param int $goldEarned Gold earned
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGoldEarned($goldEarned)
	{
		$this->goldEarned = $goldEarned;
	}

	/**
	 * Get killing sprees
	 * @return int Killing sprees
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getKillingSprees()
	{
		return $this->killingSprees;
    }

	/**
	 * Set killing sprees
	 * @param int $killingSprees Killing sprees
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setKillingSprees($killingSprees)
	{
		$this->killingSprees = $killingSprees;
	}

	/**
	 * Get unreal kills
	 * @return int Unreal kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getUnrealKills()
	{
		return $this->unrealKills;
    }

	/**
	 * Set unreal kills
	 * @param int $unrealKills Unreal kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setUnrealKills($unrealKills)
	{
		$this->unrealKills = $unrealKills;
	}

	/**
	 * Get altars captured
	 * @return int Altars captured
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getAltarsCaptured()
	{
		return $this->altarsCaptured;
    }

	/**
	 * Set altars captured
	 * @param int $altarsCaptured Altars captured
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setAltarsCaptured($altarsCaptured)
	{
		$this->altarsCaptured = $altarsCaptured;
	}

	/**
	 * Get first tower assist
	 * @return boolean First tower assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstTowerAssist()
	{
		return $this->firstTowerAssist;
    }

	/**
	 * Set first tower assist
	 * @param boolean $firstTowerAssist First tower assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstTowerAssist($firstTowerAssist)
	{
		$this->firstTowerAssist = $firstTowerAssist;
	}

	/**
	 * Get first tower assist
	 * @return boolean First tower assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstTowerKill()
	{
		return $this->firstTowerKill;
    }

	/**
	 * Set first tower assist
	 * @param boolean $firstTowerKill First tower assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstTowerKill($firstTowerKill)
	{
		$this->firstTowerKill = $firstTowerKill;
	}

	/**
	 * Get champion level
	 * @return int Champion level
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getChampLevel()
	{
		return $this->champLevel;
    }

	/**
	 * Set champion level
	 * @param int $champLevel Champion level
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setChampLevel($champLevel)
	{
		$this->champLevel = $champLevel;
	}

	/**
	 * Get double kills
	 * @return int Double kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDoubleKills()
	{
		return $this->doubleKills;
    }

	/**
	 * Set double kills
	 * @param int $doubleKills Double kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDoubleKills($doubleKills)
	{
		$this->doubleKills = $doubleKills;
	}

	/**
	 * Get node capture assist
	 * @return int Node capture assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getNodeCaptureAssist()
	{
		return $this->nodeCaptureAssist;
    }

	/**
	 * Set node capture assist
	 * @param int $nodeCaptureAssist Node capture assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setNodeCaptureAssist($nodeCaptureAssist)
	{
		$this->nodeCaptureAssist = $nodeCaptureAssist;
	}

	/**
	 * Get inhibitor kills
	 * @return int Inhibitor kills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getInhibitorKills()
	{
		return $this->inhibitorKills;
    }

	/**
	 * Set inhibitor kills
	 * @param int $inhibitorKills Inhibitor kills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setInhibitorKills($inhibitorKills)
	{
		$this->inhibitorKills = $inhibitorKills;
	}

	/**
	 * Get first inhibitor assist
	 * @return boolean First inhibitor assist
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getFirstInhibitorAssist()
	{
		return $this->firstInhibitorAssist;
    }

	/**
	 * Set first inhibitor assist
	 * @param boolean $firstInhibitorAssist First inhibitor assist
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setFirstInhibitorAssist($firstInhibitorAssist)
	{
		$this->firstInhibitorAssist = $firstInhibitorAssist;
	}

	/**
	 * Get perk 0 - Var 1
	 * @return int Perk 0 - Var 1
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk0Var1()
	{
		return $this->perk0Var1;
    }

	/**
	 * Set perk 0 - Var 1
	 * @param int $perk0Var1 Perk 0 - Var 1
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk0Var1($perk0Var1)
	{
		$this->perk0Var1 = $perk0Var1;
	}

	/**
	 * Get perk 0 - Var 2
	 * @return int Perk 0 - Var 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk0Var2()
	{
		return $this->perk0Var2;
    }

	/**
	 * Set perk 0 - Var 2
	 * @param int $perk0Var2 Perk 0 - Var 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk0Var2($perk0Var2)
	{
		$this->perk0Var2 = $perk0Var2;
	}

	/**
	 * Get perk 0 - Var 3
	 * @return int Perk 0 - Var 3
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPerk0Var3()
	{
		return $this->perk0Var3;
    }

	/**
	 * Set perk 0 - Var 3
	 * @param int $perk0Var3 Perk 0 - Var 3
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPerk0Var3($perk0Var3)
	{
		$this->perk0Var3 = $perk0Var3;
	}

	/**
	 * Get vision wards bought in game
	 * @return int Vision wards bought in game
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getVisionWardsBoughtInGame()
	{
		return $this->visionWardsBoughtInGame;
    }

	/**
	 * Set vision wards bought in game
	 * @param int $visionWardsBoughtInGame Vision wards bought in game
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setVisionWardsBoughtInGame($visionWardsBoughtInGame)
	{
		$this->visionWardsBoughtInGame = $visionWardsBoughtInGame;
	}

	/**
	 * Get altars neutralized
	 * @return int Altars neutralized
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getAltarsNeutralized()
	{
		return $this->altarsNeutralized;
    }

	/**
	 * Set altars neutralized
	 * @param int $altarsNeutralized Altars neutralized
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setAltarsNeutralized($altarsNeutralized)
	{
		$this->altarsNeutralized = $altarsNeutralized;
	}

	/**
	 * Get pentakills
	 * @return int Pentakills
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPentaKills()
	{
		return $this->pentaKills;
    }

	/**
	 * Set pentakills
	 * @param int $pentaKills Pentakills
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPentaKills($pentaKills)
	{
		$this->pentaKills = $pentaKills;
	}

	/**
	 * Get total heal
	 * @return long Total heal
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalHeal()
	{
		return $this->totalHeal;
    }

	/**
	 * Set total heal
	 * @param long $totalHeal Total heal
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalHeal($totalHeal)
	{
		$this->totalHeal = $totalHeal;
	}

	/**
	 * Get total minions killed
	 * @return int Total minions killed
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalMinionsKilled()
	{
		return $this->totalMinionsKilled;
    }

	/**
	 * Set total minions killed
	 * @param int $totalMinionsKilled Total minions killed
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalMinionsKilled($totalMinionsKilled)
	{
		$this->totalMinionsKilled = $totalMinionsKilled;
	}

	/**
	 * Get time CCing others
	 * @return long Time CCing others
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTimeCCingOthers()
	{
		return $this->timeCCingOthers;
    }

	/**
	 * Set time CCing others
	 * @param long $timeCCingOthers Time CCing others
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTimeCCingOthers($timeCCingOthers)
	{
		$this->timeCCingOthers = $timeCCingOthers;
	}

	/**
	 * Get player score 2
	 * @return int Player score 2
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayerScore2()
	{
		return $this->playerScore2;
    }

	/**
	 * Set player score 2
	 * @param int $playerScore2 Player score 2
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayerScore2($playerScore2)
	{
		$this->playerScore2 = $playerScore2;
	}
}