<?php

namespace RiotPHP\DTO;

/**
 * Class MiniSeriesDTO
 * This class handles wins and loss info in a promotion BO series, used in the League API
 * It's defined accordingly to the MiniSeries declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MiniSeriesDTO extends GenericDTO
{

    /**
     * @var string Progress descriptor
     */
    protected $progress;

    /**
     * @var int Losses number
     */
    protected $losses;

     /**
     * @var int Target number
     */
    protected $target;

    /**
     * @var int Wins number
     */
    protected $wins;   

    /**
     * MiniSeriesDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->progress = null;
        $this->losses = null;
        $this->wins = null;
        $this->target = null;             
    }   

    /**
     * Gets progress
     * @return String Progress String
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getProgress()
    {
        return $this->progress;
    }

     /**
     * Sets progress
     * @param $progress String Progress string
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    /**
     * Gets losses
     * @return int Losses number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getLosses()
    {
        return $this->losses;
    }

     /**
     * Sets losses
     * @param $progress int Losses number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    }

    /**
     * Gets wins
     * @return int Wins number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getWins()
    {
        return $this->wins;
    }

     /**
     * Sets wins
     * @param $progress int Wins number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * Gets target
     * @return int Target number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function getTarget()
    {
        return $this->target;
    }

     /**
     * Sets target
     * @param $progress int Target number
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }
}