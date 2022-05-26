<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityAttributeType Enums
 * @subpackage Enumerations
 */
class HazardousCommodityAttributeType
{
    /**
     * Constant for value 'NOT_SUBJECT_TO_REGULATIONS'
     * @return string 'NOT_SUBJECT_TO_REGULATIONS'
     */
    const NOT_SUBJECT_TO_REGULATIONS = 'NOT_SUBJECT_TO_REGULATIONS';
    /**
     * Constant for value 'PLACARDED_VEHICLE_REQUIRED'
     * @return string 'PLACARDED_VEHICLE_REQUIRED'
     */
    const PLACARDED_VEHICLE_REQUIRED = 'PLACARDED_VEHICLE_REQUIRED';
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
     * @uses self::NOT_SUBJECT_TO_REGULATIONS
     * @uses self::PLACARDED_VEHICLE_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::NOT_SUBJECT_TO_REGULATIONS,
            self::PLACARDED_VEHICLE_REQUIRED,
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
