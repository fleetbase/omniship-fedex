<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CodReturnReferenceIndicatorType Enums
 * @subpackage Enumerations
 */
class CodReturnReferenceIndicatorType
{
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const INVOICE = 'INVOICE';
    /**
     * Constant for value 'PO'
     * @return string 'PO'
     */
    const PO = 'PO';
    /**
     * Constant for value 'REFERENCE'
     * @return string 'REFERENCE'
     */
    const REFERENCE = 'REFERENCE';
    /**
     * Constant for value 'TRACKING'
     * @return string 'TRACKING'
     */
    const TRACKING = 'TRACKING';
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
     * @uses self::INVOICE
     * @uses self::PO
     * @uses self::REFERENCE
     * @uses self::TRACKING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::INVOICE,
            self::PO,
            self::REFERENCE,
            self::TRACKING,
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
