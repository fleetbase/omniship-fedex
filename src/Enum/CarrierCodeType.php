<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CarrierCodeType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identification of a FedEx operating company (transportation).
 * @subpackage Enumerations
 */
class CarrierCodeType
{
    /**
     * Constant for value 'FDXC'
     * @return string 'FDXC'
     */
    const FDXC = 'FDXC';
    /**
     * Constant for value 'FDXE'
     * @return string 'FDXE'
     */
    const FDXE = 'FDXE';
    /**
     * Constant for value 'FDXG'
     * @return string 'FDXG'
     */
    const FDXG = 'FDXG';
    /**
     * Constant for value 'FXCC'
     * @return string 'FXCC'
     */
    const FXCC = 'FXCC';
    /**
     * Constant for value 'FXFR'
     * @return string 'FXFR'
     */
    const FXFR = 'FXFR';
    /**
     * Constant for value 'FXSP'
     * @return string 'FXSP'
     */
    const FXSP = 'FXSP';
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
     * @uses self::FDXC
     * @uses self::FDXE
     * @uses self::FDXG
     * @uses self::FXCC
     * @uses self::FXFR
     * @uses self::FXSP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FDXC,
            self::FDXE,
            self::FDXG,
            self::FXCC,
            self::FXFR,
            self::FXSP,
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
