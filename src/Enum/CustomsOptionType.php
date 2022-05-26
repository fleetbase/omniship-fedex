<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomsOptionType Enums
 * @subpackage Enumerations
 */
class CustomsOptionType
{
    /**
     * Constant for value 'COURTESY_RETURN_LABEL'
     * @return string 'COURTESY_RETURN_LABEL'
     */
    const COURTESY_RETURN_LABEL = 'COURTESY_RETURN_LABEL';
    /**
     * Constant for value 'EXHIBITION_TRADE_SHOW'
     * @return string 'EXHIBITION_TRADE_SHOW'
     */
    const EXHIBITION_TRADE_SHOW = 'EXHIBITION_TRADE_SHOW';
    /**
     * Constant for value 'FAULTY_ITEM'
     * @return string 'FAULTY_ITEM'
     */
    const FAULTY_ITEM = 'FAULTY_ITEM';
    /**
     * Constant for value 'FOLLOWING_REPAIR'
     * @return string 'FOLLOWING_REPAIR'
     */
    const FOLLOWING_REPAIR = 'FOLLOWING_REPAIR';
    /**
     * Constant for value 'FOR_REPAIR'
     * @return string 'FOR_REPAIR'
     */
    const FOR_REPAIR = 'FOR_REPAIR';
    /**
     * Constant for value 'ITEM_FOR_LOAN'
     * @return string 'ITEM_FOR_LOAN'
     */
    const ITEM_FOR_LOAN = 'ITEM_FOR_LOAN';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'REJECTED'
     * @return string 'REJECTED'
     */
    const REJECTED = 'REJECTED';
    /**
     * Constant for value 'REPLACEMENT'
     * @return string 'REPLACEMENT'
     */
    const REPLACEMENT = 'REPLACEMENT';
    /**
     * Constant for value 'TRIAL'
     * @return string 'TRIAL'
     */
    const TRIAL = 'TRIAL';
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
     * @uses self::COURTESY_RETURN_LABEL
     * @uses self::EXHIBITION_TRADE_SHOW
     * @uses self::FAULTY_ITEM
     * @uses self::FOLLOWING_REPAIR
     * @uses self::FOR_REPAIR
     * @uses self::ITEM_FOR_LOAN
     * @uses self::OTHER
     * @uses self::REJECTED
     * @uses self::REPLACEMENT
     * @uses self::TRIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COURTESY_RETURN_LABEL,
            self::EXHIBITION_TRADE_SHOW,
            self::FAULTY_ITEM,
            self::FOLLOWING_REPAIR,
            self::FOR_REPAIR,
            self::ITEM_FOR_LOAN,
            self::OTHER,
            self::REJECTED,
            self::REPLACEMENT,
            self::TRIAL,
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
