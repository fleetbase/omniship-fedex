<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackReturnMovementStatusType Enums
 * @subpackage Enumerations
 */
class TrackReturnMovementStatusType
{
    /**
     * Constant for value 'MOVEMENT_OCCURRED'
     * @return string 'MOVEMENT_OCCURRED'
     */
    const MOVEMENT_OCCURRED = 'MOVEMENT_OCCURRED';
    /**
     * Constant for value 'NO_MOVEMENT'
     * @return string 'NO_MOVEMENT'
     */
    const NO_MOVEMENT = 'NO_MOVEMENT';
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
     * @uses self::MOVEMENT_OCCURRED
     * @uses self::NO_MOVEMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::MOVEMENT_OCCURRED,
            self::NO_MOVEMENT,
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
