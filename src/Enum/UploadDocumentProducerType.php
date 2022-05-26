<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for UploadDocumentProducerType Enums
 * @subpackage Enumerations
 */
class UploadDocumentProducerType
{
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'FEDEX_CAFE'
     * @return string 'FEDEX_CAFE'
     */
    const FEDEX_CAFE = 'FEDEX_CAFE';
    /**
     * Constant for value 'FEDEX_CLS'
     * @return string 'FEDEX_CLS'
     */
    const FEDEX_CLS = 'FEDEX_CLS';
    /**
     * Constant for value 'FEDEX_FIDT'
     * @return string 'FEDEX_FIDT'
     */
    const FEDEX_FIDT = 'FEDEX_FIDT';
    /**
     * Constant for value 'FEDEX_FXRS'
     * @return string 'FEDEX_FXRS'
     */
    const FEDEX_FXRS = 'FEDEX_FXRS';
    /**
     * Constant for value 'FEDEX_GSMW'
     * @return string 'FEDEX_GSMW'
     */
    const FEDEX_GSMW = 'FEDEX_GSMW';
    /**
     * Constant for value 'FEDEX_GTM'
     * @return string 'FEDEX_GTM'
     */
    const FEDEX_GTM = 'FEDEX_GTM';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
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
     * @uses self::CUSTOMER
     * @uses self::FEDEX_CAFE
     * @uses self::FEDEX_CLS
     * @uses self::FEDEX_FIDT
     * @uses self::FEDEX_FXRS
     * @uses self::FEDEX_GSMW
     * @uses self::FEDEX_GTM
     * @uses self::OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CUSTOMER,
            self::FEDEX_CAFE,
            self::FEDEX_CLS,
            self::FEDEX_FIDT,
            self::FEDEX_FXRS,
            self::FEDEX_GSMW,
            self::FEDEX_GTM,
            self::OTHER,
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
