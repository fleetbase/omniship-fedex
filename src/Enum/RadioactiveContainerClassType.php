<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RadioactiveContainerClassType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the packaging type of the container used to package radioactive hazardous materials.
 * @subpackage Enumerations
 */
class RadioactiveContainerClassType
{
    /**
     * Constant for value 'EXCEPTED_PACKAGE'
     * @return string 'EXCEPTED_PACKAGE'
     */
    const EXCEPTED_PACKAGE = 'EXCEPTED_PACKAGE';
    /**
     * Constant for value 'INDUSTRIAL_IP1'
     * @return string 'INDUSTRIAL_IP1'
     */
    const INDUSTRIAL_IP1 = 'INDUSTRIAL_IP1';
    /**
     * Constant for value 'INDUSTRIAL_IP2'
     * @return string 'INDUSTRIAL_IP2'
     */
    const INDUSTRIAL_IP2 = 'INDUSTRIAL_IP2';
    /**
     * Constant for value 'INDUSTRIAL_IP3'
     * @return string 'INDUSTRIAL_IP3'
     */
    const INDUSTRIAL_IP3 = 'INDUSTRIAL_IP3';
    /**
     * Constant for value 'TYPE_A'
     * @return string 'TYPE_A'
     */
    const TYPE_A = 'TYPE_A';
    /**
     * Constant for value 'TYPE_B_M'
     * @return string 'TYPE_B_M'
     */
    const TYPE_B_M = 'TYPE_B_M';
    /**
     * Constant for value 'TYPE_B_U'
     * @return string 'TYPE_B_U'
     */
    const TYPE_B_U = 'TYPE_B_U';
    /**
     * Constant for value 'TYPE_C'
     * @return string 'TYPE_C'
     */
    const TYPE_C = 'TYPE_C';
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
     * @uses self::EXCEPTED_PACKAGE
     * @uses self::INDUSTRIAL_IP1
     * @uses self::INDUSTRIAL_IP2
     * @uses self::INDUSTRIAL_IP3
     * @uses self::TYPE_A
     * @uses self::TYPE_B_M
     * @uses self::TYPE_B_U
     * @uses self::TYPE_C
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EXCEPTED_PACKAGE,
            self::INDUSTRIAL_IP1,
            self::INDUSTRIAL_IP2,
            self::INDUSTRIAL_IP3,
            self::TYPE_A,
            self::TYPE_B_M,
            self::TYPE_B_U,
            self::TYPE_C,
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
