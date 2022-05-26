<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NotificationSeverityType Enums
 * @subpackage Enumerations
 */
class NotificationSeverityType
{
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const ERROR = 'ERROR';
    /**
     * Constant for value 'FAILURE'
     * @return string 'FAILURE'
     */
    const FAILURE = 'FAILURE';
    /**
     * Constant for value 'NOTE'
     * @return string 'NOTE'
     */
    const NOTE = 'NOTE';
    /**
     * Constant for value 'SUCCESS'
     * @return string 'SUCCESS'
     */
    const SUCCESS = 'SUCCESS';
    /**
     * Constant for value 'WARNING'
     * @return string 'WARNING'
     */
    const WARNING = 'WARNING';
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
     * @uses self::ERROR
     * @uses self::FAILURE
     * @uses self::NOTE
     * @uses self::SUCCESS
     * @uses self::WARNING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ERROR,
            self::FAILURE,
            self::NOTE,
            self::SUCCESS,
            self::WARNING,
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
