<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PickupRequestSourceType Enums
 * @subpackage Enumerations
 */
class PickupRequestSourceType
{
    /**
     * Constant for value 'AUTOMATION'
     * @return string 'AUTOMATION'
     */
    const AUTOMATION = 'AUTOMATION';
    /**
     * Constant for value 'CUSTOMER_SERVICE'
     * @return string 'CUSTOMER_SERVICE'
     */
    const CUSTOMER_SERVICE = 'CUSTOMER_SERVICE';
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
     * @uses self::AUTOMATION
     * @uses self::CUSTOMER_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AUTOMATION,
            self::CUSTOMER_SERVICE,
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
