<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AvailableImageType Enums
 * @subpackage Enumerations
 */
class AvailableImageType
{
    /**
     * Constant for value 'BILL_OF_LADING'
     * @return string 'BILL_OF_LADING'
     */
    const BILL_OF_LADING = 'BILL_OF_LADING';
    /**
     * Constant for value 'SIGNATURE_PROOF_OF_DELIVERY'
     * @return string 'SIGNATURE_PROOF_OF_DELIVERY'
     */
    const SIGNATURE_PROOF_OF_DELIVERY = 'SIGNATURE_PROOF_OF_DELIVERY';
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
     * @uses self::SIGNATURE_PROOF_OF_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BILL_OF_LADING,
            self::SIGNATURE_PROOF_OF_DELIVERY,
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
