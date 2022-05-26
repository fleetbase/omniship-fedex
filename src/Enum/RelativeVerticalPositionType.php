<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RelativeVerticalPositionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Describes the vertical position of an item relative to another item.
 * @subpackage Enumerations
 */
class RelativeVerticalPositionType
{
    /**
     * Constant for value 'ABOVE'
     * @return string 'ABOVE'
     */
    const ABOVE = 'ABOVE';
    /**
     * Constant for value 'BELOW'
     * @return string 'BELOW'
     */
    const BELOW = 'BELOW';
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
     * @uses self::ABOVE
     * @uses self::BELOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ABOVE,
            self::BELOW,
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
