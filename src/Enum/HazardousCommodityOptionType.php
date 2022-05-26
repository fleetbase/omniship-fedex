<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates which kind of hazardous content is being reported.
 * @subpackage Enumerations
 */
class HazardousCommodityOptionType
{
    /**
     * Constant for value 'BATTERY'
     * @return string 'BATTERY'
     */
    const BATTERY = 'BATTERY';
    /**
     * Constant for value 'HAZARDOUS_MATERIALS'
     * @return string 'HAZARDOUS_MATERIALS'
     */
    const HAZARDOUS_MATERIALS = 'HAZARDOUS_MATERIALS';
    /**
     * Constant for value 'LIMITED_QUANTITIES_COMMODITIES'
     * @return string 'LIMITED_QUANTITIES_COMMODITIES'
     */
    const LIMITED_QUANTITIES_COMMODITIES = 'LIMITED_QUANTITIES_COMMODITIES';
    /**
     * Constant for value 'ORM_D'
     * @return string 'ORM_D'
     */
    const ORM_D = 'ORM_D';
    /**
     * Constant for value 'REPORTABLE_QUANTITIES'
     * @return string 'REPORTABLE_QUANTITIES'
     */
    const REPORTABLE_QUANTITIES = 'REPORTABLE_QUANTITIES';
    /**
     * Constant for value 'SMALL_QUANTITY_EXCEPTION'
     * @return string 'SMALL_QUANTITY_EXCEPTION'
     */
    const SMALL_QUANTITY_EXCEPTION = 'SMALL_QUANTITY_EXCEPTION';
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
     * @uses self::BATTERY
     * @uses self::HAZARDOUS_MATERIALS
     * @uses self::LIMITED_QUANTITIES_COMMODITIES
     * @uses self::ORM_D
     * @uses self::REPORTABLE_QUANTITIES
     * @uses self::SMALL_QUANTITY_EXCEPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BATTERY,
            self::HAZARDOUS_MATERIALS,
            self::LIMITED_QUANTITIES_COMMODITIES,
            self::ORM_D,
            self::REPORTABLE_QUANTITIES,
            self::SMALL_QUANTITY_EXCEPTION,
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
