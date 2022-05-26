<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TaxType Enums
 * @subpackage Enumerations
 */
class TaxType
{
    /**
     * Constant for value 'EXPORT'
     * @return string 'EXPORT'
     */
    const EXPORT = 'EXPORT';
    /**
     * Constant for value 'GST'
     * @return string 'GST'
     */
    const GST = 'GST';
    /**
     * Constant for value 'HST'
     * @return string 'HST'
     */
    const HST = 'HST';
    /**
     * Constant for value 'INTRACOUNTRY'
     * @return string 'INTRACOUNTRY'
     */
    const INTRACOUNTRY = 'INTRACOUNTRY';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PST'
     * @return string 'PST'
     */
    const PST = 'PST';
    /**
     * Constant for value 'VAT'
     * @return string 'VAT'
     */
    const VAT = 'VAT';
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
     * @uses self::EXPORT
     * @uses self::GST
     * @uses self::HST
     * @uses self::INTRACOUNTRY
     * @uses self::OTHER
     * @uses self::PST
     * @uses self::VAT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EXPORT,
            self::GST,
            self::HST,
            self::INTRACOUNTRY,
            self::OTHER,
            self::PST,
            self::VAT,
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
