<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DistanceUnits Enums
 * @subpackage Enumerations
 */
class DistanceUnits
{
    /**
     * Constant for value 'KM'
     * @return string 'KM'
     */
    const KM = 'KM';
    /**
     * Constant for value 'MI'
     * @return string 'MI'
     */
    const MI = 'MI';
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
     * @uses self::KM
     * @uses self::MI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::KM,
            self::MI,
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
