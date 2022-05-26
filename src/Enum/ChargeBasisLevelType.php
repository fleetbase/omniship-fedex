<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ChargeBasisLevelType Enums
 * @subpackage Enumerations
 */
class ChargeBasisLevelType
{
    /**
     * Constant for value 'CURRENT_PACKAGE'
     * @return string 'CURRENT_PACKAGE'
     */
    const CURRENT_PACKAGE = 'CURRENT_PACKAGE';
    /**
     * Constant for value 'SUM_OF_PACKAGES'
     * @return string 'SUM_OF_PACKAGES'
     */
    const SUM_OF_PACKAGES = 'SUM_OF_PACKAGES';
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
     * @uses self::CURRENT_PACKAGE
     * @uses self::SUM_OF_PACKAGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CURRENT_PACKAGE,
            self::SUM_OF_PACKAGES,
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
