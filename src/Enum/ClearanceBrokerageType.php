<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ClearanceBrokerageType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of brokerage to be applied to a shipment.
 * @subpackage Enumerations
 */
class ClearanceBrokerageType
{
    /**
     * Constant for value 'BROKER_INCLUSIVE'
     * @return string 'BROKER_INCLUSIVE'
     */
    const BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';
    /**
     * Constant for value 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER'
     * @return string 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER'
     */
    const BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';
    /**
     * Constant for value 'BROKER_SELECT'
     * @return string 'BROKER_SELECT'
     */
    const BROKER_SELECT = 'BROKER_SELECT';
    /**
     * Constant for value 'BROKER_SELECT_NON_RESIDENT_IMPORTER'
     * @return string 'BROKER_SELECT_NON_RESIDENT_IMPORTER'
     */
    const BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';
    /**
     * Constant for value 'BROKER_UNASSIGNED'
     * @return string 'BROKER_UNASSIGNED'
     */
    const BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';
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
     * @uses self::BROKER_INCLUSIVE
     * @uses self::BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER
     * @uses self::BROKER_SELECT
     * @uses self::BROKER_SELECT_NON_RESIDENT_IMPORTER
     * @uses self::BROKER_UNASSIGNED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BROKER_INCLUSIVE,
            self::BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER,
            self::BROKER_SELECT,
            self::BROKER_SELECT_NON_RESIDENT_IMPORTER,
            self::BROKER_UNASSIGNED,
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
