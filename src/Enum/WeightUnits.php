<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for WeightUnits Enums
 * @subpackage Enumerations
 */
class WeightUnits
{
    /**
     * Constant for value 'KG'
     * @return string 'KG'
     */
    const KG = 'KG';
    /**
     * Constant for value 'LB'
     * @return string 'LB'
     */
    const LB = 'LB';
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
     * @uses self::KG
     * @uses self::LB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::KG,
            self::LB,
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
