<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightBaseChargeCalculationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the way in which base charges for a Freight shipment or shipment leg are calculated.
 * @subpackage Enumerations
 */
class FreightBaseChargeCalculationType
{
    /**
     * Constant for value 'LINE_ITEMS'
     * @return string 'LINE_ITEMS'
     */
    const LINE_ITEMS = 'LINE_ITEMS';
    /**
     * Constant for value 'UNIT_PRICING'
     * @return string 'UNIT_PRICING'
     */
    const UNIT_PRICING = 'UNIT_PRICING';
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
     * @uses self::LINE_ITEMS
     * @uses self::UNIT_PRICING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LINE_ITEMS,
            self::UNIT_PRICING,
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
