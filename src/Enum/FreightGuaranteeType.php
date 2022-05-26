<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightGuaranteeType Enums
 * @subpackage Enumerations
 */
class FreightGuaranteeType
{
    /**
     * Constant for value 'GUARANTEED_DATE'
     * @return string 'GUARANTEED_DATE'
     */
    const GUARANTEED_DATE = 'GUARANTEED_DATE';
    /**
     * Constant for value 'GUARANTEED_MORNING'
     * @return string 'GUARANTEED_MORNING'
     */
    const GUARANTEED_MORNING = 'GUARANTEED_MORNING';
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
     * @uses self::GUARANTEED_DATE
     * @uses self::GUARANTEED_MORNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::GUARANTEED_DATE,
            self::GUARANTEED_MORNING,
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
