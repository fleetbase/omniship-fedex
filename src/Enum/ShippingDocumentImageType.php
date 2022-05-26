<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShippingDocumentImageType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the image format used for a shipping document.
 * @subpackage Enumerations
 */
class ShippingDocumentImageType
{
    /**
     * Constant for value 'DPL'
     * @return string 'DPL'
     */
    const DPL = 'DPL';
    /**
     * Constant for value 'EPL2'
     * @return string 'EPL2'
     */
    const EPL2 = 'EPL2';
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const PDF = 'PDF';
    /**
     * Constant for value 'PNG'
     * @return string 'PNG'
     */
    const PNG = 'PNG';
    /**
     * Constant for value 'ZPLII'
     * @return string 'ZPLII'
     */
    const ZPLII = 'ZPLII';
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
     * @uses self::DPL
     * @uses self::EPL2
     * @uses self::PDF
     * @uses self::PNG
     * @uses self::ZPLII
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DPL,
            self::EPL2,
            self::PDF,
            self::PNG,
            self::ZPLII,
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
