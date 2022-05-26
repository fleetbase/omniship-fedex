<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShipmentOnlyFieldsType Enums
 * Meta informations extracted from the WSDL
 * - documentation: These values identify which package-level data values will be provided at the shipment-level.
 * @subpackage Enumerations
 */
class ShipmentOnlyFieldsType
{
    /**
     * Constant for value 'DIMENSIONS'
     * @return string 'DIMENSIONS'
     */
    const DIMENSIONS = 'DIMENSIONS';
    /**
     * Constant for value 'INSURED_VALUE'
     * @return string 'INSURED_VALUE'
     */
    const INSURED_VALUE = 'INSURED_VALUE';
    /**
     * Constant for value 'WEIGHT'
     * @return string 'WEIGHT'
     */
    const WEIGHT = 'WEIGHT';
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
     * @uses self::DIMENSIONS
     * @uses self::INSURED_VALUE
     * @uses self::WEIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DIMENSIONS,
            self::INSURED_VALUE,
            self::WEIGHT,
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
