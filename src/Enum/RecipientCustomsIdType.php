<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RecipientCustomsIdType Enums
 * @subpackage Enumerations
 */
class RecipientCustomsIdType
{
    /**
     * Constant for value 'COMPANY'
     * @return string 'COMPANY'
     */
    const COMPANY = 'COMPANY';
    /**
     * Constant for value 'INDIVIDUAL'
     * @return string 'INDIVIDUAL'
     */
    const INDIVIDUAL = 'INDIVIDUAL';
    /**
     * Constant for value 'PASSPORT'
     * @return string 'PASSPORT'
     */
    const PASSPORT = 'PASSPORT';
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
     * @uses self::COMPANY
     * @uses self::INDIVIDUAL
     * @uses self::PASSPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COMPANY,
            self::INDIVIDUAL,
            self::PASSPORT,
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
