<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EMailNotificationEventType Enums
 * @subpackage Enumerations
 */
class EMailNotificationEventType
{
    /**
     * Constant for value 'ON_DELIVERY'
     * @return string 'ON_DELIVERY'
     */
    const ON_DELIVERY = 'ON_DELIVERY';
    /**
     * Constant for value 'ON_EXCEPTION'
     * @return string 'ON_EXCEPTION'
     */
    const ON_EXCEPTION = 'ON_EXCEPTION';
    /**
     * Constant for value 'ON_SHIPMENT'
     * @return string 'ON_SHIPMENT'
     */
    const ON_SHIPMENT = 'ON_SHIPMENT';
    /**
     * Constant for value 'ON_TENDER'
     * @return string 'ON_TENDER'
     */
    const ON_TENDER = 'ON_TENDER';
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
     * @uses self::ON_DELIVERY
     * @uses self::ON_EXCEPTION
     * @uses self::ON_SHIPMENT
     * @uses self::ON_TENDER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ON_DELIVERY,
            self::ON_EXCEPTION,
            self::ON_SHIPMENT,
            self::ON_TENDER,
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
