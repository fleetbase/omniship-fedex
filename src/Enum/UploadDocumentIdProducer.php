<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for UploadDocumentIdProducer Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the application that is responsible for managing the document id.
 * @subpackage Enumerations
 */
class UploadDocumentIdProducer
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
     * Constant for value 'FEDEX_CSHP'
     * @return string 'FEDEX_CSHP'
     */
    const FEDEX_CSHP = 'FEDEX_CSHP';
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
     * Constant for value 'FEDEX_INET'
     * @return string 'FEDEX_INET'
     */
    const FEDEX_INET = 'FEDEX_INET';
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
     * @uses self::FEDEX_CSHP
     * @uses self::FEDEX_FXRS
     * @uses self::FEDEX_GSMW
     * @uses self::FEDEX_GTM
     * @uses self::FEDEX_INET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CUSTOMER,
            self::FEDEX_CAFE,
            self::FEDEX_CSHP,
            self::FEDEX_FXRS,
            self::FEDEX_GSMW,
            self::FEDEX_GTM,
            self::FEDEX_INET,
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
