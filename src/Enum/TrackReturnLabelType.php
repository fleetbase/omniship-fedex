<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackReturnLabelType Enums
 * @subpackage Enumerations
 */
class TrackReturnLabelType
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const EMAIL = 'EMAIL';
    /**
     * Constant for value 'PRINT'
     * @return string 'PRINT'
     */
    const PRINT = 'PRINT';
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
     * @uses self::EMAIL
     * @uses self::PRINT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EMAIL,
            self::PRINT,
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
