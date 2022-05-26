<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RequiredShippingDocumentType Enums
 * @subpackage Enumerations
 */
class RequiredShippingDocumentType
{
    /**
     * Constant for value 'CANADIAN_B13A'
     * @return string 'CANADIAN_B13A'
     */
    const CANADIAN_B13A = 'CANADIAN_B13A';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'INTERNATIONAL_AIRWAY_BILL'
     * @return string 'INTERNATIONAL_AIRWAY_BILL'
     */
    const INTERNATIONAL_AIRWAY_BILL = 'INTERNATIONAL_AIRWAY_BILL';
    /**
     * Constant for value 'MAIL_SERVICE_AIRWAY_BILL'
     * @return string 'MAIL_SERVICE_AIRWAY_BILL'
     */
    const MAIL_SERVICE_AIRWAY_BILL = 'MAIL_SERVICE_AIRWAY_BILL';
    /**
     * Constant for value 'SHIPPERS_EXPORT_DECLARATION'
     * @return string 'SHIPPERS_EXPORT_DECLARATION'
     */
    const SHIPPERS_EXPORT_DECLARATION = 'SHIPPERS_EXPORT_DECLARATION';
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
     * @uses self::CANADIAN_B13A
     * @uses self::CERTIFICATE_OF_ORIGIN
     * @uses self::COMMERCIAL_INVOICE
     * @uses self::INTERNATIONAL_AIRWAY_BILL
     * @uses self::MAIL_SERVICE_AIRWAY_BILL
     * @uses self::SHIPPERS_EXPORT_DECLARATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CANADIAN_B13A,
            self::CERTIFICATE_OF_ORIGIN,
            self::COMMERCIAL_INVOICE,
            self::INTERNATIONAL_AIRWAY_BILL,
            self::MAIL_SERVICE_AIRWAY_BILL,
            self::SHIPPERS_EXPORT_DECLARATION,
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
