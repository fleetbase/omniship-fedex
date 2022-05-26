<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LabelMaskableDataType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Names for data elements / areas which may be suppressed from printing on labels.
 * @subpackage Enumerations
 */
class LabelMaskableDataType
{
    /**
     * Constant for value 'CUSTOMS_VALUE'
     * @return string 'CUSTOMS_VALUE'
     */
    const CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    /**
     * Constant for value 'DIMENSIONS'
     * @return string 'DIMENSIONS'
     */
    const DIMENSIONS = 'DIMENSIONS';
    /**
     * Constant for value 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER'
     * @return string 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER'
     */
    const DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
    /**
     * Constant for value 'FREIGHT_PAYOR_ACCOUNT_NUMBER'
     * @return string 'FREIGHT_PAYOR_ACCOUNT_NUMBER'
     */
    const FREIGHT_PAYOR_ACCOUNT_NUMBER = 'FREIGHT_PAYOR_ACCOUNT_NUMBER';
    /**
     * Constant for value 'PACKAGE_SEQUENCE_AND_COUNT'
     * @return string 'PACKAGE_SEQUENCE_AND_COUNT'
     */
    const PACKAGE_SEQUENCE_AND_COUNT = 'PACKAGE_SEQUENCE_AND_COUNT';
    /**
     * Constant for value 'SECONDARY_BARCODE'
     * @return string 'SECONDARY_BARCODE'
     */
    const SECONDARY_BARCODE = 'SECONDARY_BARCODE';
    /**
     * Constant for value 'SHIPPER_ACCOUNT_NUMBER'
     * @return string 'SHIPPER_ACCOUNT_NUMBER'
     */
    const SHIPPER_ACCOUNT_NUMBER = 'SHIPPER_ACCOUNT_NUMBER';
    /**
     * Constant for value 'SUPPLEMENTAL_LABEL_DOC_TAB'
     * @return string 'SUPPLEMENTAL_LABEL_DOC_TAB'
     */
    const SUPPLEMENTAL_LABEL_DOC_TAB = 'SUPPLEMENTAL_LABEL_DOC_TAB';
    /**
     * Constant for value 'TERMS_AND_CONDITIONS'
     * @return string 'TERMS_AND_CONDITIONS'
     */
    const TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    /**
     * Constant for value 'TOTAL_WEIGHT'
     * @return string 'TOTAL_WEIGHT'
     */
    const TOTAL_WEIGHT = 'TOTAL_WEIGHT';
    /**
     * Constant for value 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER'
     * @return string 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER'
     */
    const TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
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
     * @uses self::CUSTOMS_VALUE
     * @uses self::DIMENSIONS
     * @uses self::DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER
     * @uses self::FREIGHT_PAYOR_ACCOUNT_NUMBER
     * @uses self::PACKAGE_SEQUENCE_AND_COUNT
     * @uses self::SECONDARY_BARCODE
     * @uses self::SHIPPER_ACCOUNT_NUMBER
     * @uses self::SUPPLEMENTAL_LABEL_DOC_TAB
     * @uses self::TERMS_AND_CONDITIONS
     * @uses self::TOTAL_WEIGHT
     * @uses self::TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CUSTOMS_VALUE,
            self::DIMENSIONS,
            self::DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER,
            self::FREIGHT_PAYOR_ACCOUNT_NUMBER,
            self::PACKAGE_SEQUENCE_AND_COUNT,
            self::SECONDARY_BARCODE,
            self::SHIPPER_ACCOUNT_NUMBER,
            self::SUPPLEMENTAL_LABEL_DOC_TAB,
            self::TERMS_AND_CONDITIONS,
            self::TOTAL_WEIGHT,
            self::TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER,
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
