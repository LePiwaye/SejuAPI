<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class ParticipantTimelineDTO
 * This class handles masteries info, used in the League API
 * It's defined accordingly to the ParticipantTimeline declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ParticipantTimelineDTO extends GenericDTO
{
    /**
     * @var string Lane
     */
    protected $lane;

    /**
     * @var int Participant ID
     */
    protected $participantId;

    /**
     * @var array(String=>Double) Creep Score difference versus the opponent for a specific time
     */
    protected $csDiffPerMinDeltas;

    /**
     * @var array(String=>Double) Gold for a specific time
     */
    protected $goldPerMinDeltas;

    /**
     * @var array(String=>Double) Experience difference versus the opponent for a specific time
     */
    protected $xpDiffPerMinDeltas;

    /**
     * @var array(String=>Double) Creep Score for a specific time
     */
    protected $creepsPerMinDeltas;

    /**
     * @var array(String=>Double) Experience for a specific time
     */
    protected $xpPerMinDeltas;

    /**
     * @var String Role
     */
    protected $role;

    /**
     * @var array(String=>Double) Damage taken difference versus the opponent for a specific time
     */
    protected $damageTakenDiffPerMinDeltas;

    /**
     * @var array(String=>Double) Damage taken for a specific time
     */
    protected $damageTakenPerMinDeltas;

    /**
     * ParticipantTimelineDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->lane = null;
        $this->participantId = null;
        $this->csDiffPerMinDeltas = array();
        $this->goldPerMinDeltas = array();
        $this->xpDiffPerMinDeltas = array();
        $this->creepsPerMinDeltas = array();
        $this->xpPerMinDeltas = array();
        $this->role = null;
        $this->damageTakenDiffPerMinDeltas = array();
        $this->damageTakenPerMinDeltas = array();  
    }

	/**
	 * Get lane
	 * @return string Lane
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLane()
	{
		return $this->lane;
    }

	/**
	 * Set lane
	 * @param string $lane Lane
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLane($lane)
	{
		$this->lane = $lane;
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
	 * Get creep Score difference versus the opponent for a specific time
	 * @return array(String=>Double) Creep Score difference versus the opponent for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCsDiffPerMinDeltas()
	{
		return $this->csDiffPerMinDeltas;
    }

	/**
	 * Set creep Score difference versus the opponent for a specific time
	 * @param array(String=>Double) $csDiffPerMinDeltas Creep Score difference versus the opponent for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCsDiffPerMinDeltas($csDiffPerMinDeltas)
	{
		$this->csDiffPerMinDeltas = $csDiffPerMinDeltas;
	}

	/**
	 * Get gold for a specific time
	 * @return array(String=>Double) Gold for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getGoldPerMinDeltas()
	{
		return $this->goldPerMinDeltas;
    }

	/**
	 * Set gold for a specific time
	 * @param array(String=>Double) $goldPerMinDeltas Gold for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setGoldPerMinDeltas($goldPerMinDeltas)
	{
		$this->goldPerMinDeltas = $goldPerMinDeltas;
	}

	/**
	 * Get experience difference versus the opponent for a specific time
	 * @return array(String=>Double) Experience difference versus the opponent for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getXpDiffPerMinDeltas()
	{
		return $this->xpDiffPerMinDeltas;
    }

	/**
	 * Set experience difference versus the opponent for a specific time
	 * @param array(String=>Double) $xpDiffPerMinDeltas Experience difference versus the opponent for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setXpDiffPerMinDeltas($xpDiffPerMinDeltas)
	{
		$this->xpDiffPerMinDeltas = $xpDiffPerMinDeltas;
	}

	/**
	 * Get creep Score for a specific time
	 * @return array(String=>Double) Creep Score for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCreepsPerMinDeltas()
	{
		return $this->creepsPerMinDeltas;
    }

	/**
	 * Set creep Score for a specific time
	 * @param array(String=>Double) $csPerMinDeltas Creep Score for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCreepsPerMinDeltas($csPerMinDeltas)
	{
		$this->creepsPerMinDeltas = $csPerMinDeltas;
	}

	/**
	 * Get experience for a specific time
	 * @return array(String=>Double) Experience for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getXpPerMinDeltas()
	{
		return $this->xpPerMinDeltas;
    }

	/**
	 * Set experience for a specific time
	 * @param array(String=>Double) $xpPerMinDeltas Experience for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setXpPerMinDeltas($xpPerMinDeltas)
	{
		$this->xpPerMinDeltas = $xpPerMinDeltas;
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
	 * Get damage taken difference versus the opponent for a specific time
	 * @return array(String=>Double) Damage taken difference versus the opponent for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDamageTakenDiffPerMinDeltas()
	{
		return $this->damageTakenDiffPerMinDeltas;
    }

	/**
	 * Set damage taken difference versus the opponent for a specific time
	 * @param array(String=>Double) $damageTakenDiffPerMinDeltas Damage taken difference versus the opponent for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDamageTakenDiffPerMinDeltas($damageTakenDiffPerMinDeltas)
	{
		$this->damageTakenDiffPerMinDeltas = $damageTakenDiffPerMinDeltas;
	}

	/**
	 * Get damage taken for a specific time
	 * @return array(String=>Double) Damage taken for a specific time
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getDamageTakenPerMinDeltas()
	{
		return $this->damageTakenPerMinDeltas;
    }

	/**
	 * Set damage taken for a specific time
	 * @param array(String=>Double) $damageTakenPerMinDeltas Damage taken for a specific time
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setDamageTakenPerMinDeltas($damageTakenPerMinDeltas)
	{
		$this->damageTakenPerMinDeltas = $damageTakenPerMinDeltas;
	}
}