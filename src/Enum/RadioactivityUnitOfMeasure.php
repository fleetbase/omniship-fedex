<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RadioactivityUnitOfMeasure Enums
 * @subpackage Enumerations
 */
class RadioactivityUnitOfMeasure
{
    /**
     * Constant for value 'BQ'
     * @return string 'BQ'
     */
    const BQ = 'BQ';
    /**
     * Constant for value 'GBQ'
     * @return string 'GBQ'
     */
    const GBQ = 'GBQ';
    /**
     * Constant for value 'KBQ'
     * @return string 'KBQ'
     */
    const KBQ = 'KBQ';
    /**
     * Constant for value 'MBQ'
     * @return string 'MBQ'
     */
    const MBQ = 'MBQ';
    /**
     * Constant for value 'PBQ'
     * @return string 'PBQ'
     */
    const PBQ = 'PBQ';
    /**
     * Constant for value 'TBQ'
     * @return string 'TBQ'
     */
    const TBQ = 'TBQ';
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
     * @uses self::BQ
     * @uses self::GBQ
     * @uses self::KBQ
     * @uses self::MBQ
     * @uses self::PBQ
     * @uses self::TBQ
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BQ,
            self::GBQ,
            self::KBQ,
            self::MBQ,
            self::PBQ,
            self::TBQ,
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
