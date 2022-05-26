<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ConsolidationType Enums
 * @subpackage Enumerations
 */
class ConsolidationType
{
    /**
     * Constant for value 'INTERNATIONAL_DISTRIBUTION_FREIGHT'
     * @return string 'INTERNATIONAL_DISTRIBUTION_FREIGHT'
     */
    const INTERNATIONAL_DISTRIBUTION_FREIGHT = 'INTERNATIONAL_DISTRIBUTION_FREIGHT';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY_DISTRIBUTION'
     * @return string 'INTERNATIONAL_ECONOMY_DISTRIBUTION'
     */
    const INTERNATIONAL_ECONOMY_DISTRIBUTION = 'INTERNATIONAL_ECONOMY_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION'
     * @return string 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION'
     */
    const INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION = 'INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_GROUND_DISTRIBUTION'
     * @return string 'INTERNATIONAL_GROUND_DISTRIBUTION'
     */
    const INTERNATIONAL_GROUND_DISTRIBUTION = 'INTERNATIONAL_GROUND_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_PRIORITY_DISTRIBUTION'
     * @return string 'INTERNATIONAL_PRIORITY_DISTRIBUTION'
     */
    const INTERNATIONAL_PRIORITY_DISTRIBUTION = 'INTERNATIONAL_PRIORITY_DISTRIBUTION';
    /**
     * Constant for value 'TRANSBORDER_DISTRIBUTION'
     * @return string 'TRANSBORDER_DISTRIBUTION'
     */
    const TRANSBORDER_DISTRIBUTION = 'TRANSBORDER_DISTRIBUTION';
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
     * @uses self::INTERNATIONAL_DISTRIBUTION_FREIGHT
     * @uses self::INTERNATIONAL_ECONOMY_DISTRIBUTION
     * @uses self::INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION
     * @uses self::INTERNATIONAL_GROUND_DISTRIBUTION
     * @uses self::INTERNATIONAL_PRIORITY_DISTRIBUTION
     * @uses self::TRANSBORDER_DISTRIBUTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::INTERNATIONAL_DISTRIBUTION_FREIGHT,
            self::INTERNATIONAL_ECONOMY_DISTRIBUTION,
            self::INTERNATIONAL_GROUND_DIRECT_DISTRIBUTION,
            self::INTERNATIONAL_GROUND_DISTRIBUTION,
            self::INTERNATIONAL_PRIORITY_DISTRIBUTION,
            self::TRANSBORDER_DISTRIBUTION,
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
