<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DestinationControlStatementType Enums
 * @subpackage Enumerations
 */
class DestinationControlStatementType
{
    /**
     * Constant for value 'DEPARTMENT_OF_COMMERCE'
     * @return string 'DEPARTMENT_OF_COMMERCE'
     */
    const DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
    /**
     * Constant for value 'DEPARTMENT_OF_STATE'
     * @return string 'DEPARTMENT_OF_STATE'
     */
    const DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
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
     * @uses self::DEPARTMENT_OF_COMMERCE
     * @uses self::DEPARTMENT_OF_STATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::DEPARTMENT_OF_COMMERCE,
            self::DEPARTMENT_OF_STATE,
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
