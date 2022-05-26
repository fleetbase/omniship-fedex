<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ExpressRegionCode Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates a FedEx Express operating region.
 * @subpackage Enumerations
 */
class ExpressRegionCode
{
    /**
     * Constant for value 'APAC'
     * @return string 'APAC'
     */
    const APAC = 'APAC';
    /**
     * Constant for value 'CA'
     * @return string 'CA'
     */
    const CA = 'CA';
    /**
     * Constant for value 'EMEA'
     * @return string 'EMEA'
     */
    const EMEA = 'EMEA';
    /**
     * Constant for value 'LAC'
     * @return string 'LAC'
     */
    const LAC = 'LAC';
    /**
     * Constant for value 'US'
     * @return string 'US'
     */
    const US = 'US';
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
     * @uses self::APAC
     * @uses self::CA
     * @uses self::EMEA
     * @uses self::LAC
     * @uses self::US
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::APAC,
            self::CA,
            self::EMEA,
            self::LAC,
            self::US,
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
