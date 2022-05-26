<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackRequestProcessingOptionType Enums
 * @subpackage Enumerations
 */
class TrackRequestProcessingOptionType
{
    /**
     * Constant for value 'INCLUDE_DETAILED_SCANS'
     * @return string 'INCLUDE_DETAILED_SCANS'
     */
    const INCLUDE_DETAILED_SCANS = 'INCLUDE_DETAILED_SCANS';
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
     * @uses self::INCLUDE_DETAILED_SCANS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::INCLUDE_DETAILED_SCANS,
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
