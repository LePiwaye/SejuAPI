<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class ParticipantIdentityDTO
 * This class handles match participant, used in the League API
 * It's defined accordingly to the ParticipantIdentity declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ParticipantIdentityDTO extends GenericDTO
{

    /**
     * @var \RiotPHP\DTO\Riot\PlayerDTO Player information
     */
    protected $player;

    /**
     * @var int Participant ID
     */
    protected $participantId;

    /**
     * ParticipantIdentityDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->player = null;
        $this->participantId = null;           
    }

	/**
	 * Get player information
	 * @return \RiotPHP\DTO\Riot\PlayerDTO Player information
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlayer()
	{
		return $this->player;
    }

	/**
	 * Set player information
	 * @param \RiotPHP\DTO\Riot\PlayerDTO $player Player information
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlayer($player)
	{
		$this->player = $player;
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
}