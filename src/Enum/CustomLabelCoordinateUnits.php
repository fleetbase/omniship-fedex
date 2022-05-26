<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomLabelCoordinateUnits Enums
 * @subpackage Enumerations
 */
class CustomLabelCoordinateUnits
{
    /**
     * Constant for value 'MILS'
     * @return string 'MILS'
     */
    const MILS = 'MILS';
    /**
     * Constant for value 'PIXELS'
     * @return string 'PIXELS'
     */
    const PIXELS = 'PIXELS';
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
     * @uses self::MILS
     * @uses self::PIXELS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::MILS,
            self::PIXELS,
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
