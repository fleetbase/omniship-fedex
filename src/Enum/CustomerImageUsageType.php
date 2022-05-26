<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomerImageUsageType Enums
 * @subpackage Enumerations
 */
class CustomerImageUsageType
{
    /**
     * Constant for value 'LETTER_HEAD'
     * @return string 'LETTER_HEAD'
     */
    const LETTER_HEAD = 'LETTER_HEAD';
    /**
     * Constant for value 'SIGNATURE'
     * @return string 'SIGNATURE'
     */
    const SIGNATURE = 'SIGNATURE';
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
     * @uses self::LETTER_HEAD
     * @uses self::SIGNATURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LETTER_HEAD,
            self::SIGNATURE,
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
