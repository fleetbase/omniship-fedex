<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightRateQuoteType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of rate quote
 * @subpackage Enumerations
 */
class FreightRateQuoteType
{
    /**
     * Constant for value 'AUTOMATED'
     * @return string 'AUTOMATED'
     */
    const AUTOMATED = 'AUTOMATED';
    /**
     * Constant for value 'MANUAL'
     * @return string 'MANUAL'
     */
    const MANUAL = 'MANUAL';
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
     * @uses self::AUTOMATED
     * @uses self::MANUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AUTOMATED,
            self::MANUAL,
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
