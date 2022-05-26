<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DangerousGoodsAccessibilityType Enums
 * @subpackage Enumerations
 */
class DangerousGoodsAccessibilityType
{
    /**
     * Constant for value 'ACCESSIBLE'
     * @return string 'ACCESSIBLE'
     */
    const ACCESSIBLE = 'ACCESSIBLE';
    /**
     * Constant for value 'INACCESSIBLE'
     * @return string 'INACCESSIBLE'
     */
    const INACCESSIBLE = 'INACCESSIBLE';
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
     * @uses self::ACCESSIBLE
     * @uses self::INACCESSIBLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ACCESSIBLE,
            self::INACCESSIBLE,
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
