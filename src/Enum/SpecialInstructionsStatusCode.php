<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SpecialInstructionsStatusCode Enums
 * @subpackage Enumerations
 */
class SpecialInstructionsStatusCode
{
    /**
     * Constant for value 'ACCEPTED'
     * @return string 'ACCEPTED'
     */
    const ACCEPTED = 'ACCEPTED';
    /**
     * Constant for value 'CANCELLED'
     * @return string 'CANCELLED'
     */
    const CANCELLED = 'CANCELLED';
    /**
     * Constant for value 'DENIED'
     * @return string 'DENIED'
     */
    const DENIED = 'DENIED';
    /**
     * Constant for value 'HELD'
     * @return string 'HELD'
     */
    const HELD = 'HELD';
    /**
     * Constant for value 'MODIFIED'
     * @return string 'MODIFIED'
     */
    const MODIFIED = 'MODIFIED';
    /**
     * Constant for value 'RELINQUISHED'
     * @return string 'RELINQUISHED'
     */
    const RELINQUISHED = 'RELINQUISHED';
    /**
     * Constant for value 'REQUESTED'
     * @return string 'REQUESTED'
     */
    const REQUESTED = 'REQUESTED';
    /**
     * Constant for value 'SET'
     * @return string 'SET'
     */
    const SET = 'SET';
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
     * @uses self::ACCEPTED
     * @uses self::CANCELLED
     * @uses self::DENIED
     * @uses self::HELD
     * @uses self::MODIFIED
     * @uses self::RELINQUISHED
     * @uses self::REQUESTED
     * @uses self::SET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ACCEPTED,
            self::CANCELLED,
            self::DENIED,
            self::HELD,
            self::MODIFIED,
            self::RELINQUISHED,
            self::REQUESTED,
            self::SET,
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
