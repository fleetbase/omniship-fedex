<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PackageSpecialServiceType Enums
 * @subpackage Enumerations
 */
class PackageSpecialServiceType
{
    /**
     * Constant for value 'ALCOHOL'
     * @return string 'ALCOHOL'
     */
    const ALCOHOL = 'ALCOHOL';
    /**
     * Constant for value 'APPOINTMENT_DELIVERY'
     * @return string 'APPOINTMENT_DELIVERY'
     */
    const APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    /**
     * Constant for value 'COD'
     * @return string 'COD'
     */
    const COD = 'COD';
    /**
     * Constant for value 'DANGEROUS_GOODS'
     * @return string 'DANGEROUS_GOODS'
     */
    const DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    /**
     * Constant for value 'DRY_ICE'
     * @return string 'DRY_ICE'
     */
    const DRY_ICE = 'DRY_ICE';
    /**
     * Constant for value 'NON_STANDARD_CONTAINER'
     * @return string 'NON_STANDARD_CONTAINER'
     */
    const NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';
    /**
     * Constant for value 'PRIORITY_ALERT'
     * @return string 'PRIORITY_ALERT'
     */
    const PRIORITY_ALERT = 'PRIORITY_ALERT';
    /**
     * Constant for value 'SIGNATURE_OPTION'
     * @return string 'SIGNATURE_OPTION'
     */
    const SIGNATURE_OPTION = 'SIGNATURE_OPTION';
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
     * @uses self::ALCOHOL
     * @uses self::APPOINTMENT_DELIVERY
     * @uses self::COD
     * @uses self::DANGEROUS_GOODS
     * @uses self::DRY_ICE
     * @uses self::NON_STANDARD_CONTAINER
     * @uses self::PRIORITY_ALERT
     * @uses self::SIGNATURE_OPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ALCOHOL,
            self::APPOINTMENT_DELIVERY,
            self::COD,
            self::DANGEROUS_GOODS,
            self::DRY_ICE,
            self::NON_STANDARD_CONTAINER,
            self::PRIORITY_ALERT,
            self::SIGNATURE_OPTION,
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
