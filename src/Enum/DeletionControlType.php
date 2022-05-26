<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DeletionControlType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of deletion to be performed on a shipment.
 * @subpackage Enumerations
 */
class DeletionControlType
{
    /**
     * Constant for value 'DELETE_ALL_PACKAGES'
     * @return string 'DELETE_ALL_PACKAGES'
     */
    const DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    /**
     * Constant for value 'DELETE_ENTIRE_CONSOLIDATION'
     * @return string 'DELETE_ENTIRE_CONSOLIDATION'
     */
    const DELETE_ENTIRE_CONSOLIDATION = 'DELETE_ENTIRE_CONSOLIDATION';
    /**
     * Constant for value 'DELETE_ONE_PACKAGE'
     * @return string 'DELETE_ONE_PACKAGE'
     */
    const DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
    /**
     * Constant for value 'LEGACY'
     * @return string 'LEGACY'
     */
    const LEGACY = 'LEGACY';
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
     * @uses self::DELETE_ALL_PACKAGES
     * @uses self::DELETE_ENTIRE_CONSOLIDATION
     * @uses self::DELETE_ONE_PACKAGE
     * @uses self::LEGACY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DELETE_ALL_PACKAGES,
            self::DELETE_ENTIRE_CONSOLIDATION,
            self::DELETE_ONE_PACKAGE,
            self::LEGACY,
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
