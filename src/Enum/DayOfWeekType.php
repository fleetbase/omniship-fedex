<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DayOfWeekType Enums
 * @subpackage Enumerations
 */
class DayOfWeekType
{
    /**
     * Constant for value 'FRI'
     * @return string 'FRI'
     */
    const FRI = 'FRI';
    /**
     * Constant for value 'MON'
     * @return string 'MON'
     */
    const MON = 'MON';
    /**
     * Constant for value 'SAT'
     * @return string 'SAT'
     */
    const SAT = 'SAT';
    /**
     * Constant for value 'SUN'
     * @return string 'SUN'
     */
    const SUN = 'SUN';
    /**
     * Constant for value 'THU'
     * @return string 'THU'
     */
    const THU = 'THU';
    /**
     * Constant for value 'TUE'
     * @return string 'TUE'
     */
    const TUE = 'TUE';
    /**
     * Constant for value 'WED'
     * @return string 'WED'
     */
    const WED = 'WED';
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
     * @uses self::FRI
     * @uses self::MON
     * @uses self::SAT
     * @uses self::SUN
     * @uses self::THU
     * @uses self::TUE
     * @uses self::WED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FRI,
            self::MON,
            self::SAT,
            self::SUN,
            self::THU,
            self::TUE,
            self::WED,
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
