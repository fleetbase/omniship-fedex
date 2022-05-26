<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackPaymentType Enums
 * @subpackage Enumerations
 */
class TrackPaymentType
{
    /**
     * Constant for value 'CASH_OR_CHECK_AT_DESTINATION'
     * @return string 'CASH_OR_CHECK_AT_DESTINATION'
     */
    const CASH_OR_CHECK_AT_DESTINATION = 'CASH_OR_CHECK_AT_DESTINATION';
    /**
     * Constant for value 'CASH_OR_CHECK_AT_ORIGIN'
     * @return string 'CASH_OR_CHECK_AT_ORIGIN'
     */
    const CASH_OR_CHECK_AT_ORIGIN = 'CASH_OR_CHECK_AT_ORIGIN';
    /**
     * Constant for value 'CREDIT_CARD_AT_DESTINATION'
     * @return string 'CREDIT_CARD_AT_DESTINATION'
     */
    const CREDIT_CARD_AT_DESTINATION = 'CREDIT_CARD_AT_DESTINATION';
    /**
     * Constant for value 'CREDIT_CARD_AT_ORIGIN'
     * @return string 'CREDIT_CARD_AT_ORIGIN'
     */
    const CREDIT_CARD_AT_ORIGIN = 'CREDIT_CARD_AT_ORIGIN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'RECIPIENT_ACCOUNT'
     * @return string 'RECIPIENT_ACCOUNT'
     */
    const RECIPIENT_ACCOUNT = 'RECIPIENT_ACCOUNT';
    /**
     * Constant for value 'SHIPPER_ACCOUNT'
     * @return string 'SHIPPER_ACCOUNT'
     */
    const SHIPPER_ACCOUNT = 'SHIPPER_ACCOUNT';
    /**
     * Constant for value 'THIRD_PARTY_ACCOUNT'
     * @return string 'THIRD_PARTY_ACCOUNT'
     */
    const THIRD_PARTY_ACCOUNT = 'THIRD_PARTY_ACCOUNT';
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
     * @uses self::CASH_OR_CHECK_AT_DESTINATION
     * @uses self::CASH_OR_CHECK_AT_ORIGIN
     * @uses self::CREDIT_CARD_AT_DESTINATION
     * @uses self::CREDIT_CARD_AT_ORIGIN
     * @uses self::OTHER
     * @uses self::RECIPIENT_ACCOUNT
     * @uses self::SHIPPER_ACCOUNT
     * @uses self::THIRD_PARTY_ACCOUNT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CASH_OR_CHECK_AT_DESTINATION,
            self::CASH_OR_CHECK_AT_ORIGIN,
            self::CREDIT_CARD_AT_DESTINATION,
            self::CREDIT_CARD_AT_ORIGIN,
            self::OTHER,
            self::RECIPIENT_ACCOUNT,
            self::SHIPPER_ACCOUNT,
            self::THIRD_PARTY_ACCOUNT,
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
