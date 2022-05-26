<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TaxesOrMiscellaneousChargeType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifice the kind of tax or miscellaneous charge being reported on a Commercial Invoice.
 * @subpackage Enumerations
 */
class TaxesOrMiscellaneousChargeType
{
    /**
     * Constant for value 'COMMISSIONS'
     * @return string 'COMMISSIONS'
     */
    const COMMISSIONS = 'COMMISSIONS';
    /**
     * Constant for value 'DISCOUNTS'
     * @return string 'DISCOUNTS'
     */
    const DISCOUNTS = 'DISCOUNTS';
    /**
     * Constant for value 'HANDLING_FEES'
     * @return string 'HANDLING_FEES'
     */
    const HANDLING_FEES = 'HANDLING_FEES';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'ROYALTIES_AND_LICENSE_FEES'
     * @return string 'ROYALTIES_AND_LICENSE_FEES'
     */
    const ROYALTIES_AND_LICENSE_FEES = 'ROYALTIES_AND_LICENSE_FEES';
    /**
     * Constant for value 'TAXES'
     * @return string 'TAXES'
     */
    const TAXES = 'TAXES';
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
     * @uses self::COMMISSIONS
     * @uses self::DISCOUNTS
     * @uses self::HANDLING_FEES
     * @uses self::OTHER
     * @uses self::ROYALTIES_AND_LICENSE_FEES
     * @uses self::TAXES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COMMISSIONS,
            self::DISCOUNTS,
            self::HANDLING_FEES,
            self::OTHER,
            self::ROYALTIES_AND_LICENSE_FEES,
            self::TAXES,
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
