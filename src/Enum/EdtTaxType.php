<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EdtTaxType Enums
 * @subpackage Enumerations
 */
class EdtTaxType
{
    /**
     * Constant for value 'ADDITIONAL_TAXES'
     * @return string 'ADDITIONAL_TAXES'
     */
    const ADDITIONAL_TAXES = 'ADDITIONAL_TAXES';
    /**
     * Constant for value 'CONSULAR_INVOICE_FEE'
     * @return string 'CONSULAR_INVOICE_FEE'
     */
    const CONSULAR_INVOICE_FEE = 'CONSULAR_INVOICE_FEE';
    /**
     * Constant for value 'CUSTOMS_SURCHARGES'
     * @return string 'CUSTOMS_SURCHARGES'
     */
    const CUSTOMS_SURCHARGES = 'CUSTOMS_SURCHARGES';
    /**
     * Constant for value 'DUTY'
     * @return string 'DUTY'
     */
    const DUTY = 'DUTY';
    /**
     * Constant for value 'EXCISE_TAX'
     * @return string 'EXCISE_TAX'
     */
    const EXCISE_TAX = 'EXCISE_TAX';
    /**
     * Constant for value 'FOREIGN_EXCHANGE_TAX'
     * @return string 'FOREIGN_EXCHANGE_TAX'
     */
    const FOREIGN_EXCHANGE_TAX = 'FOREIGN_EXCHANGE_TAX';
    /**
     * Constant for value 'GENERAL_SALES_TAX'
     * @return string 'GENERAL_SALES_TAX'
     */
    const GENERAL_SALES_TAX = 'GENERAL_SALES_TAX';
    /**
     * Constant for value 'IMPORT_LICENSE_FEE'
     * @return string 'IMPORT_LICENSE_FEE'
     */
    const IMPORT_LICENSE_FEE = 'IMPORT_LICENSE_FEE';
    /**
     * Constant for value 'INTERNAL_ADDITIONAL_TAXES'
     * @return string 'INTERNAL_ADDITIONAL_TAXES'
     */
    const INTERNAL_ADDITIONAL_TAXES = 'INTERNAL_ADDITIONAL_TAXES';
    /**
     * Constant for value 'INTERNAL_SENSITIVE_PRODUCTS_TAX'
     * @return string 'INTERNAL_SENSITIVE_PRODUCTS_TAX'
     */
    const INTERNAL_SENSITIVE_PRODUCTS_TAX = 'INTERNAL_SENSITIVE_PRODUCTS_TAX';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'SENSITIVE_PRODUCTS_TAX'
     * @return string 'SENSITIVE_PRODUCTS_TAX'
     */
    const SENSITIVE_PRODUCTS_TAX = 'SENSITIVE_PRODUCTS_TAX';
    /**
     * Constant for value 'STAMP_TAX'
     * @return string 'STAMP_TAX'
     */
    const STAMP_TAX = 'STAMP_TAX';
    /**
     * Constant for value 'STATISTICAL_TAX'
     * @return string 'STATISTICAL_TAX'
     */
    const STATISTICAL_TAX = 'STATISTICAL_TAX';
    /**
     * Constant for value 'TRANSPORT_FACILITIES_TAX'
     * @return string 'TRANSPORT_FACILITIES_TAX'
     */
    const TRANSPORT_FACILITIES_TAX = 'TRANSPORT_FACILITIES_TAX';
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
     * @uses self::ADDITIONAL_TAXES
     * @uses self::CONSULAR_INVOICE_FEE
     * @uses self::CUSTOMS_SURCHARGES
     * @uses self::DUTY
     * @uses self::EXCISE_TAX
     * @uses self::FOREIGN_EXCHANGE_TAX
     * @uses self::GENERAL_SALES_TAX
     * @uses self::IMPORT_LICENSE_FEE
     * @uses self::INTERNAL_ADDITIONAL_TAXES
     * @uses self::INTERNAL_SENSITIVE_PRODUCTS_TAX
     * @uses self::OTHER
     * @uses self::SENSITIVE_PRODUCTS_TAX
     * @uses self::STAMP_TAX
     * @uses self::STATISTICAL_TAX
     * @uses self::TRANSPORT_FACILITIES_TAX
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ADDITIONAL_TAXES,
            self::CONSULAR_INVOICE_FEE,
            self::CUSTOMS_SURCHARGES,
            self::DUTY,
            self::EXCISE_TAX,
            self::FOREIGN_EXCHANGE_TAX,
            self::GENERAL_SALES_TAX,
            self::IMPORT_LICENSE_FEE,
            self::INTERNAL_ADDITIONAL_TAXES,
            self::INTERNAL_SENSITIVE_PRODUCTS_TAX,
            self::OTHER,
            self::SENSITIVE_PRODUCTS_TAX,
            self::STAMP_TAX,
            self::STATISTICAL_TAX,
            self::TRANSPORT_FACILITIES_TAX,
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
