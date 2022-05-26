<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ReturnedShippingDocumentType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Shipping document type.
 * @subpackage Enumerations
 */
class ReturnedShippingDocumentType
{
    /**
     * Constant for value 'AUXILIARY_LABEL'
     * @return string 'AUXILIARY_LABEL'
     */
    const AUXILIARY_LABEL = 'AUXILIARY_LABEL';
    /**
     * Constant for value 'CERTIFICATE_OF_ORIGIN'
     * @return string 'CERTIFICATE_OF_ORIGIN'
     */
    const CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     */
    const COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     * @return string 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     */
    const COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL = 'COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL';
    /**
     * Constant for value 'COD_RETURN_2_D_BARCODE'
     * @return string 'COD_RETURN_2_D_BARCODE'
     */
    const COD_RETURN_2_D_BARCODE = 'COD_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'COD_RETURN_LABEL'
     * @return string 'COD_RETURN_LABEL'
     */
    const COD_RETURN_LABEL = 'COD_RETURN_LABEL';
    /**
     * Constant for value 'COMMERCIAL_INVOICE'
     * @return string 'COMMERCIAL_INVOICE'
     */
    const COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    /**
     * Constant for value 'CUSTOM_PACKAGE_DOCUMENT'
     * @return string 'CUSTOM_PACKAGE_DOCUMENT'
     */
    const CUSTOM_PACKAGE_DOCUMENT = 'CUSTOM_PACKAGE_DOCUMENT';
    /**
     * Constant for value 'CUSTOM_SHIPMENT_DOCUMENT'
     * @return string 'CUSTOM_SHIPMENT_DOCUMENT'
     */
    const CUSTOM_SHIPMENT_DOCUMENT = 'CUSTOM_SHIPMENT_DOCUMENT';
    /**
     * Constant for value 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     * @return string 'DANGEROUS_GOODS_SHIPPERS_DECLARATION'
     */
    const DANGEROUS_GOODS_SHIPPERS_DECLARATION = 'DANGEROUS_GOODS_SHIPPERS_DECLARATION';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE'
     */
    const DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE';
    /**
     * Constant for value 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     * @return string 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL'
     */
    const DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL = 'DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL';
    /**
     * Constant for value 'ETD_LABEL'
     * @return string 'ETD_LABEL'
     */
    const ETD_LABEL = 'ETD_LABEL';
    /**
     * Constant for value 'EXPORT_DECLARATION'
     * @return string 'EXPORT_DECLARATION'
     */
    const EXPORT_DECLARATION = 'EXPORT_DECLARATION';
    /**
     * Constant for value 'FREIGHT_ADDRESS_LABEL'
     * @return string 'FREIGHT_ADDRESS_LABEL'
     */
    const FREIGHT_ADDRESS_LABEL = 'FREIGHT_ADDRESS_LABEL';
    /**
     * Constant for value 'GENERAL_AGENCY_AGREEMENT'
     * @return string 'GENERAL_AGENCY_AGREEMENT'
     */
    const GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    /**
     * Constant for value 'GROUND_BARCODE'
     * @return string 'GROUND_BARCODE'
     */
    const GROUND_BARCODE = 'GROUND_BARCODE';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'OP_900'
     * @return string 'OP_900'
     */
    const OP_900 = 'OP_900';
    /**
     * Constant for value 'OUTBOUND_2_D_BARCODE'
     * @return string 'OUTBOUND_2_D_BARCODE'
     */
    const OUTBOUND_2_D_BARCODE = 'OUTBOUND_2_D_BARCODE';
    /**
     * Constant for value 'OUTBOUND_LABEL'
     * @return string 'OUTBOUND_LABEL'
     */
    const OUTBOUND_LABEL = 'OUTBOUND_LABEL';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    /**
     * Constant for value 'RECIPIENT_ADDRESS_BARCODE'
     * @return string 'RECIPIENT_ADDRESS_BARCODE'
     */
    const RECIPIENT_ADDRESS_BARCODE = 'RECIPIENT_ADDRESS_BARCODE';
    /**
     * Constant for value 'RECIPIENT_POSTAL_BARCODE'
     * @return string 'RECIPIENT_POSTAL_BARCODE'
     */
    const RECIPIENT_POSTAL_BARCODE = 'RECIPIENT_POSTAL_BARCODE';
    /**
     * Constant for value 'RETURN_INSTRUCTIONS'
     * @return string 'RETURN_INSTRUCTIONS'
     */
    const RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
    /**
     * Constant for value 'TERMS_AND_CONDITIONS'
     * @return string 'TERMS_AND_CONDITIONS'
     */
    const TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    /**
     * Constant for value 'USPS_BARCODE'
     * @return string 'USPS_BARCODE'
     */
    const USPS_BARCODE = 'USPS_BARCODE';
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
     * @uses self::AUXILIARY_LABEL
     * @uses self::CERTIFICATE_OF_ORIGIN
     * @uses self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE
     * @uses self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL
     * @uses self::COD_RETURN_2_D_BARCODE
     * @uses self::COD_RETURN_LABEL
     * @uses self::COMMERCIAL_INVOICE
     * @uses self::CUSTOM_PACKAGE_DOCUMENT
     * @uses self::CUSTOM_SHIPMENT_DOCUMENT
     * @uses self::DANGEROUS_GOODS_SHIPPERS_DECLARATION
     * @uses self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE
     * @uses self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL
     * @uses self::ETD_LABEL
     * @uses self::EXPORT_DECLARATION
     * @uses self::FREIGHT_ADDRESS_LABEL
     * @uses self::GENERAL_AGENCY_AGREEMENT
     * @uses self::GROUND_BARCODE
     * @uses self::NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::OP_900
     * @uses self::OUTBOUND_2_D_BARCODE
     * @uses self::OUTBOUND_LABEL
     * @uses self::PRO_FORMA_INVOICE
     * @uses self::RECIPIENT_ADDRESS_BARCODE
     * @uses self::RECIPIENT_POSTAL_BARCODE
     * @uses self::RETURN_INSTRUCTIONS
     * @uses self::TERMS_AND_CONDITIONS
     * @uses self::USPS_BARCODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AUXILIARY_LABEL,
            self::CERTIFICATE_OF_ORIGIN,
            self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE,
            self::COD_AND_DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL,
            self::COD_RETURN_2_D_BARCODE,
            self::COD_RETURN_LABEL,
            self::COMMERCIAL_INVOICE,
            self::CUSTOM_PACKAGE_DOCUMENT,
            self::CUSTOM_SHIPMENT_DOCUMENT,
            self::DANGEROUS_GOODS_SHIPPERS_DECLARATION,
            self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_2_D_BARCODE,
            self::DELIVERY_ON_INVOICE_ACCEPTANCE_RETURN_LABEL,
            self::ETD_LABEL,
            self::EXPORT_DECLARATION,
            self::FREIGHT_ADDRESS_LABEL,
            self::GENERAL_AGENCY_AGREEMENT,
            self::GROUND_BARCODE,
            self::NAFTA_CERTIFICATE_OF_ORIGIN,
            self::OP_900,
            self::OUTBOUND_2_D_BARCODE,
            self::OUTBOUND_LABEL,
            self::PRO_FORMA_INVOICE,
            self::RECIPIENT_ADDRESS_BARCODE,
            self::RECIPIENT_POSTAL_BARCODE,
            self::RETURN_INSTRUCTIONS,
            self::TERMS_AND_CONDITIONS,
            self::USPS_BARCODE,
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
