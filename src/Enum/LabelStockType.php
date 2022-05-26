<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LabelStockType Enums
 * @subpackage Enumerations
 */
class LabelStockType
{
    /**
     * Constant for value 'PAPER_4X6'
     * @return string 'PAPER_4X6'
     */
    const PAPER_4X6 = 'PAPER_4X6';
    /**
     * Constant for value 'PAPER_4X8'
     * @return string 'PAPER_4X8'
     */
    const PAPER_4X8 = 'PAPER_4X8';
    /**
     * Constant for value 'PAPER_4X9'
     * @return string 'PAPER_4X9'
     */
    const PAPER_4X9 = 'PAPER_4X9';
    /**
     * Constant for value 'PAPER_7X4.75'
     * @return string 'PAPER_7X4.75'
     */
    const PAPER_7X4_75 = 'PAPER_7X4.75';
    /**
     * Constant for value 'PAPER_8.5X11_BOTTOM_HALF_LABEL'
     * @return string 'PAPER_8.5X11_BOTTOM_HALF_LABEL'
     */
    const PAPER_8_5X11_BOTTOM_HALF_LABEL = 'PAPER_8.5X11_BOTTOM_HALF_LABEL';
    /**
     * Constant for value 'PAPER_8.5X11_TOP_HALF_LABEL'
     * @return string 'PAPER_8.5X11_TOP_HALF_LABEL'
     */
    const PAPER_8_5X11_TOP_HALF_LABEL = 'PAPER_8.5X11_TOP_HALF_LABEL';
    /**
     * Constant for value 'STOCK_4X6'
     * @return string 'STOCK_4X6'
     */
    const STOCK_4X6 = 'STOCK_4X6';
    /**
     * Constant for value 'STOCK_4X6.75_LEADING_DOC_TAB'
     * @return string 'STOCK_4X6.75_LEADING_DOC_TAB'
     */
    const STOCK_4X6_75_LEADING_DOC_TAB = 'STOCK_4X6.75_LEADING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X6.75_TRAILING_DOC_TAB'
     * @return string 'STOCK_4X6.75_TRAILING_DOC_TAB'
     */
    const STOCK_4X6_75_TRAILING_DOC_TAB = 'STOCK_4X6.75_TRAILING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X8'
     * @return string 'STOCK_4X8'
     */
    const STOCK_4X8 = 'STOCK_4X8';
    /**
     * Constant for value 'STOCK_4X9_LEADING_DOC_TAB'
     * @return string 'STOCK_4X9_LEADING_DOC_TAB'
     */
    const STOCK_4X9_LEADING_DOC_TAB = 'STOCK_4X9_LEADING_DOC_TAB';
    /**
     * Constant for value 'STOCK_4X9_TRAILING_DOC_TAB'
     * @return string 'STOCK_4X9_TRAILING_DOC_TAB'
     */
    const STOCK_4X9_TRAILING_DOC_TAB = 'STOCK_4X9_TRAILING_DOC_TAB';
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
     * @uses self::PAPER_4X6
     * @uses self::PAPER_4X8
     * @uses self::PAPER_4X9
     * @uses self::PAPER_7X4_75
     * @uses self::PAPER_8_5X11_BOTTOM_HALF_LABEL
     * @uses self::PAPER_8_5X11_TOP_HALF_LABEL
     * @uses self::STOCK_4X6
     * @uses self::STOCK_4X6_75_LEADING_DOC_TAB
     * @uses self::STOCK_4X6_75_TRAILING_DOC_TAB
     * @uses self::STOCK_4X8
     * @uses self::STOCK_4X9_LEADING_DOC_TAB
     * @uses self::STOCK_4X9_TRAILING_DOC_TAB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::PAPER_4X6,
            self::PAPER_4X8,
            self::PAPER_4X9,
            self::PAPER_7X4_75,
            self::PAPER_8_5X11_BOTTOM_HALF_LABEL,
            self::PAPER_8_5X11_TOP_HALF_LABEL,
            self::STOCK_4X6,
            self::STOCK_4X6_75_LEADING_DOC_TAB,
            self::STOCK_4X6_75_TRAILING_DOC_TAB,
            self::STOCK_4X8,
            self::STOCK_4X9_LEADING_DOC_TAB,
            self::STOCK_4X9_TRAILING_DOC_TAB,
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
