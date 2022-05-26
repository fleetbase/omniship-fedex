<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PageQuadrantType Enums
 * @subpackage Enumerations
 */
class PageQuadrantType
{
    /**
     * Constant for value 'BOTTOM_LEFT'
     * @return string 'BOTTOM_LEFT'
     */
    const BOTTOM_LEFT = 'BOTTOM_LEFT';
    /**
     * Constant for value 'BOTTOM_RIGHT'
     * @return string 'BOTTOM_RIGHT'
     */
    const BOTTOM_RIGHT = 'BOTTOM_RIGHT';
    /**
     * Constant for value 'TOP_LEFT'
     * @return string 'TOP_LEFT'
     */
    const TOP_LEFT = 'TOP_LEFT';
    /**
     * Constant for value 'TOP_RIGHT'
     * @return string 'TOP_RIGHT'
     */
    const TOP_RIGHT = 'TOP_RIGHT';
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
     * @uses self::BOTTOM_LEFT
     * @uses self::BOTTOM_RIGHT
     * @uses self::TOP_LEFT
     * @uses self::TOP_RIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BOTTOM_LEFT,
            self::BOTTOM_RIGHT,
            self::TOP_LEFT,
            self::TOP_RIGHT,
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
