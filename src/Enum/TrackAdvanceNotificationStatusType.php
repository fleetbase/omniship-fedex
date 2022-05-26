<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackAdvanceNotificationStatusType Enums
 * @subpackage Enumerations
 */
class TrackAdvanceNotificationStatusType
{
    /**
     * Constant for value 'BACK_ON_TRACK'
     * @return string 'BACK_ON_TRACK'
     */
    const BACK_ON_TRACK = 'BACK_ON_TRACK';
    /**
     * Constant for value 'FAIL'
     * @return string 'FAIL'
     */
    const FAIL = 'FAIL';
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
     * @uses self::BACK_ON_TRACK
     * @uses self::FAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BACK_ON_TRACK,
            self::FAIL,
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
