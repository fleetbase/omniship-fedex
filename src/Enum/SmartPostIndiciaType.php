<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SmartPostIndiciaType Enums
 * @subpackage Enumerations
 */
class SmartPostIndiciaType
{
    /**
     * Constant for value 'MEDIA_MAIL'
     * @return string 'MEDIA_MAIL'
     */
    const MEDIA_MAIL = 'MEDIA_MAIL';
    /**
     * Constant for value 'PARCEL_RETURN'
     * @return string 'PARCEL_RETURN'
     */
    const PARCEL_RETURN = 'PARCEL_RETURN';
    /**
     * Constant for value 'PARCEL_SELECT'
     * @return string 'PARCEL_SELECT'
     */
    const PARCEL_SELECT = 'PARCEL_SELECT';
    /**
     * Constant for value 'PRESORTED_BOUND_PRINTED_MATTER'
     * @return string 'PRESORTED_BOUND_PRINTED_MATTER'
     */
    const PRESORTED_BOUND_PRINTED_MATTER = 'PRESORTED_BOUND_PRINTED_MATTER';
    /**
     * Constant for value 'PRESORTED_STANDARD'
     * @return string 'PRESORTED_STANDARD'
     */
    const PRESORTED_STANDARD = 'PRESORTED_STANDARD';
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
     * @uses self::MEDIA_MAIL
     * @uses self::PARCEL_RETURN
     * @uses self::PARCEL_SELECT
     * @uses self::PRESORTED_BOUND_PRINTED_MATTER
     * @uses self::PRESORTED_STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::MEDIA_MAIL,
            self::PARCEL_RETURN,
            self::PARCEL_SELECT,
            self::PRESORTED_BOUND_PRINTED_MATTER,
            self::PRESORTED_STANDARD,
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
