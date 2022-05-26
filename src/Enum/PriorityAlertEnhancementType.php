<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PriorityAlertEnhancementType Enums
 * @subpackage Enumerations
 */
class PriorityAlertEnhancementType
{
    /**
     * Constant for value 'PRIORITY_ALERT_PLUS'
     * @return string 'PRIORITY_ALERT_PLUS'
     */
    const PRIORITY_ALERT_PLUS = 'PRIORITY_ALERT_PLUS';
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
     * @uses self::PRIORITY_ALERT_PLUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::PRIORITY_ALERT_PLUS,
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
