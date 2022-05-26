<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomsRoleType Enums
 * @subpackage Enumerations
 */
class CustomsRoleType
{
    /**
     * Constant for value 'EXPORTER'
     * @return string 'EXPORTER'
     */
    const EXPORTER = 'EXPORTER';
    /**
     * Constant for value 'IMPORTER'
     * @return string 'IMPORTER'
     */
    const IMPORTER = 'IMPORTER';
    /**
     * Constant for value 'LEGAL_AGENT'
     * @return string 'LEGAL_AGENT'
     */
    const LEGAL_AGENT = 'LEGAL_AGENT';
    /**
     * Constant for value 'PRODUCER'
     * @return string 'PRODUCER'
     */
    const PRODUCER = 'PRODUCER';
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
     * @uses self::EXPORTER
     * @uses self::IMPORTER
     * @uses self::LEGAL_AGENT
     * @uses self::PRODUCER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EXPORTER,
            self::IMPORTER,
            self::LEGAL_AGENT,
            self::PRODUCER,
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
