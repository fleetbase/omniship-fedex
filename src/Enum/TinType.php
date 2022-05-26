<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TinType Enums
 * @subpackage Enumerations
 */
class TinType
{
    /**
     * Constant for value 'BUSINESS_NATIONAL'
     * @return string 'BUSINESS_NATIONAL'
     */
    const BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
    /**
     * Constant for value 'BUSINESS_STATE'
     * @return string 'BUSINESS_STATE'
     */
    const BUSINESS_STATE = 'BUSINESS_STATE';
    /**
     * Constant for value 'PERSONAL_NATIONAL'
     * @return string 'PERSONAL_NATIONAL'
     */
    const PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
    /**
     * Constant for value 'PERSONAL_STATE'
     * @return string 'PERSONAL_STATE'
     */
    const PERSONAL_STATE = 'PERSONAL_STATE';
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
     * @uses self::BUSINESS_NATIONAL
     * @uses self::BUSINESS_STATE
     * @uses self::PERSONAL_NATIONAL
     * @uses self::PERSONAL_STATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BUSINESS_NATIONAL,
            self::BUSINESS_STATE,
            self::PERSONAL_NATIONAL,
            self::PERSONAL_STATE,
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
