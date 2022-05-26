<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PaymentType Enums
 * @subpackage Enumerations
 */
class PaymentType
{
    /**
     * Constant for value 'SENDER'
     * @return string 'SENDER'
     */
    const SENDER = 'SENDER';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'THIRD_PARTY'
     * @return string 'THIRD_PARTY'
     */
    const THIRD_PARTY = 'THIRD_PARTY';
    /**
     * Constant for value 'COLLECT'
     * @return string 'COLLECT'
     */
    const COLLECT = 'COLLECT';
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
     * @uses self::SENDER
     * @uses self::RECIPIENT
     * @uses self::THIRD_PARTY
     * @uses self::COLLECT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::SENDER,
            self::RECIPIENT,
            self::THIRD_PARTY,
            self::COLLECT,
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
