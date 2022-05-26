<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomerReferenceType Enums
 * @subpackage Enumerations
 */
class CustomerReferenceType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'CUSTOMER_REFERENCE'
     * @return string 'CUSTOMER_REFERENCE'
     */
    const CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    /**
     * Constant for value 'DEPARTMENT_NUMBER'
     * @return string 'DEPARTMENT_NUMBER'
     */
    const DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    /**
     * Constant for value 'ELECTRONIC_PRODUCT_CODE'
     * @return string 'ELECTRONIC_PRODUCT_CODE'
     */
    const ELECTRONIC_PRODUCT_CODE = 'ELECTRONIC_PRODUCT_CODE';
    /**
     * Constant for value 'INTRACOUNTRY_REGULATORY_REFERENCE'
     * @return string 'INTRACOUNTRY_REGULATORY_REFERENCE'
     */
    const INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    /**
     * Constant for value 'INVOICE_NUMBER'
     * @return string 'INVOICE_NUMBER'
     */
    const INVOICE_NUMBER = 'INVOICE_NUMBER';
    /**
     * Constant for value 'PACKING_SLIP_NUMBER'
     * @return string 'PACKING_SLIP_NUMBER'
     */
    const PACKING_SLIP_NUMBER = 'PACKING_SLIP_NUMBER';
    /**
     * Constant for value 'P_O_NUMBER'
     * @return string 'P_O_NUMBER'
     */
    const P_O_NUMBER = 'P_O_NUMBER';
    /**
     * Constant for value 'RMA_ASSOCIATION'
     * @return string 'RMA_ASSOCIATION'
     */
    const RMA_ASSOCIATION = 'RMA_ASSOCIATION';
    /**
     * Constant for value 'SHIPMENT_INTEGRITY'
     * @return string 'SHIPMENT_INTEGRITY'
     */
    const SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
    /**
     * Constant for value 'STORE_NUMBER'
     * @return string 'STORE_NUMBER'
     */
    const STORE_NUMBER = 'STORE_NUMBER';
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
     * @uses self::BILL_OF_LADING
     * @uses self::CUSTOMER_REFERENCE
     * @uses self::DEPARTMENT_NUMBER
     * @uses self::ELECTRONIC_PRODUCT_CODE
     * @uses self::INTRACOUNTRY_REGULATORY_REFERENCE
     * @uses self::INVOICE_NUMBER
     * @uses self::PACKING_SLIP_NUMBER
     * @uses self::P_O_NUMBER
     * @uses self::RMA_ASSOCIATION
     * @uses self::SHIPMENT_INTEGRITY
     * @uses self::STORE_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BILL_OF_LADING,
            self::CUSTOMER_REFERENCE,
            self::DEPARTMENT_NUMBER,
            self::ELECTRONIC_PRODUCT_CODE,
            self::INTRACOUNTRY_REGULATORY_REFERENCE,
            self::INVOICE_NUMBER,
            self::PACKING_SLIP_NUMBER,
            self::P_O_NUMBER,
            self::RMA_ASSOCIATION,
            self::SHIPMENT_INTEGRITY,
            self::STORE_NUMBER,
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
