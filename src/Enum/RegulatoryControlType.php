<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RegulatoryControlType Enums
 * @subpackage Enumerations
 */
class RegulatoryControlType
{
    /**
     * Constant for value 'EU_CIRCULATION'
     * @return string 'EU_CIRCULATION'
     */
    const EU_CIRCULATION = 'EU_CIRCULATION';
    /**
     * Constant for value 'FOOD_OR_PERISHABLE'
     * @return string 'FOOD_OR_PERISHABLE'
     */
    const FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
    /**
     * Constant for value 'NAFTA'
     * @return string 'NAFTA'
     */
    const NAFTA = 'NAFTA';
    /**
     * Constant for value 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION'
     * @return string 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION'
     */
    const NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION = 'NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION';
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
     * @uses self::EU_CIRCULATION
     * @uses self::FOOD_OR_PERISHABLE
     * @uses self::NAFTA
     * @uses self::NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EU_CIRCULATION,
            self::FOOD_OR_PERISHABLE,
            self::NAFTA,
            self::NOT_APPLICABLE_FOR_LOW_CUSTOMS_VALUE_EXCEPTION,
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
