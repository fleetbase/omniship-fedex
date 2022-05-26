<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for B13AFilingOptionType Enums
 * @subpackage Enumerations
 */
class B13AFilingOptionType
{
    /**
     * Constant for value 'FEDEX_TO_STAMP'
     * @return string 'FEDEX_TO_STAMP'
     */
    const FEDEX_TO_STAMP = 'FEDEX_TO_STAMP';
    /**
     * Constant for value 'FILED_ELECTRONICALLY'
     * @return string 'FILED_ELECTRONICALLY'
     */
    const FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    /**
     * Constant for value 'MANUALLY_ATTACHED'
     * @return string 'MANUALLY_ATTACHED'
     */
    const MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    /**
     * Constant for value 'NOT_REQUIRED'
     * @return string 'NOT_REQUIRED'
     */
    const NOT_REQUIRED = 'NOT_REQUIRED';
    /**
     * Constant for value 'SUMMARY_REPORTING'
     * @return string 'SUMMARY_REPORTING'
     */
    const SUMMARY_REPORTING = 'SUMMARY_REPORTING';
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
     * @uses self::FEDEX_TO_STAMP
     * @uses self::FILED_ELECTRONICALLY
     * @uses self::MANUALLY_ATTACHED
     * @uses self::NOT_REQUIRED
     * @uses self::SUMMARY_REPORTING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_TO_STAMP,
            self::FILED_ELECTRONICALLY,
            self::MANUALLY_ATTACHED,
            self::NOT_REQUIRED,
            self::SUMMARY_REPORTING,
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
