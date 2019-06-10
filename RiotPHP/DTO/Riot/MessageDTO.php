<?php

namespace RiotPHP\DTO\Riot;

/**
 * Class MessageDTO
 * This class handles error messages, used in the League API
 * It's defined accordingly to the Message declaration on Riot API Reference website
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class MessageDTO extends GenericDTO
{

    /**
     * @var string Severity
     */
    protected $severity;

    /**
     * @var string Author
     */
    protected $author;

    /**
     * @var string Creation date
     */
	protected $created_at;
	
	/**
     * @var array(\RiotPHP\DTO\Riot\TranslationDTO) Translations
     */
	protected $translations;
	
	/**
     * @var string Last update date
     */
	protected $updated_at;
	
	/**
     * @var string Message
     */
	protected $content;
	
	/**
     * @var string ID
     */
    protected $id;

    /**
     * MessageDTO constructor. This generates an empty object, which has to be filled out through API Calls
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function __construct()
    {
        $this->severity = null;
		$this->author = null;   
		$this->created_at = null;    
		$this->translations = array();     
		$this->updated_at = null;   
		$this->content = null;    
		$this->id = null;           
    }

	/**
	 * Get severity
	 * @return string Severity
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getSeverity()
	{
		return $this->severity;
    }

	/**
	 * Set severity
	 * @param string $severity Severity
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setSeverity($severity)
	{
		$this->severity = $severity;
	}

	/**
	 * Get author
	 * @return string Author
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getAuthor()
	{
		return $this->author;
    }

	/**
	 * Set author
	 * @param string $author Author
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
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
	 * Get translations
	 * @return array(\RiotPHP\DTO\Riot\TranslationDTO) Translations
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getTranslations()
	{
		return $this->translations;
    }

	/**
	 * Set translations
	 * @param array(\RiotPHP\DTO\Riot\TranslationDTO) $translations Translations
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setTranslations($translations)
	{
		$this->translations = $translations;
	}

	/**
	 * Get last update date
	 * @return string Last update date
     * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function getUpdatedAt()
	{
		return $this->updated_at;
    }

	/**
	 * Set last update date
	 * @param string $updated_at Last update date
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setUpdatedAt($updated_at)
	{
		$this->updated_at = $updated_at;
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
	 * Get ID
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
	 * Set ID
	 * @param string $id ID
	 * @author Piwaye
     * @since 1.0
     * @version 1.0
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
}