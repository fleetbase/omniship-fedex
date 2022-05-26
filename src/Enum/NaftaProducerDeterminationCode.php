<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NaftaProducerDeterminationCode Enums
 * Meta informations extracted from the WSDL
 * - documentation: See instructions for NAFTA Certificate of Origin for code definitions.
 * @subpackage Enumerations
 */
class NaftaProducerDeterminationCode
{
    /**
     * Constant for value 'NO_1'
     * @return string 'NO_1'
     */
    const NO_1 = 'NO_1';
    /**
     * Constant for value 'NO_2'
     * @return string 'NO_2'
     */
    const NO_2 = 'NO_2';
    /**
     * Constant for value 'NO_3'
     * @return string 'NO_3'
     */
    const NO_3 = 'NO_3';
    /**
     * Constant for value 'YES'
     * @return string 'YES'
     */
    const YES = 'YES';
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
     * @uses self::NO_1
     * @uses self::NO_2
     * @uses self::NO_3
     * @uses self::YES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::NO_1,
            self::NO_2,
            self::NO_3,
            self::YES,
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
