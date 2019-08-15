<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class IncidentDTO
 * This class handles incident info, used in the League API
 * It's defined accordingly to the Incident declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class IncidentDTO extends GenericDTO
{

    /**
     * @var boolean Active status
     */
	protected $active;
	
	/**
     * @var string Creation date
     */
	protected $created_at;

	/**
     * @var string ID
     */
	protected $id;
	
	/**
     * @var array(\SejuAPI\DTO\Riot\MessageDTO) Updates
     */
    protected $updates;    

    /**
     * IncidentDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->active = null;
        $this->created_at = null;    
		$this->id = null;     
		$this->updates = array();     
    }

	/**
	 * Get active status
	 * @return boolean Active status
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getActive()
	{
		return $this->active;
    }

	/**
	 * Set active status
	 * @param boolean $active Active status
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setActive($active)
	{
		$this->active = $active;
	}

	/**
	 * Get creation date
	 * @return string Creation date
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getCreatedAt()
	{
		return $this->created_at;
    }

	/**
	 * Set creation date
	 * @param string $created_at Creation date
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setCreatedAt($created_at)
	{
		$this->created_at = $created_at;
	}

	/**
	 * Get iD
	 * @return string ID
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getId()
	{
		return $this->id;
    }

	/**
	 * Set iD
	 * @param string $id ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * Get updates
	 * @return array(\SejuAPI\DTO\Riot\MessageDTO) Updates
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getUpdates()
	{
		return $this->updates;
    }

	/**
	 * Set updates
	 * @param array(\SejuAPI\DTO\Riot\MessageDTO) $updates Updates
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setUpdates($updates)
	{
		$this->updates = $updates;
	}
}