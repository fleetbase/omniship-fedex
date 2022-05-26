<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SignatureProofOfDeliveryImageType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the set of SPOD image types.
 * @subpackage Enumerations
 */
class SignatureProofOfDeliveryImageType
{
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
     * @uses self::PDF
     * @uses self::PNG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::PDF,
            self::PNG,
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
