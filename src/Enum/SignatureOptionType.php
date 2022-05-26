<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SignatureOptionType Enums
 * @subpackage Enumerations
 */
class SignatureOptionType
{
    /**
     * Constant for value 'ADULT'
     * @return string 'ADULT'
     */
    const ADULT = 'ADULT';
    /**
     * Constant for value 'DIRECT'
     * @return string 'DIRECT'
     */
    const DIRECT = 'DIRECT';
    /**
     * Constant for value 'INDIRECT'
     * @return string 'INDIRECT'
     */
    const INDIRECT = 'INDIRECT';
    /**
     * Constant for value 'NO_SIGNATURE_REQUIRED'
     * @return string 'NO_SIGNATURE_REQUIRED'
     */
    const NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
    /**
     * Constant for value 'SERVICE_DEFAULT'
     * @return string 'SERVICE_DEFAULT'
     */
    const SERVICE_DEFAULT = 'SERVICE_DEFAULT';
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
     * @uses self::ADULT
     * @uses self::DIRECT
     * @uses self::INDIRECT
     * @uses self::NO_SIGNATURE_REQUIRED
     * @uses self::SERVICE_DEFAULT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ADULT,
            self::DIRECT,
            self::INDIRECT,
            self::NO_SIGNATURE_REQUIRED,
            self::SERVICE_DEFAULT,
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
