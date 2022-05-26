<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AdditionalLabelsType Enums
 * @subpackage Enumerations
 */
class AdditionalLabelsType
{
    /**
     * Constant for value 'BROKER'
     * @return string 'BROKER'
     */
    const BROKER = 'BROKER';
    /**
     * Constant for value 'CONSIGNEE'
     * @return string 'CONSIGNEE'
     */
    const CONSIGNEE = 'CONSIGNEE';
    /**
     * Constant for value 'CUSTOMS'
     * @return string 'CUSTOMS'
     */
    const CUSTOMS = 'CUSTOMS';
    /**
     * Constant for value 'DESTINATION'
     * @return string 'DESTINATION'
     */
    const DESTINATION = 'DESTINATION';
    /**
     * Constant for value 'MANIFEST'
     * @return string 'MANIFEST'
     */
    const MANIFEST = 'MANIFEST';
    /**
     * Constant for value 'ORIGIN'
     * @return string 'ORIGIN'
     */
    const ORIGIN = 'ORIGIN';
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
     * @uses self::CONSIGNEE
     * @uses self::CUSTOMS
     * @uses self::DESTINATION
     * @uses self::MANIFEST
     * @uses self::ORIGIN
     * @uses self::RECIPIENT
     * @uses self::SHIPPER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BROKER,
            self::CONSIGNEE,
            self::CUSTOMS,
            self::DESTINATION,
            self::MANIFEST,
            self::ORIGIN,
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
