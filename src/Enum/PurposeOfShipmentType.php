<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PurposeOfShipmentType Enums
 * @subpackage Enumerations
 */
class PurposeOfShipmentType
{
    /**
     * Constant for value 'GIFT'
     * @return string 'GIFT'
     */
    const GIFT = 'GIFT';
    /**
     * Constant for value 'NOT_SOLD'
     * @return string 'NOT_SOLD'
     */
    const NOT_SOLD = 'NOT_SOLD';
    /**
     * Constant for value 'PERSONAL_EFFECTS'
     * @return string 'PERSONAL_EFFECTS'
     */
    const PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
    /**
     * Constant for value 'REPAIR_AND_RETURN'
     * @return string 'REPAIR_AND_RETURN'
     */
    const REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
    /**
     * Constant for value 'SAMPLE'
     * @return string 'SAMPLE'
     */
    const SAMPLE = 'SAMPLE';
    /**
     * Constant for value 'SOLD'
     * @return string 'SOLD'
     */
    const SOLD = 'SOLD';
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
     * @uses self::GIFT
     * @uses self::NOT_SOLD
     * @uses self::PERSONAL_EFFECTS
     * @uses self::REPAIR_AND_RETURN
     * @uses self::SAMPLE
     * @uses self::SOLD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::GIFT,
            self::NOT_SOLD,
            self::PERSONAL_EFFECTS,
            self::REPAIR_AND_RETURN,
            self::SAMPLE,
            self::SOLD,
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
