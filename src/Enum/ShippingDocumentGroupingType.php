<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShippingDocumentGroupingType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to organize all shipping documents of the same type.
 * @subpackage Enumerations
 */
class ShippingDocumentGroupingType
{
    /**
     * Constant for value 'CONSOLIDATED_BY_DOCUMENT_TYPE'
     * @return string 'CONSOLIDATED_BY_DOCUMENT_TYPE'
     */
    const CONSOLIDATED_BY_DOCUMENT_TYPE = 'CONSOLIDATED_BY_DOCUMENT_TYPE';
    /**
     * Constant for value 'INDIVIDUAL'
     * @return string 'INDIVIDUAL'
     */
    const INDIVIDUAL = 'INDIVIDUAL';
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
     * @uses self::CONSOLIDATED_BY_DOCUMENT_TYPE
     * @uses self::INDIVIDUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONSOLIDATED_BY_DOCUMENT_TYPE,
            self::INDIVIDUAL,
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
