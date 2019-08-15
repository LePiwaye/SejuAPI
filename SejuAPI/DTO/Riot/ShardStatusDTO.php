<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class ShardStatusDTO
 * This class handles shard (server) status, used in the League API
 * It's defined accordingly to the Service declaration on Riot API Reference website
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class ShardStatusDTO extends GenericDTO
{
	
	/**
     * @var string Name
     */
	protected $name;

    /**
     * @var string Region tag
     */
	protected $region_tag;	

	/**
     * @var string Hostname
     */
	protected $hostname;
	
	/**
     * @var array(\SejuAPI\DTO\Riot\ServiceDTO) Services
     */
	protected $services;    
	
	/**
     * @var string Slug
     */
	protected $slug;

	/**
     * @var array(string) Locales
     */
	protected $locales;

    /**
     * ShardStatusDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->name = null;
        $this->region_tag = null;    
		$this->hostname = null;     
		$this->services = array();   
		$this->slug = null;     
		$this->locales = array();   
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
	 * Get region tag
	 * @return string Region tag
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getRegionTag()
	{
		return $this->region_tag;
    }

	/**
	 * Set region tag
	 * @param string $region_tag Region tag
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setRegionTag($region_tag)
	{
		$this->region_tag = $region_tag;
	}

	/**
	 * Get hostname
	 * @return string Hostname
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getHostname()
	{
		return $this->hostname;
    }

	/**
	 * Set hostname
	 * @param string $hostname Hostname
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setHostname($hostname)
	{
		$this->hostname = $hostname;
	}

	/**
	 * Get services
	 * @return array(\SejuAPI\DTO\Riot\ServiceDTO) Services
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getServices()
	{
		return $this->services;
    }

	/**
	 * Set services
	 * @param array(\SejuAPI\DTO\Riot\ServiceDTO) $services Services
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setServices($services)
	{
		$this->services = $services;
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
	 * Get locales
	 * @return array(string) Locales
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLocales()
	{
		return $this->locales;
    }

	/**
	 * Set locales
	 * @param array(string) $locales Locales
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLocales($locales)
	{
		$this->locales = $locales;
	}
}