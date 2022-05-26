<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FlatbedTrailerOption Enums
 * @subpackage Enumerations
 */
class FlatbedTrailerOption
{
    /**
     * Constant for value 'OVER_DIMENSION'
     * @return string 'OVER_DIMENSION'
     */
    const OVER_DIMENSION = 'OVER_DIMENSION';
    /**
     * Constant for value 'TARP'
     * @return string 'TARP'
     */
    const TARP = 'TARP';
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
     * @uses self::OVER_DIMENSION
     * @uses self::TARP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::OVER_DIMENSION,
            self::TARP,
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
