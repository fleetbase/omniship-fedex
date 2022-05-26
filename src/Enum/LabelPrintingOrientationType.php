<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LabelPrintingOrientationType Enums
 * @subpackage Enumerations
 */
class LabelPrintingOrientationType
{
    /**
     * Constant for value 'BOTTOM_EDGE_OF_TEXT_FIRST'
     * @return string 'BOTTOM_EDGE_OF_TEXT_FIRST'
     */
    const BOTTOM_EDGE_OF_TEXT_FIRST = 'BOTTOM_EDGE_OF_TEXT_FIRST';
    /**
     * Constant for value 'TOP_EDGE_OF_TEXT_FIRST'
     * @return string 'TOP_EDGE_OF_TEXT_FIRST'
     */
    const TOP_EDGE_OF_TEXT_FIRST = 'TOP_EDGE_OF_TEXT_FIRST';
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
     * @uses self::BOTTOM_EDGE_OF_TEXT_FIRST
     * @uses self::TOP_EDGE_OF_TEXT_FIRST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BOTTOM_EDGE_OF_TEXT_FIRST,
            self::TOP_EDGE_OF_TEXT_FIRST,
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
