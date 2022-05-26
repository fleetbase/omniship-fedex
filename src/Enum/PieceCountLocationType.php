<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PieceCountLocationType Enums
 * @subpackage Enumerations
 */
class PieceCountLocationType
{
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'ORIGIN'
     * @return string 'ORIGIN'
     */
    const ORIGIN = 'ORIGIN';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::DESTINATION
     * @uses self::ORIGIN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DESTINATION,
            self::ORIGIN,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
