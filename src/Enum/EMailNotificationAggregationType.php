<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EMailNotificationAggregationType Enums
 * @subpackage Enumerations
 */
class EMailNotificationAggregationType
{
    /**
     * Constant for value 'PER_PACKAGE'
     * @return string 'PER_PACKAGE'
     */
    const PER_PACKAGE = 'PER_PACKAGE';
    /**
     * Constant for value 'PER_SHIPMENT'
     * @return string 'PER_SHIPMENT'
     */
    const PER_SHIPMENT = 'PER_SHIPMENT';
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
     * @uses self::PER_PACKAGE
     * @uses self::PER_SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::PER_PACKAGE,
            self::PER_SHIPMENT,
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
