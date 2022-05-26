<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for UploadDocumentType Enums
 * @subpackage Enumerations
 */
class UploadDocumentType
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
     * Constant for value 'ETD_LABEL'
     * @return string 'ETD_LABEL'
     */
    const ETD_LABEL = 'ETD_LABEL';
    /**
     * Constant for value 'NAFTA_CERTIFICATE_OF_ORIGIN'
     * @return string 'NAFTA_CERTIFICATE_OF_ORIGIN'
     */
    const NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PRO_FORMA_INVOICE'
     * @return string 'PRO_FORMA_INVOICE'
     */
    const PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
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
     * @uses self::ETD_LABEL
     * @uses self::NAFTA_CERTIFICATE_OF_ORIGIN
     * @uses self::OTHER
     * @uses self::PRO_FORMA_INVOICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CERTIFICATE_OF_ORIGIN,
            self::COMMERCIAL_INVOICE,
            self::ETD_LABEL,
            self::NAFTA_CERTIFICATE_OF_ORIGIN,
            self::OTHER,
            self::PRO_FORMA_INVOICE,
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
