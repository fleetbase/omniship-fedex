<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightShipmentRoleType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the role of the party submitting the transaction.
 * @subpackage Enumerations
 */
class FreightShipmentRoleType
{
    /**
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'SHIPPER'
     * @return string 'SHIPPER'
     */
    const SHIPPER = 'SHIPPER';
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
     * @uses self::CONSIGNEE
     * @uses self::SHIPPER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONSIGNEE,
            self::SHIPPER,
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
