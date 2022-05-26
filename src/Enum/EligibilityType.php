<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EligibilityType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies different values of eligibility status
 * @subpackage Enumerations
 */
class EligibilityType
{
    /**
     * Constant for value 'ELIGIBLE'
     * @return string 'ELIGIBLE'
     */
    const ELIGIBLE = 'ELIGIBLE';
    /**
     * Constant for value 'INELIGIBLE'
     * @return string 'INELIGIBLE'
     */
    const INELIGIBLE = 'INELIGIBLE';
    /**
     * Constant for value 'POSSIBLY_ELIGIBLE'
     * @return string 'POSSIBLY_ELIGIBLE'
     */
    const POSSIBLY_ELIGIBLE = 'POSSIBLY_ELIGIBLE';
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
     * @uses self::ELIGIBLE
     * @uses self::INELIGIBLE
     * @uses self::POSSIBLY_ELIGIBLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ELIGIBLE,
            self::INELIGIBLE,
            self::POSSIBLY_ELIGIBLE,
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
