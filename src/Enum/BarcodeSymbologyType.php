<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for BarcodeSymbologyType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identification of the type of barcode (symbology) used on FedEx documents and labels.
 * @subpackage Enumerations
 */
class BarcodeSymbologyType
{
    /**
     * Constant for value 'CODABAR'
     * @return string 'CODABAR'
     */
    const CODABAR = 'CODABAR';
    /**
     * Constant for value 'CODE128'
     * @return string 'CODE128'
     */
    const CODE128 = 'CODE128';
    /**
     * Constant for value 'CODE128B'
     * @return string 'CODE128B'
     */
    const CODE128B = 'CODE128B';
    /**
     * Constant for value 'CODE128C'
     * @return string 'CODE128C'
     */
    const CODE128C = 'CODE128C';
    /**
     * Constant for value 'CODE128_WIDEBAR'
     * @return string 'CODE128_WIDEBAR'
     */
    const CODE128_WIDEBAR = 'CODE128_WIDEBAR';
    /**
     * Constant for value 'CODE39'
     * @return string 'CODE39'
     */
    const CODE39 = 'CODE39';
    /**
     * Constant for value 'CODE93'
     * @return string 'CODE93'
     */
    const CODE93 = 'CODE93';
    /**
     * Constant for value 'I2OF5'
     * @return string 'I2OF5'
     */
    const I2OF5 = 'I2OF5';
    /**
     * Constant for value 'MANUAL'
     * @return string 'MANUAL'
     */
    const MANUAL = 'MANUAL';
    /**
     * Constant for value 'PDF417'
     * @return string 'PDF417'
     */
    const PDF417 = 'PDF417';
    /**
     * Constant for value 'POSTNET'
     * @return string 'POSTNET'
     */
    const POSTNET = 'POSTNET';
    /**
     * Constant for value 'QR_CODE'
     * @return string 'QR_CODE'
     */
    const QR_CODE = 'QR_CODE';
    /**
     * Constant for value 'UCC128'
     * @return string 'UCC128'
     */
    const UCC128 = 'UCC128';
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
     * @uses self::CODABAR
     * @uses self::CODE128
     * @uses self::CODE128B
     * @uses self::CODE128C
     * @uses self::CODE128_WIDEBAR
     * @uses self::CODE39
     * @uses self::CODE93
     * @uses self::I2OF5
     * @uses self::MANUAL
     * @uses self::PDF417
     * @uses self::POSTNET
     * @uses self::QR_CODE
     * @uses self::UCC128
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CODABAR,
            self::CODE128,
            self::CODE128B,
            self::CODE128C,
            self::CODE128_WIDEBAR,
            self::CODE39,
            self::CODE93,
            self::I2OF5,
            self::MANUAL,
            self::PDF417,
            self::POSTNET,
            self::QR_CODE,
            self::UCC128,
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
