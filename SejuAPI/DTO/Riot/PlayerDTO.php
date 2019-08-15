<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class PlayerDTO
 * This class handles player info, used in the League API
 * It's defined accordingly to the Player declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class PlayerDTO extends GenericDTO
{

    /**
     * @var string Current platform ID
     */
    protected $currentPlatformId;

    /**
     * @var string Summoner Name
     */
    protected $summonerName;

    /**
     * @var string Match history URI
     */
    protected $matchHistoryUri;

    /**
     * @var string Original platform ID
     */
    protected $platformId;

    /**
     * @var string Encrypted account ID
     */
    protected $currentAccountId;

    /**
     * @var int Profile icon
     */
    protected $profileIcon;

    /**
     * @var string Encrypted summoner ID
     */
    protected $summonerId;

    /**
     * @var string Original encrypted summoner ID
     */
    protected $accountId;

    /**
     * PlayerDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->currentPlatformId = null;
        $this->summonerName = null;     
        $this->matchHistoryUri = null;
        $this->platformId = null;
        $this->currentAccountId = null;
        $this->profileIcon = null;
        $this->summonerId = null;
        $this->accountId = null;  
    }

	/**
	 * Get current platform ID
	 * @return string Current platform ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCurrentPlatformId()
	{
		return $this->currentPlatformId;
    }

	/**
	 * Set current platform ID
	 * @param string $currentPlatformId Current platform ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCurrentPlatformId($currentPlatformId)
	{
		$this->currentPlatformId = $currentPlatformId;
	}

	/**
	 * Get summoner Name
	 * @return string Summoner Name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSummonerName()
	{
		return $this->summonerName;
    }

	/**
	 * Set summoner Name
	 * @param string $summonerName Summoner Name
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSummonerName($summonerName)
	{
		$this->summonerName = $summonerName;
	}

	/**
	 * Get match history URI
	 * @return string Match history URI
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMatchHistoryUri()
	{
		return $this->matchHistoryUri;
    }

	/**
	 * Set match history URI
	 * @param string $matchHistoryUri Match history URI
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMatchHistoryUri($matchHistoryUri)
	{
		$this->matchHistoryUri = $matchHistoryUri;
	}

	/**
	 * Get original platform ID
	 * @return string Original platform ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getPlatformId()
	{
		return $this->platformId;
    }

	/**
	 * Set original platform ID
	 * @param string $platformId Original platform ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setPlatformId($platformId)
	{
		$this->platformId = $platformId;
	}

	/**
	 * Get encrypted account ID
	 * @return string Encrypted account ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCurrentAccountId()
	{
		return $this->currentAccountId;
    }

	/**
	 * Set encrypted account ID
	 * @param string $currentAccountId Encrypted account ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCurrentAccountId($currentAccountId)
	{
		$this->currentAccountId = $currentAccountId;
	}

	/**
	 * Get profile icon
	 * @return int Profile icon
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getProfileIcon()
	{
		return $this->profileIcon;
    }

	/**
	 * Set profile icon
	 * @param int $profileIcon Profile icon
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setProfileIcon($profileIcon)
	{
		$this->profileIcon = $profileIcon;
	}

	/**
	 * Get encrypted summoner ID
	 * @return string Encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSummonerId()
	{
		return $this->summonerId;
    }

	/**
	 * Set encrypted summoner ID
	 * @param string $summonerId Encrypted summoner ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSummonerId($summonerId)
	{
		$this->summonerId = $summonerId;
	}

	/**
	 * Get original encrypted summoner ID
	 * @return string Original encrypted summoner ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getAccountId()
	{
		return $this->accountId;
    }

	/**
	 * Set original encrypted summoner ID
	 * @param string $accountId Original encrypted summoner ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setAccountId($accountId)
	{
		$this->accountId = $accountId;
	}
}