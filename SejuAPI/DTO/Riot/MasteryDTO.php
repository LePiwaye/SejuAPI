<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class MasteryDTO
 * This class handles masteries info, used in the League API
 * It's defined accordingly to the Mastery declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MasteryDTO extends GenericDTO
{

    /**
     * @var int Mastery ID
     */
    protected $masteryId;

    /**
     * @var int Rank
     */
    protected $rank;

    /**
     * MasteryDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->masteryId = null;
        $this->rank = null;           
    }

    /**
     * Gets Mastery ID
     * @return int Mastery ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getMasteryId()
    {
        return $this->masteryId;
    }

    /**
     * Sets Mastery ID
     * @param $masteryId int Mastery ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setMasteryId($masteryId)
    {
        $this->masteryId = $masteryId;
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