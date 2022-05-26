<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ServiceOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 * @subpackage Enumerations
 */
class ServiceOptionType
{
    /**
     * Constant for value 'FEDEX_ONE_RATE'
     * @return string 'FEDEX_ONE_RATE'
     */
    const FEDEX_ONE_RATE = 'FEDEX_ONE_RATE';
    /**
     * Constant for value 'FREIGHT_GUARANTEE'
     * @return string 'FREIGHT_GUARANTEE'
     */
    const FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    /**
     * Constant for value 'SATURDAY_DELIVERY'
     * @return string 'SATURDAY_DELIVERY'
     */
    const SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    /**
     * Constant for value 'SMART_POST_ALLOWED_INDICIA'
     * @return string 'SMART_POST_ALLOWED_INDICIA'
     */
    const SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
    /**
     * Constant for value 'SMART_POST_HUB_ID'
     * @return string 'SMART_POST_HUB_ID'
     */
    const SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';
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
     * @uses self::FEDEX_ONE_RATE
     * @uses self::FREIGHT_GUARANTEE
     * @uses self::SATURDAY_DELIVERY
     * @uses self::SMART_POST_ALLOWED_INDICIA
     * @uses self::SMART_POST_HUB_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_ONE_RATE,
            self::FREIGHT_GUARANTEE,
            self::SATURDAY_DELIVERY,
            self::SMART_POST_ALLOWED_INDICIA,
            self::SMART_POST_HUB_ID,
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
