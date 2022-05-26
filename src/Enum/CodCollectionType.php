<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CodCollectionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the type of funds FedEx should collect upon shipment delivery.
 * @subpackage Enumerations
 */
class CodCollectionType
{
    /**
     * Constant for value 'ANY'
     * @return string 'ANY'
     */
    const ANY = 'ANY';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const CASH = 'CASH';
    /**
     * Constant for value 'GUARANTEED_FUNDS'
     * @return string 'GUARANTEED_FUNDS'
     */
    const GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
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
     * @uses self::ANY
     * @uses self::CASH
     * @uses self::GUARANTEED_FUNDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ANY,
            self::CASH,
            self::GUARANTEED_FUNDS,
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
