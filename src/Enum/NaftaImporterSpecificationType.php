<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for NaftaImporterSpecificationType Enums
 * @subpackage Enumerations
 */
class NaftaImporterSpecificationType
{
    /**
     * Constant for value 'IMPORTER_OF_RECORD'
     * @return string 'IMPORTER_OF_RECORD'
     */
    const IMPORTER_OF_RECORD = 'IMPORTER_OF_RECORD';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const UNKNOWN = 'UNKNOWN';
    /**
     * Constant for value 'VARIOUS'
     * @return string 'VARIOUS'
     */
    const VARIOUS = 'VARIOUS';
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
     * @uses self::IMPORTER_OF_RECORD
     * @uses self::RECIPIENT
     * @uses self::UNKNOWN
     * @uses self::VARIOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::IMPORTER_OF_RECORD,
            self::RECIPIENT,
            self::UNKNOWN,
            self::VARIOUS,
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
