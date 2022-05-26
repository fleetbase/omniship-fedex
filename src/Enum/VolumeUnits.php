<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for VolumeUnits Enums
 * Meta informations extracted from the WSDL
 * - documentation: Units of three-dimensional volume/cubic measure.
 * @subpackage Enumerations
 */
class VolumeUnits
{
    /**
     * Constant for value 'CUBIC_FT'
     * @return string 'CUBIC_FT'
     */
    const CUBIC_FT = 'CUBIC_FT';
    /**
     * Constant for value 'CUBIC_M'
     * @return string 'CUBIC_M'
     */
    const CUBIC_M = 'CUBIC_M';
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
     * @uses self::CUBIC_FT
     * @uses self::CUBIC_M
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CUBIC_FT,
            self::CUBIC_M,
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
