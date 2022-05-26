<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackPossessionStatusType Enums
 * @subpackage Enumerations
 */
class TrackPossessionStatusType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const BROKER = 'BROKER';
    /**
     * Constant for value 'CARRIER'
     * @return string 'CARRIER'
     */
    const CARRIER = 'CARRIER';
    /**
     * Constant for value 'CUSTOMS'
     * @return string 'CUSTOMS'
     */
    const CUSTOMS = 'CUSTOMS';
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
     * Constant for value 'SPLIT_STATUS'
     * @return string 'SPLIT_STATUS'
     */
    const SPLIT_STATUS = 'SPLIT_STATUS';
    /**
     * Constant for value 'TRANSFER_PARTNER'
     * @return string 'TRANSFER_PARTNER'
     */
    const TRANSFER_PARTNER = 'TRANSFER_PARTNER';
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
     * @uses self::CARRIER
     * @uses self::CUSTOMS
     * @uses self::RECIPIENT
     * @uses self::SHIPPER
     * @uses self::SPLIT_STATUS
     * @uses self::TRANSFER_PARTNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BROKER,
            self::CARRIER,
            self::CUSTOMS,
            self::RECIPIENT,
            self::SHIPPER,
            self::SPLIT_STATUS,
            self::TRANSFER_PARTNER,
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
