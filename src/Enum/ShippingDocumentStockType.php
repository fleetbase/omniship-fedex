<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShippingDocumentStockType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of paper (stock) on which a document will be printed.
 * @subpackage Enumerations
 */
class ShippingDocumentStockType
{
    /**
     * Constant for value 'OP_900_LG_B'
     * @return string 'OP_900_LG_B'
     */
    const OP_900_LG_B = 'OP_900_LG_B';
    /**
     * Constant for value 'OP_900_LL_B'
     * @return string 'OP_900_LL_B'
     */
    const OP_900_LL_B = 'OP_900_LL_B';
    /**
     * Constant for value 'PAPER_4X6'
     * @return string 'PAPER_4X6'
     */
    const PAPER_4X6 = 'PAPER_4X6';
    /**
     * Constant for value 'PAPER_LETTER'
     * @return string 'PAPER_LETTER'
     */
    const PAPER_LETTER = 'PAPER_LETTER';
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
     * @uses self::OP_900_LG_B
     * @uses self::OP_900_LL_B
     * @uses self::PAPER_4X6
     * @uses self::PAPER_LETTER
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
            self::OP_900_LG_B,
            self::OP_900_LL_B,
            self::PAPER_4X6,
            self::PAPER_LETTER,
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
