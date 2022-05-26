<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NaftaNetCostMethodCode Enums
 * @subpackage Enumerations
 */
class NaftaNetCostMethodCode
{
    /**
     * Constant for value 'NC'
     * @return string 'NC'
     */
    const NC = 'NC';
    /**
     * Constant for value 'NO'
     * @return string 'NO'
     */
    const NO = 'NO';
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
     * @uses self::NC
     * @uses self::NO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::NC,
            self::NO,
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
