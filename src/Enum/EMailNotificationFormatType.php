<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EMailNotificationFormatType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The format of the email
 * @subpackage Enumerations
 */
class EMailNotificationFormatType
{
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const HTML = 'HTML';
    /**
     * Constant for value 'TEXT'
     * @return string 'TEXT'
     */
    const TEXT = 'TEXT';
    /**
     * Constant for value 'WIRELESS'
     * @return string 'WIRELESS'
     */
    const WIRELESS = 'WIRELESS';
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
     * @uses self::HTML
     * @uses self::TEXT
     * @uses self::WIRELESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::HTML,
            self::TEXT,
            self::WIRELESS,
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
