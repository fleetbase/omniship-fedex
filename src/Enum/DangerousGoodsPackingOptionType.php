<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DangerousGoodsPackingOptionType Enums
 * @subpackage Enumerations
 */
class DangerousGoodsPackingOptionType
{
    /**
     * Constant for value 'OVERPACK'
     * @return string 'OVERPACK'
     */
    const OVERPACK = 'OVERPACK';
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
     * @uses self::OVERPACK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::OVERPACK,
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
