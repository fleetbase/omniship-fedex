<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EMailNotificationRecipientType Enums
 * @subpackage Enumerations
 */
class EMailNotificationRecipientType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const BROKER = 'BROKER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'SHIPPER'
     * @return string 'SHIPPER'
     */
    const SHIPPER = 'SHIPPER';
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
     * @uses self::BROKER
     * @uses self::OTHER
     * @uses self::RECIPIENT
     * @uses self::SHIPPER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BROKER,
            self::OTHER,
            self::RECIPIENT,
            self::SHIPPER,
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
