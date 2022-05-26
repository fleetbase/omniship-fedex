<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AssociatedShipmentType Enums
 * @subpackage Enumerations
 */
class AssociatedShipmentType
{
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
    /**
     * Constant for value 'COD_RETURN'
     * @return string 'COD_RETURN'
     */
    const COD_RETURN = 'COD_RETURN';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN'
     */
    const DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN';
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
     * @uses self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @uses self::COD_RETURN
     * @uses self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
            self::COD_RETURN,
            self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN,
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
