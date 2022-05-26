<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AccessorRoleType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the role that identifies the permissions the accessor of the pending shipment.
 * @subpackage Enumerations
 */
class AccessorRoleType
{
    /**
     * Constant for value 'SHIPMENT_COMPLETOR'
     * @return string 'SHIPMENT_COMPLETOR'
     */
    const SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
    /**
     * Constant for value 'SHIPMENT_INITIATOR'
     * @return string 'SHIPMENT_INITIATOR'
     */
    const SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
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
     * @uses self::SHIPMENT_COMPLETOR
     * @uses self::SHIPMENT_INITIATOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::SHIPMENT_COMPLETOR,
            self::SHIPMENT_INITIATOR,
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
