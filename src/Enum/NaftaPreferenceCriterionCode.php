<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NaftaPreferenceCriterionCode Enums
 * Meta informations extracted from the WSDL
 * - documentation: See instructions for NAFTA Certificate of Origin for code definitions.
 * @subpackage Enumerations
 */
class NaftaPreferenceCriterionCode
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const A = 'A';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const B = 'B';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const C = 'C';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const D = 'D';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const E = 'E';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const F = 'F';
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
     * @uses self::A
     * @uses self::B
     * @uses self::C
     * @uses self::D
     * @uses self::E
     * @uses self::F
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::A,
            self::B,
            self::C,
            self::D,
            self::E,
            self::F,
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
