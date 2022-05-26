<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AppointmentWindowType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The description that FedEx uses for a given appointment window.
 * @subpackage Enumerations
 */
class AppointmentWindowType
{
    /**
     * Constant for value 'AFTERNOON'
     * @return string 'AFTERNOON'
     */
    const AFTERNOON = 'AFTERNOON';
    /**
     * Constant for value 'LATE_AFTERNOON'
     * @return string 'LATE_AFTERNOON'
     */
    const LATE_AFTERNOON = 'LATE_AFTERNOON';
    /**
     * Constant for value 'MID_DAY'
     * @return string 'MID_DAY'
     */
    const MID_DAY = 'MID_DAY';
    /**
     * Constant for value 'MORNING'
     * @return string 'MORNING'
     */
    const MORNING = 'MORNING';
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
     * @uses self::AFTERNOON
     * @uses self::LATE_AFTERNOON
     * @uses self::MID_DAY
     * @uses self::MORNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AFTERNOON,
            self::LATE_AFTERNOON,
            self::MID_DAY,
            self::MORNING,
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
