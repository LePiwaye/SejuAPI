<?php

namespace SejuAPI\DTO\Riot;

/**
 * Class GenericDTO
 * This class handles behaviour common to every DTO
 * @package SejuAPI
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class GenericDTO
{
    /**
     * Returns a textual representation of the DTO
     * @return string Textual representation of the DTO
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     */
    public function toString(){
        $definedDTO = "";

        foreach ($this as $key => $value) {
            $definedDTO .= "$key => $value\n";
        }

        return $definedDTO;
    }
}