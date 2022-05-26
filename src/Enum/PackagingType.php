<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PackagingType Enums
 * @subpackage Enumerations
 */
class PackagingType
{
    /**
     * Constant for value 'FEDEX_10KG_BOX'
     * @return string 'FEDEX_10KG_BOX'
     */
    const FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';
    /**
     * Constant for value 'FEDEX_25KG_BOX'
     * @return string 'FEDEX_25KG_BOX'
     */
    const FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';
    /**
     * Constant for value 'FEDEX_BOX'
     * @return string 'FEDEX_BOX'
     */
    const FEDEX_BOX = 'FEDEX_BOX';
    /**
     * Constant for value 'FEDEX_ENVELOPE'
     * @return string 'FEDEX_ENVELOPE'
     */
    const FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    /**
     * Constant for value 'FEDEX_EXTRA_LARGE_BOX'
     * @return string 'FEDEX_EXTRA_LARGE_BOX'
     */
    const FEDEX_EXTRA_LARGE_BOX = 'FEDEX_EXTRA_LARGE_BOX';
    /**
     * Constant for value 'FEDEX_LARGE_BOX'
     * @return string 'FEDEX_LARGE_BOX'
     */
    const FEDEX_LARGE_BOX = 'FEDEX_LARGE_BOX';
    /**
     * Constant for value 'FEDEX_MEDIUM_BOX'
     * @return string 'FEDEX_MEDIUM_BOX'
     */
    const FEDEX_MEDIUM_BOX = 'FEDEX_MEDIUM_BOX';
    /**
     * Constant for value 'FEDEX_PAK'
     * @return string 'FEDEX_PAK'
     */
    const FEDEX_PAK = 'FEDEX_PAK';
    /**
     * Constant for value 'FEDEX_SMALL_BOX'
     * @return string 'FEDEX_SMALL_BOX'
     */
    const FEDEX_SMALL_BOX = 'FEDEX_SMALL_BOX';
    /**
     * Constant for value 'FEDEX_TUBE'
     * @return string 'FEDEX_TUBE'
     */
    const FEDEX_TUBE = 'FEDEX_TUBE';
    /**
     * Constant for value 'YOUR_PACKAGING'
     * @return string 'YOUR_PACKAGING'
     */
    const YOUR_PACKAGING = 'YOUR_PACKAGING';
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
     * @uses self::FEDEX_10KG_BOX
     * @uses self::FEDEX_25KG_BOX
     * @uses self::FEDEX_BOX
     * @uses self::FEDEX_ENVELOPE
     * @uses self::FEDEX_EXTRA_LARGE_BOX
     * @uses self::FEDEX_LARGE_BOX
     * @uses self::FEDEX_MEDIUM_BOX
     * @uses self::FEDEX_PAK
     * @uses self::FEDEX_SMALL_BOX
     * @uses self::FEDEX_TUBE
     * @uses self::YOUR_PACKAGING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_10KG_BOX,
            self::FEDEX_25KG_BOX,
            self::FEDEX_BOX,
            self::FEDEX_ENVELOPE,
            self::FEDEX_EXTRA_LARGE_BOX,
            self::FEDEX_LARGE_BOX,
            self::FEDEX_MEDIUM_BOX,
            self::FEDEX_PAK,
            self::FEDEX_SMALL_BOX,
            self::FEDEX_TUBE,
            self::YOUR_PACKAGING,
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
