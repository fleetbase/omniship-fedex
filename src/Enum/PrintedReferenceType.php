<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PrintedReferenceType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a particular reference identifier printed on a Freight bill of lading.
 * @subpackage Enumerations
 */
class PrintedReferenceType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'CONSIGNEE_ID_NUMBER'
     * @return string 'CONSIGNEE_ID_NUMBER'
     */
    const CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    /**
     * Constant for value 'SHIPPER_ID_NUMBER'
     * @return string 'SHIPPER_ID_NUMBER'
     */
    const SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
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
     * @uses self::CONSIGNEE_ID_NUMBER
     * @uses self::SHIPPER_ID_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BILL_OF_LADING,
            self::CONSIGNEE_ID_NUMBER,
            self::SHIPPER_ID_NUMBER,
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
