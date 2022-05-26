<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DocumentFormatOptionType Enums
 * @subpackage Enumerations
 */
class DocumentFormatOptionType
{
    /**
     * Constant for value 'SUPPRESS_ADDITIONAL_LANGUAGES'
     * @return string 'SUPPRESS_ADDITIONAL_LANGUAGES'
     */
    const SUPPRESS_ADDITIONAL_LANGUAGES = 'SUPPRESS_ADDITIONAL_LANGUAGES';
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
     * @uses self::SUPPRESS_ADDITIONAL_LANGUAGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::SUPPRESS_ADDITIONAL_LANGUAGES,
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
