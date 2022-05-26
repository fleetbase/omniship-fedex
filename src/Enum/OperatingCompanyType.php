<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for OperatingCompanyType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identification for a FedEx operating company (transportation and non-transportation).
 * @subpackage Enumerations
 */
class OperatingCompanyType
{
    /**
     * Constant for value 'FEDEX_CARGO'
     * @return string 'FEDEX_CARGO'
     */
    const FEDEX_CARGO = 'FEDEX_CARGO';
    /**
     * Constant for value 'FEDEX_CORPORATE_SERVICES'
     * @return string 'FEDEX_CORPORATE_SERVICES'
     */
    const FEDEX_CORPORATE_SERVICES = 'FEDEX_CORPORATE_SERVICES';
    /**
     * Constant for value 'FEDEX_CORPORATION'
     * @return string 'FEDEX_CORPORATION'
     */
    const FEDEX_CORPORATION = 'FEDEX_CORPORATION';
    /**
     * Constant for value 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS'
     * @return string 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS'
     */
    const FEDEX_CUSTOMER_INFORMATION_SYSTEMS = 'FEDEX_CUSTOMER_INFORMATION_SYSTEMS';
    /**
     * Constant for value 'FEDEX_CUSTOM_CRITICAL'
     * @return string 'FEDEX_CUSTOM_CRITICAL'
     */
    const FEDEX_CUSTOM_CRITICAL = 'FEDEX_CUSTOM_CRITICAL';
    /**
     * Constant for value 'FEDEX_EXPRESS'
     * @return string 'FEDEX_EXPRESS'
     */
    const FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    /**
     * Constant for value 'FEDEX_FREIGHT'
     * @return string 'FEDEX_FREIGHT'
     */
    const FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    /**
     * Constant for value 'FEDEX_GROUND'
     * @return string 'FEDEX_GROUND'
     */
    const FEDEX_GROUND = 'FEDEX_GROUND';
    /**
     * Constant for value 'FEDEX_KINKOS'
     * @return string 'FEDEX_KINKOS'
     */
    const FEDEX_KINKOS = 'FEDEX_KINKOS';
    /**
     * Constant for value 'FEDEX_OFFICE'
     * @return string 'FEDEX_OFFICE'
     */
    const FEDEX_OFFICE = 'FEDEX_OFFICE';
    /**
     * Constant for value 'FEDEX_SERVICES'
     * @return string 'FEDEX_SERVICES'
     */
    const FEDEX_SERVICES = 'FEDEX_SERVICES';
    /**
     * Constant for value 'FEDEX_TRADE_NETWORKS'
     * @return string 'FEDEX_TRADE_NETWORKS'
     */
    const FEDEX_TRADE_NETWORKS = 'FEDEX_TRADE_NETWORKS';
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
     * @uses self::FEDEX_CARGO
     * @uses self::FEDEX_CORPORATE_SERVICES
     * @uses self::FEDEX_CORPORATION
     * @uses self::FEDEX_CUSTOMER_INFORMATION_SYSTEMS
     * @uses self::FEDEX_CUSTOM_CRITICAL
     * @uses self::FEDEX_EXPRESS
     * @uses self::FEDEX_FREIGHT
     * @uses self::FEDEX_GROUND
     * @uses self::FEDEX_KINKOS
     * @uses self::FEDEX_OFFICE
     * @uses self::FEDEX_SERVICES
     * @uses self::FEDEX_TRADE_NETWORKS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_CARGO,
            self::FEDEX_CORPORATE_SERVICES,
            self::FEDEX_CORPORATION,
            self::FEDEX_CUSTOMER_INFORMATION_SYSTEMS,
            self::FEDEX_CUSTOM_CRITICAL,
            self::FEDEX_EXPRESS,
            self::FEDEX_FREIGHT,
            self::FEDEX_GROUND,
            self::FEDEX_KINKOS,
            self::FEDEX_OFFICE,
            self::FEDEX_SERVICES,
            self::FEDEX_TRADE_NETWORKS,
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
