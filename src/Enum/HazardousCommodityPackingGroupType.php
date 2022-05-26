<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityPackingGroupType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies DOT packing group for a hazardous commodity.
 * @subpackage Enumerations
 */
class HazardousCommodityPackingGroupType
{
    /**
     * Constant for value 'DEFAULT'
     * @return string 'DEFAULT'
     */
    const DEFAULT = 'DEFAULT';
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const I = 'I';
    /**
     * Constant for value 'II'
     * @return string 'II'
     */
    const II = 'II';
    /**
     * Constant for value 'III'
     * @return string 'III'
     */
    const III = 'III';
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
     * @uses self::DEFAULT
     * @uses self::I
     * @uses self::II
     * @uses self::III
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DEFAULT,
            self::I,
            self::II,
            self::III,
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
