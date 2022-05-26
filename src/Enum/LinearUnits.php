<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LinearUnits Enums
 * @subpackage Enumerations
 */
class LinearUnits
{
    /**
     * Constant for value 'CM'
     * @return string 'CM'
     */
    const CM = 'CM';
    /**
     * Constant for value 'IN'
     * @return string 'IN'
     */
    const IN = 'IN';
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
     * @uses self::CM
     * @uses self::IN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CM,
            self::IN,
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
