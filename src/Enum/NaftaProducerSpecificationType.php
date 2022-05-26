<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NaftaProducerSpecificationType Enums
 * @subpackage Enumerations
 */
class NaftaProducerSpecificationType
{
    /**
     * Constant for value 'AVAILABLE_UPON_REQUEST'
     * @return string 'AVAILABLE_UPON_REQUEST'
     */
    const AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
    /**
     * Constant for value 'MULTIPLE_SPECIFIED'
     * @return string 'MULTIPLE_SPECIFIED'
     */
    const MULTIPLE_SPECIFIED = 'MULTIPLE_SPECIFIED';
    /**
     * Constant for value 'SAME'
     * @return string 'SAME'
     */
    const SAME = 'SAME';
    /**
     * Constant for value 'SINGLE_SPECIFIED'
     * @return string 'SINGLE_SPECIFIED'
     */
    const SINGLE_SPECIFIED = 'SINGLE_SPECIFIED';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const UNKNOWN = 'UNKNOWN';
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
     * @uses self::AVAILABLE_UPON_REQUEST
     * @uses self::MULTIPLE_SPECIFIED
     * @uses self::SAME
     * @uses self::SINGLE_SPECIFIED
     * @uses self::UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AVAILABLE_UPON_REQUEST,
            self::MULTIPLE_SPECIFIED,
            self::SAME,
            self::SINGLE_SPECIFIED,
            self::UNKNOWN,
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
