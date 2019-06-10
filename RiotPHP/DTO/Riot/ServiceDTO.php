<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class ServiceDTO
 * This class handles service status, used in the League API
 * It's defined accordingly to the Service declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ServiceDTO extends GenericDTO
{

    /**
     * @var string Status
     */
	protected $status;
	
	/**
     * @var string Name
     */
	protected $name;

	/**
     * @var string Slug
     */
	protected $slug;
	
	/**
     * @var array(\RiotPHP\DTO\Riot\IncidentDTO) Incidents
     */
    protected $incidents;    

    /**
     * ServiceDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->status = null;
        $this->name = null;    
		$this->slug = null;     
		$this->incidents = array();     
    }

	/**
	 * Get status
	 * @return string Status
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getStatus()
	{
		return $this->status;
    }

	/**
	 * Set status
	 * @param string $status Status
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setStatus($status)
	{
		$this->status = $status;
	}

	/**
	 * Get name
	 * @return string Name
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getName()
	{
		return $this->name;
    }

	/**
	 * Set name
	 * @param string $name Name
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Get slug
	 * @return string Slug
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSlug()
	{
		return $this->slug;
    }

	/**
	 * Set slug
	 * @param string $slug Slug
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	/**
	 * Get incidents
	 * @return array(\RiotPHP\DTO\Riot\IncidentDTO) Incidents
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getIncidents()
	{
		return $this->incidents;
    }

	/**
	 * Set incidents
	 * @param array(\RiotPHP\DTO\Riot\IncidentDTO) $incidents Incidents
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setIncidents($incidents)
	{
		$this->incidents = $incidents;
	}
}