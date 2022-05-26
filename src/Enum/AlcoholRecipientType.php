<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for AlcoholRecipientType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of license that the recipient of the alcohol shipment has.
 * @subpackage Enumerations
 */
class AlcoholRecipientType
{
    /**
     * Constant for value 'CONSUMER'
     * @return string 'CONSUMER'
     */
    const CONSUMER = 'CONSUMER';
    /**
     * Constant for value 'LICENSEE'
     * @return string 'LICENSEE'
     */
    const LICENSEE = 'LICENSEE';
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
     * @uses self::CONSUMER
     * @uses self::LICENSEE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONSUMER,
            self::LICENSEE,
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
