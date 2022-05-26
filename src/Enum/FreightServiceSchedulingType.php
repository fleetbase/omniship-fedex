<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightServiceSchedulingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
 * @subpackage Enumerations
 */
class FreightServiceSchedulingType
{
    /**
     * Constant for value 'LIMITED'
     * @return string 'LIMITED'
     */
    const LIMITED = 'LIMITED';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const STANDARD = 'STANDARD';
    /**
     * Constant for value 'WILL_CALL'
     * @return string 'WILL_CALL'
     */
    const WILL_CALL = 'WILL_CALL';
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
     * @uses self::LIMITED
     * @uses self::STANDARD
     * @uses self::WILL_CALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LIMITED,
            self::STANDARD,
            self::WILL_CALL,
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
