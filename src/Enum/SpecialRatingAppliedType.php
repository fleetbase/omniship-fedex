<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SpecialRatingAppliedType Enums
 * @subpackage Enumerations
 */
class SpecialRatingAppliedType
{
    /**
     * Constant for value 'FEDEX_ONE_RATE'
     * @return string 'FEDEX_ONE_RATE'
     */
    const FEDEX_ONE_RATE = 'FEDEX_ONE_RATE';
    /**
     * Constant for value 'FIXED_FUEL_SURCHARGE'
     * @return string 'FIXED_FUEL_SURCHARGE'
     */
    const FIXED_FUEL_SURCHARGE = 'FIXED_FUEL_SURCHARGE';
    /**
     * Constant for value 'IMPORT_PRICING'
     * @return string 'IMPORT_PRICING'
     */
    const IMPORT_PRICING = 'IMPORT_PRICING';
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
     * @uses self::FEDEX_ONE_RATE
     * @uses self::FIXED_FUEL_SURCHARGE
     * @uses self::IMPORT_PRICING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_ONE_RATE,
            self::FIXED_FUEL_SURCHARGE,
            self::IMPORT_PRICING,
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
