<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class MatchlistDTO
 * This class handles last matches info, used in the League API
 * It's defined accordingly to the Matchlist declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MatchlistDTO extends GenericDTO
{

    /**
     * @var array(\SejuAPI\DTO\Riot\MatchReferenceDTO) Matchs
     */
    protected $matches;

    /**
     * @var int Total number of games
     */
    protected $totalGames;

     /**
     * @var int Starting index
     */
    protected $startIndex;

    /**
     * @var int Ending index
     */
    protected $endIndex;

    /**
     * MatchlistDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->matches = array();
        $this->totalGames = null;
        $this->startIndex = null;
        $this->endIndex = null;
    }   

	/**
	 * Get matchs
	 * @return array(\SejuAPI\DTO\Riot\MatchReferenceDTO) Matchs
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getMatches()
	{
		return $this->matches;
    }

	/**
	 * Set matchs
	 * @param array(\SejuAPI\DTO\Riot\MatchReferenceDTO) $matches Matchs
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setMatches($matches)
	{
		$this->matches = $matches;
	}

	/**
	 * Get total number of games
	 * @return int Total number of games
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTotalGames()
	{
		return $this->totalGames;
    }

	/**
	 * Set total number of games
	 * @param int $totalGames Total number of games
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTotalGames($totalGames)
	{
		$this->totalGames = $totalGames;
	}

	/**
	 * Get starting index
	 * @return int Starting index
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getStartIndex()
	{
		return $this->startIndex;
    }

	/**
	 * Set starting index
	 * @param int $startIndex Starting index
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setStartIndex($startIndex)
	{
		$this->startIndex = $startIndex;
	}

	/**
	 * Get ending index
	 * @return int Ending index
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getEndIndex()
	{
		return $this->endIndex;
    }

	/**
	 * Set ending index
	 * @param int $endIndex Ending index
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setEndIndex($endIndex)
	{
		$this->endIndex = $endIndex;
	}
}