<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RadioactiveLabelType Enums
 * @subpackage Enumerations
 */
class RadioactiveLabelType
{
    /**
     * Constant for value 'III_YELLOW'
     * @return string 'III_YELLOW'
     */
    const III_YELLOW = 'III_YELLOW';
    /**
     * Constant for value 'II_YELLOW'
     * @return string 'II_YELLOW'
     */
    const II_YELLOW = 'II_YELLOW';
    /**
     * Constant for value 'I_WHITE'
     * @return string 'I_WHITE'
     */
    const I_WHITE = 'I_WHITE';
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
     * @uses self::III_YELLOW
     * @uses self::II_YELLOW
     * @uses self::I_WHITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::III_YELLOW,
            self::II_YELLOW,
            self::I_WHITE,
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
