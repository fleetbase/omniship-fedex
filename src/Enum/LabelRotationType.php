<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LabelRotationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Relative to normal orientation for the printer.
 * @subpackage Enumerations
 */
class LabelRotationType
{
    /**
     * Constant for value 'LEFT'
     * @return string 'LEFT'
     */
    const LEFT = 'LEFT';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const NONE = 'NONE';
    /**
     * Constant for value 'RIGHT'
     * @return string 'RIGHT'
     */
    const RIGHT = 'RIGHT';
    /**
     * Constant for value 'UPSIDE_DOWN'
     * @return string 'UPSIDE_DOWN'
     */
    const UPSIDE_DOWN = 'UPSIDE_DOWN';
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
     * @uses self::LEFT
     * @uses self::NONE
     * @uses self::RIGHT
     * @uses self::UPSIDE_DOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LEFT,
            self::NONE,
            self::RIGHT,
            self::UPSIDE_DOWN,
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
