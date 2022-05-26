<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ReturnType Enums
 * @subpackage Enumerations
 */
class ReturnType
{
    /**
     * Constant for value 'FEDEX_TAG'
     * @return string 'FEDEX_TAG'
     */
    const FEDEX_TAG = 'FEDEX_TAG';
    /**
     * Constant for value 'PENDING'
     * @return string 'PENDING'
     */
    const PENDING = 'PENDING';
    /**
     * Constant for value 'PRINT_RETURN_LABEL'
     * @return string 'PRINT_RETURN_LABEL'
     */
    const PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
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
     * @uses self::FEDEX_TAG
     * @uses self::PENDING
     * @uses self::PRINT_RETURN_LABEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_TAG,
            self::PENDING,
            self::PRINT_RETURN_LABEL,
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
