<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class TranslationDTO
 * This class handles locale info, used in the League API
 * It's defined accordingly to the Translation declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class TranslationDTO extends GenericDTO
{

    /**
     * @var string Locale descriptor
     */
    protected $locale;

    /**
     * @var string Message
     */
    protected $content;

    /**
     * @var string Heading
     */
    protected $heading;

    /**
     * TranslationDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->locale = null;
        $this->content = null;    
        $this->heading = null;          
    }

	/**
	 * Get locale descriptor
	 * @return string Locale descriptor
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getLocale()
	{
		return $this->locale;
    }

	/**
	 * Set locale descriptor
	 * @param string $locale Locale descriptor
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setLocale($locale)
	{
		$this->locale = $locale;
	}

	/**
	 * Get message
	 * @return string Message
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getContent()
	{
		return $this->content;
    }

	/**
	 * Set message
	 * @param string $content Message
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setContent($content)
	{
		$this->content = $content;
	}

	/**
	 * Get heading
	 * @return string Heading
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getHeading()
	{
		return $this->heading;
    }

	/**
	 * Set heading
	 * @param string $heading Heading
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setHeading($heading)
	{
		$this->heading = $heading;
	}
}