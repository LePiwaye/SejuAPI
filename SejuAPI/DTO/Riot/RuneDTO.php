<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class RuneDTO
 * This class handles rune info, used in the League API
 * It's defined accordingly to the Rune declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class RuneDTO extends GenericDTO
{

    /**
     * @var int Mastery ID
     */
    protected $runeId;

    /**
     * @var int Rank
     */
    protected $rank;

    /**
     * RuneDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->runeId = null;
        $this->rank = null;           
    }

    /**
     * Gets Rune ID
     * @return int Rune ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getRuneId()
    {
        return $this->runeId;
    }

    /**
     * Sets Rune ID
     * @param $runeId int Rune ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setMasteryId($runeId)
    {
        $this->runeId = $runeId;
    }

    /**
     * Gets rank
     * @return int Rank
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getRank()
    {
        return $this->rank;
    }

   /**
     * Sets rank
     * @param $rank int Rank
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }
}