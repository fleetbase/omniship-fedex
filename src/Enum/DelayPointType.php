<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DelayPointType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The point where the delay is occurring ( e.g. Origin, Destination, Broker location).
 * @subpackage Enumerations
 */
class DelayPointType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const BROKER = 'BROKER';
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'ORIGIN'
     * @return string 'ORIGIN'
     */
    const ORIGIN = 'ORIGIN';
    /**
     * Constant for value 'ORIGIN_DESTINATION_PAIR'
     * @return string 'ORIGIN_DESTINATION_PAIR'
     */
    const ORIGIN_DESTINATION_PAIR = 'ORIGIN_DESTINATION_PAIR';
    /**
     * Constant for value 'PROOF_OF_DELIVERY_POINT'
     * @return string 'PROOF_OF_DELIVERY_POINT'
     */
    const PROOF_OF_DELIVERY_POINT = 'PROOF_OF_DELIVERY_POINT';
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
     * @uses self::DESTINATION
     * @uses self::ORIGIN
     * @uses self::ORIGIN_DESTINATION_PAIR
     * @uses self::PROOF_OF_DELIVERY_POINT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BROKER,
            self::DESTINATION,
            self::ORIGIN,
            self::ORIGIN_DESTINATION_PAIR,
            self::PROOF_OF_DELIVERY_POINT,
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
