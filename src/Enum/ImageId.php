<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ImageId Enums
 * @subpackage Enumerations
 */
class ImageId
{
    /**
     * Constant for value 'IMAGE_1'
     * @return string 'IMAGE_1'
     */
    const IMAGE_1 = 'IMAGE_1';
    /**
     * Constant for value 'IMAGE_2'
     * @return string 'IMAGE_2'
     */
    const IMAGE_2 = 'IMAGE_2';
    /**
     * Constant for value 'IMAGE_3'
     * @return string 'IMAGE_3'
     */
    const IMAGE_3 = 'IMAGE_3';
    /**
     * Constant for value 'IMAGE_4'
     * @return string 'IMAGE_4'
     */
    const IMAGE_4 = 'IMAGE_4';
    /**
     * Constant for value 'IMAGE_5'
     * @return string 'IMAGE_5'
     */
    const IMAGE_5 = 'IMAGE_5';
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
     * @uses self::IMAGE_1
     * @uses self::IMAGE_2
     * @uses self::IMAGE_3
     * @uses self::IMAGE_4
     * @uses self::IMAGE_5
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::IMAGE_1,
            self::IMAGE_2,
            self::IMAGE_3,
            self::IMAGE_4,
            self::IMAGE_5,
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
