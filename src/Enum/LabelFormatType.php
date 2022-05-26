<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LabelFormatType Enums
 * @subpackage Enumerations
 */
class LabelFormatType
{
    /**
     * Constant for value 'COMMON2D'
     * @return string 'COMMON2D'
     */
    const COMMON2D = 'COMMON2D';
    /**
     * Constant for value 'LABEL_DATA_ONLY'
     * @return string 'LABEL_DATA_ONLY'
     */
    const LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    /**
     * Constant for value 'MAILROOM'
     * @return string 'MAILROOM'
     */
    const MAILROOM = 'MAILROOM';
    /**
     * Constant for value 'NO_LABEL'
     * @return string 'NO_LABEL'
     */
    const NO_LABEL = 'NO_LABEL';
    /**
     * Constant for value 'OPERATIONAL_LABEL'
     * @return string 'OPERATIONAL_LABEL'
     */
    const OPERATIONAL_LABEL = 'OPERATIONAL_LABEL';
    /**
     * Constant for value 'PRE_COMMON2D'
     * @return string 'PRE_COMMON2D'
     */
    const PRE_COMMON2D = 'PRE_COMMON2D';
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
     * @uses self::COMMON2D
     * @uses self::LABEL_DATA_ONLY
     * @uses self::MAILROOM
     * @uses self::NO_LABEL
     * @uses self::OPERATIONAL_LABEL
     * @uses self::PRE_COMMON2D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COMMON2D,
            self::LABEL_DATA_ONLY,
            self::MAILROOM,
            self::NO_LABEL,
            self::OPERATIONAL_LABEL,
            self::PRE_COMMON2D,
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
