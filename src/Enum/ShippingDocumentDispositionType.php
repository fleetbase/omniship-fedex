<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShippingDocumentDispositionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to return a shipping document to the caller.
 * @subpackage Enumerations
 */
class ShippingDocumentDispositionType
{
    /**
     * Constant for value 'CONFIRMED'
     * @return string 'CONFIRMED'
     */
    const CONFIRMED = 'CONFIRMED';
    /**
     * Constant for value 'DEFERRED_QUEUED'
     * @return string 'DEFERRED_QUEUED'
     */
    const DEFERRED_QUEUED = 'DEFERRED_QUEUED';
    /**
     * Constant for value 'DEFERRED_RETURNED'
     * @return string 'DEFERRED_RETURNED'
     */
    const DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    /**
     * Constant for value 'DEFERRED_STORED'
     * @return string 'DEFERRED_STORED'
     */
    const DEFERRED_STORED = 'DEFERRED_STORED';
    /**
     * Constant for value 'EMAILED'
     * @return string 'EMAILED'
     */
    const EMAILED = 'EMAILED';
    /**
     * Constant for value 'QUEUED'
     * @return string 'QUEUED'
     */
    const QUEUED = 'QUEUED';
    /**
     * Constant for value 'RETURNED'
     * @return string 'RETURNED'
     */
    const RETURNED = 'RETURNED';
    /**
     * Constant for value 'STORED'
     * @return string 'STORED'
     */
    const STORED = 'STORED';
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
     * @uses self::CONFIRMED
     * @uses self::DEFERRED_QUEUED
     * @uses self::DEFERRED_RETURNED
     * @uses self::DEFERRED_STORED
     * @uses self::EMAILED
     * @uses self::QUEUED
     * @uses self::RETURNED
     * @uses self::STORED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONFIRMED,
            self::DEFERRED_QUEUED,
            self::DEFERRED_RETURNED,
            self::DEFERRED_STORED,
            self::EMAILED,
            self::QUEUED,
            self::RETURNED,
            self::STORED,
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
