<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackDetailAttributeType Enums
 * @subpackage Enumerations
 */
class TrackDetailAttributeType
{
    /**
     * Constant for value 'INCLUDED_IN_WATCHLIST'
     * @return string 'INCLUDED_IN_WATCHLIST'
     */
    const INCLUDED_IN_WATCHLIST = 'INCLUDED_IN_WATCHLIST';
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
     * @uses self::INCLUDED_IN_WATCHLIST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::INCLUDED_IN_WATCHLIST,
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
