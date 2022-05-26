<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RequestedShippingDocumentType Enums
 * @subpackage Enumerations
 */
class RequestedShippingDocumentType
{
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
     * Constant for value 'CUSTOMER_SPECIFIED_LABELS'
     * @return string 'CUSTOMER_SPECIFIED_LABELS'
     */
    const CUSTOMER_SPECIFIED_LABELS = 'CUSTOMER_SPECIFIED_LABELS';
    /**
     * Constant for value 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     * @return string 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     */
    const DANGEROUS_GOODS_SHIPPERS_DECLARATION = 'DANGEROUS_GOODS_SHIPPERS_DECLARATION';
    /**
     * Constant for value 'EXPORT_DECLARATION'
     * @return string 'EXPORT_DECLARATION'
     */
    const EXPORT_DECLARATION = 'EXPORT_DECLARATION';
    /**
     * Constant for value 'GENERAL_AGENCY_AGREEMENT'
     * @return string 'GENERAL_AGENCY_AGREEMENT'
     */
    const GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    /**
     * Constant for value 'LABEL'
     * @return string 'LABEL'
     */
    const LABEL = 'LABEL';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    /**
     * Constant for value 'RETURN_INSTRUCTIONS'
     * @return string 'RETURN_INSTRUCTIONS'
     */
    const RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
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
     * @uses self::CERTIFICATE_OF_ORIGIN
     * @uses self::COMMERCIAL_INVOICE
     * @uses self::CUSTOMER_SPECIFIED_LABELS
     * @uses self::DANGEROUS_GOODS_SHIPPERS_DECLARATION
     * @uses self::EXPORT_DECLARATION
     * @uses self::GENERAL_AGENCY_AGREEMENT
     * @uses self::LABEL
     * @uses self::NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::PRO_FORMA_INVOICE
     * @uses self::RETURN_INSTRUCTIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CERTIFICATE_OF_ORIGIN,
            self::COMMERCIAL_INVOICE,
            self::CUSTOMER_SPECIFIED_LABELS,
            self::DANGEROUS_GOODS_SHIPPERS_DECLARATION,
            self::EXPORT_DECLARATION,
            self::GENERAL_AGENCY_AGREEMENT,
            self::LABEL,
            self::NAFTA_CERTIFICATE_OF_ORIGIN,
            self::PRO_FORMA_INVOICE,
            self::RETURN_INSTRUCTIONS,
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
