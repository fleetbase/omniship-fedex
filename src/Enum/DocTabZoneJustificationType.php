<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DocTabZoneJustificationType Enums
 * @subpackage Enumerations
 */
class DocTabZoneJustificationType
{
    /**
     * Constant for value 'LEFT'
     * @return string 'LEFT'
     */
    const LEFT = 'LEFT';
    /**
     * Constant for value 'RIGHT'
     * @return string 'RIGHT'
     */
    const RIGHT = 'RIGHT';
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
     * @uses self::LEFT
     * @uses self::RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LEFT,
            self::RIGHT,
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
