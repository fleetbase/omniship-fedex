<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityRegulationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the source of regulation for hazardous commodity data.
 * @subpackage Enumerations
 */
class HazardousCommodityRegulationType
{
    /**
     * Constant for value 'ADR'
     * @return string 'ADR'
     */
    const ADR = 'ADR';
    /**
     * Constant for value 'DOT'
     * @return string 'DOT'
     */
    const DOT = 'DOT';
    /**
     * Constant for value 'IATA'
     * @return string 'IATA'
     */
    const IATA = 'IATA';
    /**
     * Constant for value 'ORMD'
     * @return string 'ORMD'
     */
    const ORMD = 'ORMD';
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
     * @uses self::ADR
     * @uses self::DOT
     * @uses self::IATA
     * @uses self::ORMD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ADR,
            self::DOT,
            self::IATA,
            self::ORMD,
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
