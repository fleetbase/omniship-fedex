<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RegulatoryLabelType Enums
 * @subpackage Enumerations
 */
class RegulatoryLabelType
{
    /**
     * Constant for value 'ALCOHOL_SHIPMENT_LABEL'
     * @return string 'ALCOHOL_SHIPMENT_LABEL'
     */
    const ALCOHOL_SHIPMENT_LABEL = 'ALCOHOL_SHIPMENT_LABEL';
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
     * @uses self::ALCOHOL_SHIPMENT_LABEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ALCOHOL_SHIPMENT_LABEL,
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
