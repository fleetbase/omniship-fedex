<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomerSpecifiedLabelGenerationOptionType Enums
 * @subpackage Enumerations
 */
class CustomerSpecifiedLabelGenerationOptionType
{
    /**
     * Constant for value 'CONTENT_ON_SHIPPING_LABEL_ONLY'
     * @return string 'CONTENT_ON_SHIPPING_LABEL_ONLY'
     */
    const CONTENT_ON_SHIPPING_LABEL_ONLY = 'CONTENT_ON_SHIPPING_LABEL_ONLY';
    /**
     * Constant for value 'CONTENT_ON_SHIPPING_LABEL_PREFERRED'
     * @return string 'CONTENT_ON_SHIPPING_LABEL_PREFERRED'
     */
    const CONTENT_ON_SHIPPING_LABEL_PREFERRED = 'CONTENT_ON_SHIPPING_LABEL_PREFERRED';
    /**
     * Constant for value 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY'
     * @return string 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY'
     */
    const CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY = 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY';
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
     * @uses self::CONTENT_ON_SHIPPING_LABEL_ONLY
     * @uses self::CONTENT_ON_SHIPPING_LABEL_PREFERRED
     * @uses self::CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONTENT_ON_SHIPPING_LABEL_ONLY,
            self::CONTENT_ON_SHIPPING_LABEL_PREFERRED,
            self::CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY,
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
