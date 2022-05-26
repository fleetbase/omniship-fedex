<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CodAddTransportationChargeBasisType Enums
 * @subpackage Enumerations
 */
class CodAddTransportationChargeBasisType
{
    /**
     * Constant for value 'COD_SURCHARGE'
     * @return string 'COD_SURCHARGE'
     */
    const COD_SURCHARGE = 'COD_SURCHARGE';
    /**
     * Constant for value 'NET_CHARGE'
     * @return string 'NET_CHARGE'
     */
    const NET_CHARGE = 'NET_CHARGE';
    /**
     * Constant for value 'NET_FREIGHT'
     * @return string 'NET_FREIGHT'
     */
    const NET_FREIGHT = 'NET_FREIGHT';
    /**
     * Constant for value 'TOTAL_CUSTOMER_CHARGE'
     * @return string 'TOTAL_CUSTOMER_CHARGE'
     */
    const TOTAL_CUSTOMER_CHARGE = 'TOTAL_CUSTOMER_CHARGE';
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
     * @uses self::COD_SURCHARGE
     * @uses self::NET_CHARGE
     * @uses self::NET_FREIGHT
     * @uses self::TOTAL_CUSTOMER_CHARGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COD_SURCHARGE,
            self::NET_CHARGE,
            self::NET_FREIGHT,
            self::TOTAL_CUSTOMER_CHARGE,
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
